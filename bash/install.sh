#!/bin/bash
# Description: Set up MySQL Community Release 5.7

# Get the repo RPM and install it.
wget http://dev.mysql.com/get/mysql57-community-release-el7-7.noarch.rpm 
apt-get update -y
apt-get install -y yum
yum remove mysql57-community-release.noarch
apt clean all

# Install the server and start it
apt-get  -y install mysql-server 
systemctl start mysql.service 

mysql_secure_installation

apt -y purge expect




