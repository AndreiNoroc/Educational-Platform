<p style="text-align: center; font-size: 50px;color: #0f5132">FinancialEducation</p>

<p style="font-size: 18px" >Acesta este un proiect didactic care abordeaza un subiect prea
putin discutat in ziua de azi in ciuda importantei sale universale. Noi incercam sa ne aducem 
contributia in educatia tinerilor pe plan financiar, imbinand in proiectul nostru atat 
metode traditionale de invatare precum cartile sau povestile de viata ale unor oameni de success
, precum si metode noi cum sunt jocurile interactive gasite in sectiunea "Games" sau discutii libere
sub forma unui forum, gasite in sectiunea "Forum".
</p>

<p style="font-size: 30px; color: blue">MYSQL</p>

###Va descarcati mysql pentru windows sau ubuntu.
###Pentru ubuntu vedeti [aici](https://www.digitalocean.com/community/tutorials/how-to-install-mysql-on-ubuntu-20-04).
###Comenzi utile [aici](http://g2pc1.bu.edu/~qzpeng/manual/MySQL%20Commands.htm).

###Tabel pentru users:
CREATE TABLE users (
id int not null PRIMARY KEY AUTO_INCREMENT,
first_name varchar(128) not null,
last_name varchar(128) not null,
username varchar(128) not null,
email varchar(128) not null,
pass varchar(128) not null,
updated_at timestamp not null,
created_at timespamp not null
);

###Tabel pentru reset_password:
CREATE TABLE password_resets ( 
email varchar(255) not null, 
token varchar(255) not null, 
created_at timestamp not null
);

###Modificati asta in .env-ul vostru
MAIL_MAILER=smtp

MAIL_HOST=smtp.gmail.com

MAIL_PORT=465

MAIL_USERNAME=tibicool16@gmail.com

MAIL_PASSWORD=bakugan3

MAIL_ENCRYPTION=ssl

MAIL_FROM_ADDRESS=tibicool16@gmail.com

MAIL_FROM_NAME="FinancilaEducation"

<p style="font-size: 30px; color: red">Laravel</p>

###Documentatia laravel se gaseste [aici](https://laravel.com/)

###Daca nu va merg tabelele mai dati : php artisan migrate:refresh

###Fisierul .env nu poate fi trimis pe github intrucat este specific fiecarui calculator in parte asa ca va trebui sa va faceti rost de el separat.

<p style="font-size: 30px; color: darkorchid">Taskuri</p>

### - pentru forum :
 - [x] De facut login cu laravel;
 - [x] De facut logout cu laravel;
 - [x] De facut register cu laravel;
 - [x] De facut recover cu laravel;
 - [x] De facut reset cu laravel;
 - [ ] De modificat mesajul primit pe email;
 - [ ] De facut un forum cu laravel;
 - [ ] De facut search
 - [ ] Alert delete mesaje
 - [ ] Like / Dislike
 - [ ] Conturi modulatori

### - pentru responsivitate :
- [x] De infrumusetat partea de authentification
- [x] De facut butoanele din games responsive/ Poate daca are cineva timp si chef sa creeze niste cards ca la services cu fiecare joc;
- [ ] De scos caruselul pt telefoane pt ca nu se vede bine, poate punem o lista cu toate cartile;
- [ ] De modificat modalele de la recomandari a.i. sa se miceasca scrisul pe telefon;

### - pentru jocuri :
### Aici te ocupi Andrei :p

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


