#!/bin/bash
rm /etc/rc.local
cd /etc/
wget https://raw.githubusercontent.com/andresslacson1989/Debian9/master/rc.local 
chmod +x rc.local
reboot
