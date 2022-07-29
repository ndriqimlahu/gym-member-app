<!-- PROJECT LOGO -->
<p align="center">
  <img src="https://github.com/ndriqimlahu/ndriqim-lahu-portfolio/blob/main/assets/portfolio/GymMemberApp.png" alt="Logo" width="250" height="250">
  <h3 align="center">Gym Member App</h3>
  <p align="center">
    Ndriçim Lahu
    <br>
    <br>
    <a href="https://github.com/ndriqimlahu/gym-member-app/issues">Report Bug</a>
    ·
    <a href="https://github.com/ndriqimlahu/gym-member-app/issues">Request Feature</a>
  </p>
</p>


<!-- TABLE OF CONTENTS -->
<details open="open">
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#copyright">Copyright</a></li>
    <li><a href="#support">Support</a></li>
  </ol>
</details>


<!-- ABOUT THE PROJECT -->
## About The Project

The project called `Gym Member App` is an web application which aims to enable and facilitate the life of Gym manager in order to manage members which can be of different categories and which can have a different membership. This web application is easy and simple to use, as all you need is to create a personal account, log in with the same account you created and then have the ability to create members, read members, update members, as well as deleting members, also at the very end you can log out of your account and all members will be automatically saved in your active account. In this web application you can navigate into different pages which are “Home”, “Login”, “Register”, “Dashboard”, “Reset Password”, “Password Confirm”, “Email Verification”, “Add Member”, “View Member” and “Edit Member”.

This project started from scratch where I worked and completed, also I made some improvements in the front-end and back-end side of Web Development, such as creating of the login form, creating of the register form, creating of the dashboard, sending an email after registred, resetting the password for account, sending an email after reset password, creating the gym member, sending an email after created member, reading the gym member, updating the gym member, sending an email after updated member, deleting the gym member, sending an email after deleted member, configuration of mail with MailTrap and many more things.


### Built With

This web application is based on technologies like below:

* HTML5
* CSS3
* Bootstrap
* JavaScript
* PHP
* Laravel
* MySQL


<!-- GETTING STARTED -->
## Getting Started

By getting started with the project, first you need to take a look at the required `Prerequisites` and after that the `Installation` steps.


### Prerequisites

In order to open this web application is required to have an IDE or Code Editor (Visual Studio Code), an Web Server and Database Management Tool (XAMPP), an Dependency Manager for PHP (Composer), an Package Manager (NPM) and an Browser (Google Chrome).


### Installation

1. Download the code or Clone the repo:
   ```terminal
   git clone https://github.com/ndriqimlahu/gym-member-app.git
   ```
2. Open the XAMPP and start the `Apache` and `MySQL` modules.
3. Then open the repo folder with your IDE or Code Editor.
4. Now make a copy of `.env.example` file and paste it to the project folder and rename it to `.env` file.
5. After that open the Terminal and type the below command to install and update the all required libraries for project:
   ```terminal
   composer install
   composer update
   ```
6. After that in the Terminal, type the below command to install and update the all required npm_modules for project:
   ```terminal
   npm install
   npm update
   ```
7. After that in the Terminal, type the below command to generate a new key for application:
   ```terminal
   php artisan key:generate
   ```
8. After that in the Terminal, type the below command to clear the config cache and clear the application cache:
   ```terminal
   php artisan config:cache
   php artisan optimize:clear
   ```
9. So now open the `MySQL` module and create a database with name `gym-member`.
10. After that in the Terminal, type the below command to migrate the tables with pre-data to database:
    ```terminal
    php artisan migrate
    php artisan db:seed
    ```
11. After that in the Terminal, type the below command to run the web server and application:
    ```terminal
    php artisan serve
    ```
12. Now launch the web application with Browser by typing the URL `http://127.0.0.1:8000/` and choose a specific file to open.


<!-- USAGE -->
## Usage

There you can see some useful additional screenshots of how the project looks like and how can be used.

* Home page (Responsive for Desktop)
<img src="https://raw.githubusercontent.com/ndriqimlahu/gym-member-app/main/preview/01.1-Home%20page%20(Responsive%20for%20Desktop).png">

* Home page (Responsive for Laptop)
<img src="https://raw.githubusercontent.com/ndriqimlahu/gym-member-app/main/preview/01.2-Home%20page%20(Responsive%20for%20Laptop).png">

* Log In page (Responsive for Desktop)
<img src="https://raw.githubusercontent.com/ndriqimlahu/gym-member-app/main/preview/02.1-Log%20In%20page%20(Responsive%20for%20Desktop).png">

* Log In page (Responsive for Laptop)
<img src="https://raw.githubusercontent.com/ndriqimlahu/gym-member-app/main/preview/02.2-Log%20In%20page%20(Responsive%20for%20Laptop).png">

* Log In page (Responsive for Mobile)
<img src="https://raw.githubusercontent.com/ndriqimlahu/gym-member-app/main/preview/02.3-Log%20In%20page%20(Responsive%20for%20Mobile).png">

* Register page (Responsive for Desktop)
<img src="https://raw.githubusercontent.com/ndriqimlahu/gym-member-app/main/preview/03.1-Register%20page%20(Responsive%20for%20Desktop).png">

* Register page (Responsive for Laptop)
<img src="https://raw.githubusercontent.com/ndriqimlahu/gym-member-app/main/preview/03.2-Register%20page%20(Responsive%20for%20Laptop).png">

* Register page (Responsive for Mobile)
<img src="https://raw.githubusercontent.com/ndriqimlahu/gym-member-app/main/preview/03.3-Register%20page%20(Responsive%20for%20Mobile).png">

