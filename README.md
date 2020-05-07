# Scoreboard Server
This is the documentation and code for the current scoreboard server for the Security Audit and Penetration Testing class

### Current Username for phpMyAdmin / mySQL server: webuser
### Current Password for phpMyAdmin / mySQL server: webuser123


## Steps to install and run the server:

1. Boot up a VM that can connect to the internet 
2. Run the following command
```
sudo apt-get update
```
3. You will need to install the following-
    - php
    - phpmyadmin
    - apache2 server
    - mysql
    - Folder /var/www/html for your php and html webpage files
    - Folder /var/www/phpmyadmin for you phpmyadmin config and files

4. To install phpMyAdmin, download the file from this location-
https://www.phpmyadmin.net/downloads/

5. Extract the downloaded archive, for most systems it would be-
```
$ cd /usr/share
$ wget <link>
$ unzip phpMyAdmin-<version_number>.zip
$ mv phpMyAdmin-<version_number> /var/www/phpmyadmin
```

Then we have to set proper permissions as well.

```
### Debian based system 
$ chown -R www-data:www-data /usr/share/phpmyadmin
$ chmod -R 755 /usr/share/phpmyadmin

### Redhat based system 
$ chown -R apache:apache /usr/share/phpmyadmin
$ chmod -R 755 /usr/share/phpmyadmin
```
6. Set up Apache for phpMyAdmin

Go to ``` /etc/apache2/conf-available/phpmyadmin.conf ``` and add the following

```
<Directory "/var/www/phpmyadmin">
    Order Deny, Allow
    Deny from all
    Allow from localhost
    Allow from 127.0.0.1
    Allow from 192.168.1.0/24 #whatever the ip of the network is
</Directory>

Alias /phpmyadmin /var/www/phpmyadmin
Alias /phpMyAdmin /var/www/phpmyadmin
```

7. Go to the Apache config file at ``` /etc/apache2/apache2.conf ``` and add the following

```
<Directory "/var/www/">
    Options Indexes FollowSymLinks
    AllowOverride all
    Require all granted
</Directory>

Include /etc/phpmyadmin/apache.conf

```

And in /etc/phpmyadmin/apache.conf

8. Restart the apache service

```
sudo systemctl apache2 restart
```

9. Restart the mysql service

```
sudo systemctl mysql restart
```

10. You can access phpMyAdmin from 

URL: http://localhost/phpMyAdmin/
Login with the credentials set and you can create databases and add/edit/delete userIDs, flags etc.




## Useful Links and References for debugging/issues faced

- https://computingforgeeks.com/how-to-install-phpmyadmin-in-kali-linux-and-debian/
- https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-debian
- http://www.linuxandubuntu.com/home/how-to-setup-linux-web-server-and-host-website-on-your-own-computer-part-2
- https://www.ibm.com/support/knowledgecenter/SSGSCT_9.1.3/install_guide/pac_createdbschema_mysql_noha.html
- https://tecadmin.net/setup-phpmyadmin-on-linux-using-source/

Fix for issues faced:
- https://askubuntu.com/questions/306094/phpmyadmin-throws-a-404-on-opening