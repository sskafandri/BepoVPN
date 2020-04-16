BepoVPN VPN API - Master

Installation Instructions.

Warning: Requires Fresh installation of CentOS 7.

Server Requirements: 512MB - 1024MB of Memory, 1cpu & 25GB SSD.

OS: CentOS 7

yum upgrade -y
rpm --import /etc/pki/rpm-gpg/RPM-GPG-KEY*
yum -y install epel-release

yum -y install httpd

systemctl start httpd.service
systemctl enable httpd.service

rpm -Uvh http://rpms.remirepo.net/enterprise/remi-release-7.rpm
yum -y install yum-utils
yum update -y

yum -y install php
yum-config-manager --enable remi-php73

yum -y install php php-opcache
yum -y install php-gd php-ldap php-odbc php-pear php-xml php-xmlrpc php-mbstring php-soap curl curl-devel

systemctl restart httpd.service

Please BepoAPI code content inside the folder /var/www/html 

Firewall: OpenPorts 1723 + 80

Copyright @ DavidBrockway 2020
