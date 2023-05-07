<h1>Cara menggunakan:</h1>

<ol> git clone -b abp_booking_lapang https://github.com/auliardana/abp_booking-lapang.git ABP </ol>
<ol>-start xampp</ol>

<ol>-create database pada phpmyadmin dengan nama : db_laraproject</ol>

<ol>-rename .env.example jadi .env</ol>

<ol>-tulis pada terminal <br>
php artisan migrate:fresh --seed <br>
atau <br>
php artisan migrate:fresh --seed --seeder=CreateUserSeeder
</ol>

<ol>-ketik pada terminal ==> php artisan serve</ol>
<ol>-buka link localhost..... </ol>
<ol>-login dengan <br>
(user)
email : user@user.com
pass: 123456
    atau
(admin)
email : admin@admin.com
pass : 123456
</ol>
