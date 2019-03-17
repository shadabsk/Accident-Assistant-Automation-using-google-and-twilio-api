# Project Title
Accident Assistance Automation using Google Map API ,Twilio api, OOPHP, JQuery, AJAX, Bootstrap4, CSS3, MySQL, Apache

## Getting Started
All the source code is available here
* Copy this repo directory into xampp->htdocs folder and paste it (XAMPP server is used for apache and mysql)
* enable apache and mysql server from xampp
* install the composer and paste vendor autoload package inside home and update the Fetchdet.php and Fetchdet1.php with appropriate file path on line 3
* The database is available inside Database directory with file named accidentalassistance.sql and schema designed built on workbench. Import the accidentalassistance.sql file through phpmyadmin or any sql server.
* Open any html 5 browser and navigate to localhost/Accident-assistant-automation to start using the web app


### Prerequisites

* Apache and MySQL Server (Xamp is used in this case)
* HTML5 Browser
* Composer
* Vendor autoload package for twilio
* Twilio account ssid and token credentials
* Google map account api key credentials

### Installing

Download the software setups and follow the on screen instructions

step 1

```
installing XAMP Server  v3.2.2 can downloaded from below link
```
[Click here to visit download page](https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/5.6.21/)

step 2

```
installing Composer downloaded from below link
```
[Click here to visit download page](https://getcomposer.org/download/)

step 3

```
installing the dependencies (Vendor autoload package for twilio and google map api)
Type the following command 'composer require twilio/sdk'
and update the path in file Fetch.php and Fetch1.php inside OOPHP directory accordingly.

Note :  if getting any local issuer certificate error follow the link given below
```
[Click here to see the solution](https://support.twilio.com/hc/en-us/articles/360007853433-Troubleshooting-Certificate-Errors-from-the-Twilio-REST-API)

```
Generate your own google map api. Follow the link to see the procedures.

Note: if getting any authorized issue. just enable all the apis (Javascript , geolocation and geocoding API)
```
[Click here to see how to generate google map api](https://developers.google.com/maps/documentation/javascript/get-api-key)


step 4

```
enabling apache and mySQL server in xampp application
```

step 4
```
navigating to localhost/phpmyadmin and import accidentalassistance.sql file
```

step 5
```
Start using the web app by opening the url localhost/Accident-assistant-automation
```

## Built With

* [Sublime](https://www.sublimetext.com/3) - A sophisticated text editor for code, markup and prose. 


## Demonstrations

* Take a look at the working project demonstration. Click on the image to view the complete video


[![Accident Assistant Automation](https://i.ytimg.com/vi/nSgaNTfH9Iw/maxresdefault.jpg)](https://youtu.be/nSgaNTfH9Iw)


## Authors

* **Shadab Shaikh** - *Tweaking with twilio api, registration page,Help center page, designing database and architecturing the project*  - [shadabsk](https://github.com/shadabsk)
* **Obaid Kazi** - *registration page, designing the homepage, work on 'without vehicle module'* -  	- [ObaidKazi](https://github.com/ObaidKazi)
* **Khan Mohammed Rehan** - *Finding current location, nearby locations, tweaking google map api, architecturing the project* -  	- [rehannk](https://github.com/rehannk)
* **Mohd Adnan Ansari** - *Full design of the complete system and finding current location* -  	- [adnannet8425](https://github.com/adnannet8425)


## Acknowledgments

* The template of readme.md was taken from [PurpleBooth](https://github.com/PurpleBooth)
* Our faculties 
* **Mr. Muhammed Salman Shamsi** *Asst. Prof Kalsekar Technical campus* 
* **Mrs. Kalpana Meher Bodke** *Asst. Prof Kalsekar Technical campus* 