* Dashboard page (Responsive for Desktop)
<img src="https://raw.githubusercontent.com/ndriqimlahu/gym-member-app/main/preview/04.1-Dashboard%20page%20(Responsive%20for%20Desktop).png">

* Dashboard page (Responsive for Laptop)
<img src="https://raw.githubusercontent.com/ndriqimlahu/gym-member-app/main/preview/04.2-Dashboard%20page%20(Responsive%20for%20Laptop).png">

* Dashboard page (Responsive for Mobile)
<img src="https://raw.githubusercontent.com/ndriqimlahu/gym-member-app/main/preview/04.3-Dashboard%20page%20(Responsive%20for%20Mobile).png">

* Register Notification by Email
<img src="https://raw.githubusercontent.com/ndriqimlahu/gym-member-app/main/preview/05-Register%20Notification%20by%20Email.png">

* Forgot Password page (Responsive for Desktop)
<img src="https://raw.githubusercontent.com/ndriqimlahu/gym-member-app/main/preview/06.1-Forgot%20Password%20page%20(Responsive%20for%20Desktop).png">

* Forgot Password page (Responsive for Laptop)
<img src="https://raw.githubusercontent.com/ndriqimlahu/gym-member-app/main/preview/06.2-Forgot%20Password%20page%20(Responsive%20for%20Laptop).png">

* Forgot Password page (Responsive for Mobile)
<img src="https://raw.githubusercontent.com/ndriqimlahu/gym-member-app/main/preview/06.3-Forgot%20Password%20page%20(Responsive%20for%20Mobile).png">

* Reset Password Notification by Email
<img src="https://raw.githubusercontent.com/ndriqimlahu/gym-member-app/main/preview/07-Reset%20Password%20Notification%20by%20Email.png">

* Reset Password page (Responsive for Desktop)
<img src="https://raw.githubusercontent.com/ndriqimlahu/gym-member-app/main/preview/08.1-Reset%20Password%20page%20(Responsive%20for%20Desktop).png">

* Reset Password page (Responsive for Laptop)
<img src="https://raw.githubusercontent.com/ndriqimlahu/gym-member-app/main/preview/08.2-Reset%20Password%20page%20(Responsive%20for%20Laptop).png">

* Reset Password page (Responsive for Mobile)
<img src="https://raw.githubusercontent.com/ndriqimlahu/gym-member-app/main/preview/08.3-Reset%20Password%20page%20(Responsive%20for%20Mobile).png">

* Add Member page (Responsive for Desktop)
<img src="https://raw.githubusercontent.com/ndriqimlahu/gym-member-app/main/preview/09.1-Add%20Member%20page%20(Responsive%20for%20Desktop).png">

* Add Member page (Responsive for Laptop)
<img src="https://raw.githubusercontent.com/ndriqimlahu/gym-member-app/main/preview/09.2-Add%20Member%20page%20(Responsive%20for%20Laptop).png">

* Add Member page (Responsive for Mobile)
<img src="https://raw.githubusercontent.com/ndriqimlahu/gym-member-app/main/preview/09.3-Add%20Member%20page%20(Responsive%20for%20Mobile).png">

* Membership Created Notification by Email
<img src="https://raw.githubusercontent.com/ndriqimlahu/gym-member-app/main/preview/10-Membership%20Created%20Notification%20by%20Email.png">

* View Member page (Responsive for Desktop)
<img src="https://raw.githubusercontent.com/ndriqimlahu/gym-member-app/main/preview/11.1-View%20Member%20page%20(Responsive%20for%20Desktop).png">

* View Member page (Responsive for Laptop)
<img src="https://raw.githubusercontent.com/ndriqimlahu/gym-member-app/main/preview/11.2-View%20Member%20page%20(Responsive%20for%20Laptop).png">

* View Member page (Responsive for Mobile)
<img src="https://raw.githubusercontent.com/ndriqimlahu/gym-member-app/main/preview/11.3-View%20Member%20page%20(Responsive%20for%20Mobile).png">

* Edit Member page (Responsive for Desktop)
<img src="https://raw.githubusercontent.com/ndriqimlahu/gym-member-app/main/preview/12.1-Edit%20Member%20page%20(Responsive%20for%20Desktop).png">

* Edit Member page (Responsive for Laptop)
<img src="https://raw.githubusercontent.com/ndriqimlahu/gym-member-app/main/preview/12.2-Edit%20Member%20page%20(Responsive%20for%20Laptop).png">

* Edit Member page (Responsive for Mobile)
<img src="https://raw.githubusercontent.com/ndriqimlahu/gym-member-app/main/preview/12.3-Edit%20Member%20page%20(Responsive%20for%20Mobile).png">

* Member Edited in View Member page
<img src="https://raw.githubusercontent.com/ndriqimlahu/gym-member-app/main/preview/13-Member%20Edited%20in%20View%20Member%20page.png">

* Membership Updated Notification by Email
<img src="https://raw.githubusercontent.com/ndriqimlahu/gym-member-app/main/preview/14-Membership%20Updated%20Notification%20by%20Email.png">

* Member Deleted in View Member page
<img src="https://raw.githubusercontent.com/ndriqimlahu/gym-member-app/main/preview/15-Member%20Deleted%20in%20View%20Member%20page.png">

* Membership Cancelled Notification by Email
<img src="https://raw.githubusercontent.com/ndriqimlahu/gym-member-app/main/preview/16-Membership%20Cancelled%20Notification%20by%20Email.png">


<!-- COPYRIGHT -->
## Copyright

See the `COPYRIGHT` file for more information.


<!-- SUPPORT -->
## Support

Issues and feature requests are welcome!

Give a ⭐️ if you liked this project!

Support the author on <a href="https://www.buymeacoffee.com/ndriqimlahu">Buy Me a Coffee</a>
