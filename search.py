#!/usr/bin/env python3
import sys

with open("out.txt", "r") as f:
    searchlines = f.readlines()
    for i, line in enumerate(searchlines):
        if str(cust) +" is Incorrect" in line:
            print True
