#!/bin/bash
rm /etc/rc.local
cd 
wget https://raw.githubusercontent.com/andresslacson1989/Debian9/master/rc.local2
chmod +x rc.local2
mv rc.local2 /etc/rc.local
reboot
