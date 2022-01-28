<!-- PROJECT LOGO -->
<p align="center">
  <img src="https://github.com/ndriqimlahu/NdriqimLahuPortfolio/blob/main/assets/img/portfolio/GymMemberApp.png" alt="Logo" width="250" height="250">
  <h3 align="center">Gym Member App</h3>
  <p align="center">
    Ndriçim Lahu
    <br>
    <br>
    <a href="https://github.com/ndriqimlahu/GymMemberApp/issues">Report Bug</a>
    ·
    <a href="https://github.com/ndriqimlahu/GymMemberApp/issues">Request Feature</a>
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
    <li><a href="#license">License</a></li>
    <li><a href="#contact">Contact</a></li>
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
* PHP
* Laravel
* MySQL


<!-- GETTING STARTED -->
## Getting Started

By getting started with the project, first you need to take a look at the required `Prerequisites` and after that the `Installation` steps.


### Prerequisites

In order to open this web application is required to have an IDE or Code Editor (Visual Studio Code), an Web Server and Database Management Tool (XAMPP), an Dependency Manager for PHP (Composer), an NPM (Node.js) and an Browser (Google Chrome).


### Installation

1. Download the code or Clone the repo:
   ```terminal
   git clone https://github.com/ndriqimlahu/GymMemberApp.git
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

* Home Page:
![01-GymMemberApp - Laravel Home Page](https://user-images.githubusercontent.com/72756158/136917100-7dd41346-10f8-434d-ae02-2582b875cca2.png)

* Register Page:
![02-GymMemberApp - Register Page](https://user-images.githubusercontent.com/72756158/136917667-6f67ce96-895c-403d-a78d-d7a1af93f394.png)

* Login Page:
![03-GymMemberApp - Login Page](https://user-images.githubusercontent.com/72756158/136917687-880ca959-5122-49a4-89d5-dcf9f24ec7e9.png)

* Dashboard Page:
![04-GymMemberApp - Dashboard Page](https://user-images.githubusercontent.com/72756158/136917731-a750fa15-68d8-48e1-a072-e199370da2b1.png)

* Email sended after Registred:
![05-GymMemberApp - Register by Email](https://user-images.githubusercontent.com/72756158/136917195-7bf4b54b-8447-4af7-afd3-01b08397efc5.png)

* Reset Password:
![06-GymMemberApp - Reset Password](https://user-images.githubusercontent.com/72756158/136917214-77fc5988-ccdc-4c4e-be8e-990ef4588f91.png)

* Email sended after Reset Password:
![07-GymMemberApp - Reset Password by Email](https://user-images.githubusercontent.com/72756158/136917222-540d3a2e-b819-4936-996f-3b27f4a45ed3.png)

* Add Member Page:
![08-GymMemberApp - Add Member Page](https://user-images.githubusercontent.com/72756158/136917232-39c92bcd-6cd4-4cb4-b84f-3d6619174959.png)

* Email sended after Added Member:
![09-GymMemberApp - Add Member by Email](https://user-images.githubusercontent.com/72756158/136917237-e7038806-22d9-4810-a1a3-20ad8f443f76.png)

* View Member Page:
![10-GymMemberApp - View Member Page](https://user-images.githubusercontent.com/72756158/136917250-3117fb18-8943-4990-9344-b653dfc896c7.png)

* Edit Member Page from Edit button:
![11-GymMemberApp - Edit Member Page](https://user-images.githubusercontent.com/72756158/136917257-558e2fb1-fc3f-4350-b3c0-dd1881eaaf08.png)

* Updated View Member Page after Edit:
![12-GymMemberApp - Updated View Member Page](https://user-images.githubusercontent.com/72756158/136917264-0366ead0-8c8c-4e80-ab63-0875216205e2.png)

* Email sended after Edited Member:
![13-GymMemberApp - Edit Member by Email](https://user-images.githubusercontent.com/72756158/136917269-572fe823-5a8f-472e-98d9-158b4c941287.png)

* Deleted Member from Delete button:
![14-GymMemberApp - Deleted View Member Page](https://user-images.githubusercontent.com/72756158/136917276-0d6d3bcf-c0dd-4c67-8f39-afbc4ae37dcf.png)

* Email sended after Deleted Member:
![15-GymMemberApp - Delete Member by Email](https://user-images.githubusercontent.com/72756158/136917292-5dc97a6f-fc47-4009-88d3-8acede31c57a.png)


<!-- LICENSE -->
## License

Distributed under the Apache License 2.0. See `LICENSE` for more information.


<!-- CONTACT -->
## Contact

**LinkedIn:** https://www.linkedin.com/in/ndriçimlahu

**Mail:** ndriqim_lahu@hotmail.com


<!-- SUPPORT -->
## Support

Contributions, issues, and feature requests are welcome!

Give a ⭐️ if you like this project!
