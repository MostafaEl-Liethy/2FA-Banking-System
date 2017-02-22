import subprocess
import re
import sys
from subprocess import check_output

out = check_output("python ~/Desktop/eman-test/takepic.py", shell=True)
out1 = check_output("python ~/Desktop/eman-test/face-test.py", shell=True)
f = open('out.txt', 'w')
f.write(out1)
f.close()
out2 = check_output("python ~/Desktop/eman-test/search.py", shell=True)
print out2


'''
f=open('out.txt', 'r')
a= re.findall(r'\d+', f.read())
print a[-1]

'''
