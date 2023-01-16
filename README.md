

## Creative Guild  

Server Requirements

The Laravel framework has a few system requirements. You should ensure that your web server has the following minimum PHP version and extensions:

- PHP >= 8.0
- BCMath PHP Extension
- Ctype PHP Extension
- cURL PHP Extension
- DOM PHP Extension
- Fileinfo PHP Extension
- JSON PHP Extension
- Mbstring PHP Extension
- OpenSSL PHP Extension
- PCRE PHP Extension
- PDO PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension

Setting up project in local environment 

clone the project 

``git clone https://github.com/sanjayacloud/creative-guild.git``

Or you can download it manually

Go to project folder

``cd creative-guild``

Install dependencies

Create .env file from .env.example file. Then change the below variable value according to your value.

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your-_db_ame
DB_USERNAME=your_db_user_name
DB_PASSWORD=your_db_password
```

```bash
MAIL_MAILER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"
```

```bash
composer install
```

```bash
npm install
```

Then Initialize the project (This command will execute all required commands as a sequence)

```bash
php artisan project:initialize
```

Final step. Run the server.
```bash
npm run dev
```
```bash
php artisan serve
```

