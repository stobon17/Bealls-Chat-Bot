# Bealls ChatBot


## Setting MySQL Credentials
User set variables are stored in .env which must be created by the user. env-template can be copied to .env and edited with arbitrary credentials for the mysql database. MYSQL_ROOT_PASSWORD and MYSQL_PASSWORD should be set to arbitrary secure passwords. 

In the file `web/res/dbconn.php` - line 4, the variable $dbPass should be set to the same password used for MYSQL_PASSWORD in the `.env` file. 

## Starting the Service
Note: All commands must be run from the root of the github repository. 

The service can be run by using the command `docker-compose up`. The `-d` flag can be added to the command to start the program in the background. Downloading the docker images, and initialization of the database may take a few minutes on first run. 
The service can then be accessed at port 80 on device running docker.

An alternative configuration is provided which utilizes the ACME protocol to automatically obtain a TLS certificate for the domain being hosted. When being run in this configuration, the docker-secured.yml configuration must be updated to include the FQDN of the server as LETSENCRYPT_HOST and VIRTUAL_HOST in all references. To utilize the alternate configuration `docker-compose -f docker-secure.yml up` should be run. 

## Website Showcase

![Admin Login and userinfo](https://github.com/stobon17/Bealls-Chat-Bot/blob/main/web/img/Fall20_ForWhomTheBeallTolls_1.gif?raw=true)
![Admin Login and userinfo](https://github.com/stobon17/Bealls-Chat-Bot/blob/main/web/img/Fall20_ForWhomTheBeallTolls_2.gif?raw=true)
![Admin Login and userinfo](https://github.com/stobon17/Bealls-Chat-Bot/blob/main/web/img/Fall20_ForWhomTheBeallTolls_3.gif?raw=true)
