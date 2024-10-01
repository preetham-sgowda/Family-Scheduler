# Family-Scheduler
Family Scheduler   A tool for organizing family life with features including:  Shared Family Calendar: Schedule events and appointments. Family Tree: Visualize family lineage.  Simple Chat Box: Stay connected through real-time messaging.  Ideal for keeping your family organized and connected!

#### Login Page Setup Instructions

Follow these steps to set up the login page:

#### 1. Install XAMPP
- Download [XAMPP](https://www.apachefriends.org/index.html) to your desktop and install it.
- Open the **XAMPP Control Panel**.
- Start the following services:
  - **Apache**
  - **MySQL**

#### 2. Access phpMyAdmin
- Open a browser and go to `localhost` in the address bar.
- From the XAMPP dashboard, open **phpMyAdmin**.

#### 3. Create a Database
- In **phpMyAdmin**, create a new database named `login`.

#### 4. Create a Users Table
- Inside the `login` database, create a table named `users`.
- Define the table structure according to your login requirements (e.g., `username`, `password`, etc.).

#### 5. Connect Login Page to Database
- Once the login page is set up, data entered through the login form will be saved in the `users` table within **phpMyAdmin**.

This setup ensures that user data from the login page is stored and managed in the database created in phpMyAdmin.
