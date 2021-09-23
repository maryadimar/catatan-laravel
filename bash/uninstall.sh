#!/bin/bash
# script bash untuk uninstall di linux
#------------------------------------
# Created By Maryadi & Alif
#------------------------------------

apt remove --purge mysql-server
apt purge mysql-server
apt autoremove
apt autoclean
apt remove dbconfig-mysql