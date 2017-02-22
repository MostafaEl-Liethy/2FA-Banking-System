import cv2
import PIL
import numpy as np
from PIL import Image

cap = cv2.VideoCapture(0)
while (True):
    ret,frame = cap.read()
    frame = cv2.cvtColor(frame, cv2.COLOR_BGR2GRAY) 
    cv2.imshow("frame", frame)
    cv2.imwrite("image.jpg", frame)
    im = Image.open("image.jpg")
    new_width = 320
    new_height = 243
    im = im.resize((new_width, new_height), Image.ANTIALIAS)
    #her u can change your mode
    im.save("subject05.mode.gif")
        
    if cv2.waitKey() &0xFF == ord('q'):
        break
       
cap.release()
cv2.destroyAllWindows()
     
