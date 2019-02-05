<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Setup BI-site for development (Ubuntu)

- **Install xampp for bi-site from https://www.apachefriends.org/index.html:**


  ```chmod 755 xampp-linux-*-installer.run```

  ```sudo ./xampp-linux-*-installer.run```

- Install xampp through GUI and launch when finished.


  ```cd /opt/lampp```

  ```sudo groupadd gitusers```

  ```sudo usermod -a -G gitusers <computer_user_account_name>```

  ```sudo chown root.gitusers htdocs```

  ```sudo chmod 777 htdocs```

  ```sudo apt-get update```

- **Setup composer for php and clone BI-site into xampp server:**


  ```sudo apt-get install curl php-cli php-mbstring git unzip```

  ```curl -sS https://getcomposer.org/installer -o composer-setup.php```

  ```sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer```

  ```composer``` (run as a test)

  ```cd /opt/lampp/htdocs```

  ```git clone https://github.com/Building-Intellect/BI-site.git```

- **Finish setting up BI-site and configure virtual hosts:**


  ```sudo apt-get install php-xml```

  ```sudo apt-get install php-mysql```

  ```composer install```

  ```php artisan migrate```

  ```sudo nano /opt/lampp/etc/httpd.conf```

  Find 'Include etc/extra/httpd-vhosts.conf' line and uncomment it, then save.

  ```sudo nano /opt/lampp/apache2/conf/httpd.conf```

  Add 'Listen 48501' line at the top of configuration, then save.

  ```sudo nano /opt/lampp/etc/extra/httpd-vhosts.conf```

  Replace all dummy configuration with the following code and save:
  ```
  <VirtualHost *:48501>
      DocumentRoot "/opt/lampp/htdocs/BI-site/public"
      ServerName buildingintellect.local
  </VirtualHost>
  <VirtualHost 127.0.0.1:80>
      DocumentRoot "/opt/lampp/htdocs/"
      ServerName localhost
  </VirtualHost>
  ```

- **Make changes to /etc/hosts**

  ```sudo nano /etc/hosts```

  add the following hostname line and save:

  ```127.0.0.1       buildingintellect.local```

- **Modify permissions for BI-site**

  ```sudo chmod -R 777 /opt/lampp/htdocs/BI-site/storage```

  ```sudo chmod -R 777 /opt/lampp/htdocs/BI-site/bootstrap/cache```

- **Restart all from xampp manager**

  ```sudo /opt/lampp/manager-linux-x64.run```

  Restart all, then visit http://buildingintellect.local:48501 in browser and PRESTO!

## Setting .env configuration variables

The .env file in the root directory is correctly structured, but secure credentials have been replaced with example values.  The site will not work properly until these variables are changed.  DB_USERNAME, DB_PASSWORD, MAIL_USERNAME, and MAIL_PASSWORD need to be set to the proper credentials for the database admin account and Godaddy webmail account (for smtp relaying) respectively.

The .env file also sets the app variables to local development or debug mode by default.  When updating the production code, these values should be changed so email links and other site links populate correctly.  The APP_URL value should be set to our DNS name for the server 'http://buildintel.webhop.biz:48501' on the web server used to host the production environment running at buildingintellect.com
