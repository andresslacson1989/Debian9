#!/bin/bash
rm /etc/rc.local
cd 
chmod +x /etc/openvpn/disconnect.sh
chmod +x /etc/openvpn/connect.sh
wget https://raw.githubusercontent.com/andresslacson1989/Debian9/master/rc.local2
chmod +x rc.local2
mv rc.local2 /etc/rc.local
reboot
