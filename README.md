Shrink URL Link Shortener
===========================
A Robust Link Shortener built with HTML, PHP, and MySQL. This application is ready to deploy by
itself and requires no dependencies. At around 10Kb and a minimal file count Shrink URLs will allow
anyone to deploy a link shortener today. Please only edit the config.php file(s) when setting up.
It is not necessary to add information else where. Check out a working demo at https://nate.pro
I enjoy making software so much! Please, if you see any issues make them known! If you especially love
my software you can donate at: https://github.nated.xyz/donate/

What's New
===========================
* Admin area for easy management of URLs and Users
* Easier Setup with the "config.php" file
* Design Improvements
* Easier Customization for your own implementation

Features
===============
* permanently stores link
* creates a custom link from form input 
* easy configuration in the 'config.php' file
* less than 10Kb
* Fast Execution
* Ability to check availability of shortened URL
under the "Does the Exist?" Tab
* Simple Customization
* Admin area to View existing URLs as well as other admin
accounts

Installation Instructions
============================
IMPORTANT STEPS 
* Create an 'analytics' and 'urls' folder in the home directory. With permissions 0777 on Both.
* Create a Database to Store the URLs and Execute the 'database.sql' command accordingly. Known as "maindb" in config.php file
* Create a Database to Store the Admin Login Info and execute the 'database.sql' command accordingly. Known as "admindb" in config.php file
* Update the config.php file as shown below (You only need to set the DB information here):
<a href="https://i.imgur.com/Gddhy9W.png" target="_blank"><img style="padding-left:5%;" src="https://i.imgur.com/Gddhy9W.png" alt="Config File Instructions" width="100%"></img></a>
*  in the 'config.php' file located in
the home directory AND the /inc directory as well
* Navigate to https://your_url.com/admin/registration.php and set the information for the admin account. 
* Delete registration.php when You're Done to Prevent Unauthorized registrations

Requirements
===============
- PHP 5+
- MySQL database

Preview
========
Working Link Shortener: https://nate.pro
Screenshots: https://imgur.com/a/IY3UMFT

License
==========
This software is under an MIT License. Which allows full use to edit, distribute, or sell this code.
See the "LICENSE" file for more information!