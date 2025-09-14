**Laravel Coffee Shop POS System(Admin Role)**
Author: Join Coder(www.youtube.com/@joincoder)

This is my second Point of Sale (POS) System built with Laravel 11.  
The project is shared for free as part of my learning journey.  
Feel free to explore, modify, and improve it!  
If you find any problems, leave a comment — I’ll fix it and include the update in the next release.

---

## 🛠️ Built With Laravel 11.

To run the project, you will need:

   - PHP version 8.2.12 or above

   - Composer version 2.6 or above

   - Node.js (for frontend build tools)

   - A code editor, such as Visual Studio Code

   - A web browser

   - XAMPP for Windows or MAMP for Mac/Linux (to run PHP, MySQL, and Apache)


## 🚀 Getting Started
- run composer install --prefer-dist
- run npm install

**Generate the application key**
- run php artisan key:generate

**Create the database**
- create a new database in phpMyadmin
- Open the `.env` file in your project
- Set the `DB_DATABASE` value to match the database name you just created 

**Generate the application key**
- run php artisan key:generate

**Run migrations and seed data**
- run php artisan migrate --seed

**Start the Development Server**
Run the following commands to start the server:
- php artisan serve
- npm run dev

**Google API Credentials**
You need to generate your own Google API credentials and add them to the .env file.


**Contribution & License**
This project is open-source and shared freely.
You can use, modify, and improve it, but please give credit if you find it useful!
