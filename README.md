

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

To access Photgrapher data RESTtFul APi

Make token. Open Post men tool and send GET request to below API
``{your-host.test}/api/v1/token``

You will get the result like below

``{ "token": "1|fzcS9qqjUW5LEE9eKM79mj3m4T7lVJ4t8m5h129D" }``

copy that token value. Then make other get request. use above token as a Bearer Token. You can see it Authorization->Type. Change the type to  "Bearer Token" and put that token in token filed.

``{your-host.test}/api/v1/photographer``

You will get the result as below.


```json
{
    "data": {
        "first_name": "Default",
        "last_name": "Default",
        "phone": "555-555-5555",
        "email": "default@example.net",
        "bio": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
        "profile_picture": null,
        "album": [
            {
                "id": 1,
                "photographer_id": 1,
                "title": "Nandhaka Pieris",
                "description": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                "feature_img": "assets/img/album/landscape1.jpeg",
                "date": "2023-01-16",
                "featured": 1
            },
            {
                "id": 2,
                "photographer_id": 1,
                "title": "New West Calgary",
                "description": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                "feature_img": "assets/img/album/landscape2.jpeg",
                "date": "2023-01-16",
                "featured": 0
            },
            {
                "id": 3,
                "photographer_id": 1,
                "title": "Australian Landscape",
                "description": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                "feature_img": "assets/img/album/landscape3.jpeg",
                "date": "2023-01-16",
                "featured": 0
            },
            {
                "id": 4,
                "photographer_id": 1,
                "title": "Halvergate Marsh",
                "description": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                "feature_img": "assets/img/album/landscape4.jpeg",
                "date": "2023-01-16",
                "featured": 1
            },
            {
                "id": 5,
                "photographer_id": 1,
                "title": "Rikkis Landscape",
                "description": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                "feature_img": "assets/img/album/landscape5.jpeg",
                "date": "2023-01-16",
                "featured": 0
            },
            {
                "id": 6,
                "photographer_id": 1,
                "title": "Kiddi Kristjans Iceland",
                "description": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                "feature_img": "assets/img/album/landscape6.jpeg",
                "date": "2023-01-16",
                "featured": 1
            }
        ]
    }
}
```
