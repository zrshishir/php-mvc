# php-mvc a mvc pattern framwork using raw php
#### Simple PHP form submission script with front end and back end validation

##### tech specifications
    - php version 7.4
    - jQuery version 3.5.0
    - HTML and CSS 

##### Installation
The installation is pretty simple. There is nothing like composer update. You will have php version 7.4 and jQuery version 3.5.0 thats it. Below, the details installation is being described.
1. XAMPP installation: 
    - Go to your htdocs directory of your xampp folder and clone the project from github direcotory to your xampp htdocs directory using the command `git clone https://github.com/zrshishir/php-mvc.git` for https.
    - Create a database on your phpmyadmin or mysql
    - Import the php-mvc.sql (it is in the root directory) file into your database.
    - Set your database credentials in DatabaseConnection.php file  which is in app/controller directory and edit $host, $user, $password and $database with you own credentials.
    - Now open your browser and execute the index.php file which is in your project root directory.

2. LEMP stack installation:
    - Make ready your linux with nginx, mysql and php. You can follow the link [LEMP stack installation on ubunut 18.04](https://www.digitalocean.com/community/tutorials/how-to-install-linux-nginx-mysql-php-lemp-stack-ubuntu-18-04)
    - Create a database on your phpmyadmin or mysql
    - Import the php-mvc.sql (it is in the root directory) file into your database.
    - Set your database credentials in DatabaseConnection.php file  which is in app/controller directory and edit $host, $user, $password and $database with you own credentials.
    - Now open your browser, write your domain name and execute the index.php file which is in your project root directory.


##### Project features:
    - Maintaining mvc pattern
    - User's browser ip automatically taken when submiting the form
    - Encryption receipt id with proper salt and using sha-512
    - taking local time zone at entry time
    - Back end validation
    - Front end validation
    - Form submission with ajax and php (for php form submission you need some edition in the code)
    - Preventing users from multiple submissions within 24 hours using cookie
    - Including search opton with entry_by, from date and to date
    - Integrating the ajax response with resetting the form value


##### Done Tasks: 
1. Create a MySQL DB table with the following requirements and a frontend submission form for storing the data. The - field/Column list are: 
    - id (bigint 20) ai
    - amount (int 10) *
    - buyer (varchar 255) *
    - receipt_id (varchar 20) *
    - items (varchar 255) *
    - buyer_email (varchar 50) *
    - buyer_ip (varchar 20)
    - note (text) *
    - city (varchar 20) *
    - phone (varchar 20) *
    - hash_key (varchar 255)
    - entry_at (date)
    - entry_by (init 10) *

2. * marked columns can be submitted through the mentioned frontend form.
3. Buyer_ip should be the user’s browser ip and will be automatically filled up from backend.
4. Hash_key is the encrypted string of ‘receipt_id’ and a proper ‘salt’ using sha-512.
5. Entry_at is the submission date in local timezone.
6. There will be two types of validation process according to the following requirements: A) frontend validation (with js entirely), B) backend validation.
    - Amount: only numbers.
    - Buyer: only text, spaces and numbers, not more than 20 characters.
    - Receipt_id: only text.
    - Items: only text, user should be able to add multiple items (use js based interface).
    - Buyer_email: only emails.
    - Note: anything, not more than 30 words, and can be input unicode characters too.
    - City: only text and spaces.
    - Phone: only numbers, and 880 will be automatically prepended via js in an appropriate manner.
    - Entry_by: only numbers.
7. The submission must be handled by jquery ajax.
8. Using cookie, prevent users from multiple submissions within 24 hours.
9. Create a simple report page where users can see all the submissions and filter it by date range and/ or user id.

#### Screenshots
![Main page](/view/image/image-1.png), ![Submission form](/view/image/image-2.png)


