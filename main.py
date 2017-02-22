import hashlib
import sys
import string
import pymysql
import re
db = pymysql.connect(host='2fa-banking.ddns.net', port=3306, user='m.hesham', passwd='hesham123+%^&*', db='fa')

while True:
    query = db.cursor()
    f=open('tt.txt', 'r')
    a= re.findall(r'\d+', f.read())
    b= a[-1]
    cust_id = b
    
    def pincheck():
        pin = raw_input("welcome to our banking system\nPlease enter Your Pin : ")
        while not pin:
            try: 
                print ("You Enter Empty Pin Please Enter Your Pin")
                pin = raw_input("Pin : ")
            except :
                continue
        while pin:
            try: 
                if (len(pin)) == 4 and sum(map(str.isdigit, pin)) == 4 :
                    print ("Please Hold")
                return pin
            except :
                print("pin is wrong Please Try Again")
                continue
            
        

    pino = pincheck()
    if(query.execute("select F_Name from customer,credit_card_info where cust_id=customer_num and cust_id="+cust_id+" and pin=sha2("+pino+",256);")):
        db.commit()
        data = query.fetchone()
        print "logged in as %s" %data
        print "welcome to our server"
    elif(query.execute("select F_Name from customer,credit_card_info where cust_id=customer_num and cust_id!="+cust_id+" and pin=sha2("+pino+",256);")):
        print("Wrong Device Please Try Again\n")
    elif(query.execute("select F_Name from customer,credit_card_info where cust_id=customer_num and cust_id="+cust_id+" and pin!=sha2("+pino+",256);")):
        print("Wrong Pin Please Try Again\n")
    else:
        print "Wrong Pin and device Please Try Again\n"

    if(query.execute("select Balance from account,customer,credit_card_info where cust_id=customer_num and cust_id="+cust_id+" and pin=sha2("+pino+",256);")):
        db.commit()
        data = query.fetchone()
        print "Your Balance IS %s" %data
        print ""
db.close()
