# Gym Member App

**Gym Member App** is a web application designed to help gym administrators efficiently manage and organize memberships. Built with a focus on usability and functionality, the platform enables administrators to create, read, update, and delete member profiles while sending real-time email notifications for activities such as membership registration, updates, or cancellations. The application combines an intuitive, responsive interface with secure user authentication and robust data validation processes to ensure data integrity, reliability, and an optimal user experience.

This project is an ideal solution for gym owners or managers seeking a comprehensive and dependable tool for membership management. Its user-friendly design ensures ease of use for beginners, while its robust architecture supports seamless operations for larger gyms. The automated email notification system ensures all stakeholders stay informed about important activities, enhancing communication and accountability. Whether managing a small studio or a large fitness center, this tool offers a practical and efficient solution for streamlining membership management.

## Built With

This web application was developed using the following tools, technologies, and resources:
- **HTML**
- **CSS**
- **Bootstrap**
- **JavaScript**
- **PHP**
- **Laravel**
- **MySQL**
- **Start Bootstrap Creative** — [Reference link](https://startbootstrap.com/theme/creative)

## Features

✅ **User Authentication:** Administrators can securely sign up, log in, and manage their accounts, ensuring that only authorized individuals can access and manage member data.

✅ **Dashboard Management:** Administrators can manage account settings, such as resetting passwords, signing out, and quickly accessing member profiles for efficient management.

✅ **Membership Management:** The application allows administrators to easily create, read, update, and delete member profiles, helping to keep records organized and up-to-date.

✅ **Data Storage & Validation:** All member data is securely stored in a database, with robust input validation processes in place to ensure data integrity and prevent errors.

✅ **Member List Interface:** Members are displayed in a well-organized list with easy navigation, allowing administrators to quickly view, manage, and update member profiles efficiently.

✅ **Automated Email Notifications:** Real-time email updates are sent for critical actions such as member registration, profile updates, or deletions, keeping administrators and stakeholders informed.

✅ **Responsive Design:** The web application is fully responsive, providing a seamless user experience across a variety of devices, including desktops, tablets, and smartphones, by adapting to different screen sizes.

## Prerequisites

Before starting, ensure the following are installed on your system:
- **PHP**
  - Download the [PHP Installer](https://www.php.net/downloads.php).
  - Follow the [installation guide](https://www.php.net/manual/en/install.php) to install and configure it properly.
  - Verify your PHP installation by running the following command in your terminal:
    ```
    php -v
    ```
  - Ensure your system's `PATH` is properly configured to allow PHP commands to run globally from any location.
- **Composer (Dependency Manager)**
  - Download the [Composer](https://getcomposer.org/download/).
  - Follow the [installation guide](https://getcomposer.org/doc/00-intro.md#installation-windows) to install and configure it properly.
  - Verify your Composer installation by running the following command in your terminal:
    ```
    composer -V
    ```
  - If installation fails, refer to the Composer troubleshooting guide.
- **Node.js (Package Manager)**
  - Download the [Node.js](https://nodejs.org/en/download/package-manager).
  - Follow the [installation guide](https://nodejs.org/en/learn/getting-started/how-to-install-nodejs) to install and configure it properly.
  - Verify your Node and NPM installation by running the following commands one by one in your terminal:
    ```
    node -v

    npm -v
    ```
  - If installation fails, refer to the Node.js troubleshooting guide.
- **MySQL**
  - Download the [MySQL Workbench](https://dev.mysql.com/downloads/workbench/).
  - Follow the [installation guide](https://dev.mysql.com/doc/workbench/en/wb-installing.html) to install and set it up on your system.
  - Verify your MySQL installation by launching MySQL Workbench, connecting to your MySQL server, and running a test query to ensure the setup is functioning correctly.
- **Mailtrap**
  - Create a free account at [Mailtrap](https://mailtrap.io/register/signup) or use an existing account.
  - Follow the [integration guide](https://help.mailtrap.io/article/136-mailtrap-php-integration) to integrate and set it up in your project.
  - Verify your Mailtrap integration by sending a test email through your application and confirming it appears in your Mailtrap inbox.

## Installation

1. Clone or download the repository to your local machine:
   ```
   git clone https://github.com/ndriqimlahu/gym-member-app.git
   ```
2. Open the repository folder in your preferred IDE or code editor.
3. Configure the environment settings:
    - Duplicate the `.env.example` file in the project folder and rename it to `.env`.
    - Open the `.env` file and update the following fields with your database and mail credentials:
      ```env
      DB_CONNECTION=mysql
      DB_HOST=127.0.0.1
      DB_PORT=3306
      DB_DATABASE=gym-member
      DB_USERNAME=your_mysql_username
      DB_PASSWORD=your_mysql_password
      
      MAIL_MAILER=smtp
      MAIL_HOST=smtp.mailtrap.io
      MAIL_PORT=2525
      MAIL_USERNAME=your_mailtrap_username
      MAIL_PASSWORD=your_mailtrap_password
      MAIL_ENCRYPTION=tls
      MAIL_FROM_ADDRESS=no-reply@example.com
      ```
4. Install the dependencies and node modules used in this application by running the following commands one by one in your terminal:
   ```
   composer install
   
   npm install
   ```
5. Generate a new application key by running the following command in your terminal:
   ```
   php artisan key:generate
   ```
6. Clear the config cache and application cache by running the following commands one by one in your terminal:
   ```
   php artisan config:cache
   
   php artisan optimize:clear
   ```
7. Create the database in **MySQL Workbench**:
    - Under **MySQL Connections**, connect to your **SQL Server** instance using your credentials.
    - Click the **Database** menu, then select **Create a New Database**.
    - Enter `gym-member` as the database name and click **Apply** button.
    - Verify the database creation by confirming `gym-member` appears in the **Schemas** tab.
8. Migrate the database tables and seed them with sample data by running the following commands one by one in your terminal:
    ```
    php artisan migrate
    
    php artisan db:seed
    ```
9. Start the web server and run the application by running the following command in your terminal:
    ```
    php artisan serve
    ```
10. Navigate to `http://127.0.0.1:8000/` using any modern web browser to view the web application locally.

## Screenshots

Below you can see some additional useful screenshots of what the web application looks like and how it can be used:

- Home page | Login page
<div>
   <img src="https://raw.githubusercontent.com/ndriqimlahu/gym-member-app/main/preview/01.1-Home%20page%20(Responsive%20for%20Desktop).png" align="top" width="48%" height="auto">
   <img src="https://raw.githubusercontent.com/ndriqimlahu/gym-member-app/main/preview/02.1-Log%20In%20page%20(Responsive%20for%20Desktop).png" align="top" width="48%" height="auto">
   <hr>
</div>

- Sign up or Register page | Dashboard page
<div>
   <img src="https://raw.githubusercontent.com/ndriqimlahu/gym-member-app/main/preview/03.1-Register%20page%20(Responsive%20for%20Desktop).png" align="top" width="48%" height="auto">
   <img src="https://raw.githubusercontent.com/ndriqimlahu/gym-member-app/main/preview/04.1-Dashboard%20page%20(Responsive%20for%20Desktop).png" align="top" width="48%" height="auto">
   <hr>
</div>

- Mail Notification — Registered successfully | Forgot Password page
<div>
   <img src="https://raw.githubusercontent.com/ndriqimlahu/gym-member-app/main/preview/05-Register%20Notification%20by%20Email.png" align="top" width="48%" height="auto">
   <img src="https://raw.githubusercontent.com/ndriqimlahu/gym-member-app/main/preview/06.1-Forgot%20Password%20page%20(Responsive%20for%20Desktop).png" align="top" width="48%" height="auto">
   <hr>
</div>

- Mail Notification — Reset the password | Reset Password page
<div>
   <img src="https://raw.githubusercontent.com/ndriqimlahu/gym-member-app/main/preview/07-Reset%20Password%20Notification%20by%20Email.png" align="top" width="48%" height="auto">
   <img src="https://raw.githubusercontent.com/ndriqimlahu/gym-member-app/main/preview/08.1-Reset%20Password%20page%20(Responsive%20for%20Desktop).png" align="top" width="48%" height="auto">
   <hr>
</div>

- Add Member page | Mail Notification — Membership created
<div>
   <img src="https://raw.githubusercontent.com/ndriqimlahu/gym-member-app/main/preview/09.1-Add%20Member%20page%20(Responsive%20for%20Desktop).png" align="top" width="48%" height="auto">
   <img src="https://raw.githubusercontent.com/ndriqimlahu/gym-member-app/main/preview/10-Membership%20Created%20Notification%20by%20Email.png" align="top" width="48%" height="auto">
   <hr>
</div>

- View Member page — A new member has been added | Edit Member page
<div>
   <img src="https://raw.githubusercontent.com/ndriqimlahu/gym-member-app/main/preview/11.1-View%20Member%20page%20(Responsive%20for%20Desktop).png" align="top" width="48%" height="auto">
   <img src="https://raw.githubusercontent.com/ndriqimlahu/gym-member-app/main/preview/12.1-Edit%20Member%20page%20(Responsive%20for%20Desktop).png" align="top" width="48%" height="auto">
   <hr>
</div>

- View Member page — A member has been updated | Mail Notification — Membership updated
<div>
   <img src="https://raw.githubusercontent.com/ndriqimlahu/gym-member-app/main/preview/13-Member%20Edited%20in%20View%20Member%20page.png" align="top" width="48%" height="auto">
   <img src="https://raw.githubusercontent.com/ndriqimlahu/gym-member-app/main/preview/14-Membership%20Updated%20Notification%20by%20Email.png" align="top" width="48%" height="auto">
   <hr>
</div>

- View Member page — Many members have been added | View Member page — All members have been removed
<div>
   <img src="https://raw.githubusercontent.com/ndriqimlahu/gym-member-app/main/preview/15-View%20Member%20page%20(Multi%20Members).png" align="top" width="48%" height="auto">
   <img src="https://raw.githubusercontent.com/ndriqimlahu/gym-member-app/main/preview/16-Member%20Deleted%20in%20View%20Member%20page.png" align="top" width="48%" height="auto">
   <hr>
</div>

- Mail Notification — Membership cancelled
<img src="https://raw.githubusercontent.com/ndriqimlahu/gym-member-app/main/preview/17-Membership%20Cancelled%20Notification%20by%20Email.png" align="top" width="48%" height="auto">

## Support

If you find this project useful, please consider giving it a star!
