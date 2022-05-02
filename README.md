<h1 align="center">
   F1 Blog
</h1>
<p align="center">
  <img src="https://github.com/ndavido/LaravelBlogCA3/raw/main/public/images/f1.png" alt="F1 Car">
</p>


```
Server-Side Development
CA3 Laravel Blog
F1 Blog
|----------------------------|	
|Name : Dawid Nalepa 
|Student ID	: D00239107    
|Class Group : SD2b         
|----------------------------|
|Name : James Rodgers
|Student ID : D00237812    
|Class Group : SD2b         
|----------------------------|
```
___
## Before starting <br>
> Create a database <br>
```
mysql
create database laravelblog;
exit;
```
> Setup your database credentials in the .env file <br>
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravelblog
DB_USERNAME={USERNAME}
DB_PASSWORD={PASSWORD}
```
> Migrate the tables
```
php artisan migrate:fresh
```
> Database for standings table
> [Original Standings Table](https://www.formula1.com/en/results.html/2022/drivers.html)
```sql
INSERT INTO `standings` (`position`, `driver`, `nationality`, `car`, `points`) VALUES
('1','Charles Leclerc','FERRARI','Monaco','86'),
('2','Max Verstappen','RED BULL RACING HONDA','Netherlands','59'),
('3','Sergio Perez','RED BULL RACING HONDA','Mexico','54'),
('4','George Russell', 'MERCEDES','Great Britain','49'),
('5','Carlos Sainz','FERRARI','Spain','38'),
('6','Lando Norris','MCLAREN MERCEDES','Great Britain','35'),
('7','Lewis Hamilton','MERCEDES','Great Britain','28'),
('8','Valtteri Bottas','MERCEDES','Finland','24'),
('9','Esteban Ocon','APINE RENAULT','France','20'),
('10','Kevin Magnussen','HAAS FERRARI','Denmark','15'),
('11','Daniel Ricciardo','MCLAREN MERCEDES','Australia','11'),
('12','Yuki Tsunoda','ALPHATAURI RBPT','Japan','10'),
('13','Pierre Gasly','ALPHATAURI RBPT','France','6'),
('14','Sebastian Vettel','ASTON MARTIN ARAMCO MERCEDES','Germany','4'),
('15','Fernando Alonso','ALPINE RENAULT','Spain','2'),
('16','Zhou Guanyu','ALFA ROMEO FERRARI','China','1'),
('17','Alexander Albon','	WILLIAMS MERCEDES','Thai','1'),
('18','Lance Stroll','ASTON MARTIN ARAMCO MERCEDES','Canada','1'),
('19','Mick Schumacher','HAAS FERRARI','Germany','0'),
('20','Nico Hulkenberg','ASTON MARTIN ARAMCO MERCEDES','Germany','0'),
('21','Nicholas Latifi','WILLIAMS MERCEDES','Canada','0');
```
___
<h2 align="center"> Login Page </h2>
<p align="center">
  <img src="https://github.com/ndavido/LaravelBlogCA3/raw/main/public/images/login_page.png" alt="Login Page">
</p>
<h2 align="center"> Google Authentication Login</h2>
<p align="center">
  <img src="https://github.com/ndavido/LaravelBlogCA3/raw/main/public/images/google_auth.png" alt="Google Authentication Login">
</p>
<h2 align="center"> Facebook Authentication Login</h2>
<p align="center">
  <img src="https://github.com/ndavido/LaravelBlogCA3/raw/main/public/images/facebook_auth.png" alt="Facebook Authentication Login">
</p>
<h2 align="center"> Blog Posts</h2>
<p align="center">
  <img src="https://github.com/ndavido/LaravelBlogCA3/raw/main/public/images/blog_posts.png" alt="Facebook Authentication Login">
</p>
<h2 align="center">View Blog Post</h2>
<p align="center">
  <img src="https://github.com/ndavido/LaravelBlogCA3/raw/main/public/images/show_post.png" alt="Facebook Authentication Login">
</p>
<h2 align="center"> Standings Table</h2>
<p align="center">
  <img src="https://github.com/ndavido/LaravelBlogCA3/raw/main/public/images/standings_table.png" alt="Facebook Authentication Login">
</p>
___

## Credits
The beginner repository is linked to [this youtube video](https://www.youtube.com/watch?v=HKJDLXsTr8A&t=4710s) where I show you how to create a complete blog in Laravel 8 using best practices.

>	Author: Code With Dary <br>
>	Twitter: [@codewithdary](https://twitter.com/codewithdary) <br>
>	Instagram: [@codewithdary](https://www.instagram.com/codewithdary/) <br>
