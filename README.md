Project tested on MacOS Big Sur, PHP version 7.4 MySQL 5.7, Laravel 8 framework.

Please check .env to check MySQL credentials. Default user/password = root/root.

Run commands
- composer install
- npm install
- npm run dev
- php artisan serve
- php artisan migrate 

  
  The default page will be form with inputs:
  
- name
- email
- message
- submit button
  
  After click on submit button data would be sent and stored in database.
  At the bottom of the page would be place where we will see info about all sent messages:
    - name, email, message, create date;
    
The model Message.php is at app/Models folder.
The controller MessageController.php is at app/Http/Controller folder.
The view message.blade.php is available by the resources/views/ path.
      
There is validation in laravel application for input values:
- name
- email
- message


