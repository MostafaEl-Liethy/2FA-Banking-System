#!/usr/bin/python
from picamera import PiCamera
from time import sleep
import numpy as np
import cv2


cust = 7

camera = PiCamera()
camera.resolution = (320, 243)
camera.start_preview()
camera.color_effects= (128,128)
sleep(5)
camera.capture("./dataset/"+str(cust)+".sad.gif")
camera.stop_preview()


