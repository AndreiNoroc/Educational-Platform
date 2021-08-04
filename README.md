                                                                                                                                                                                   <p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


# FinancialEducation

- ### Va insatalati xampp de pe site-ul [acesta](https://www.apachefriends.org/index.html) fie pt ubuntu fie pt windows.

- ###Dupa ce se intaleaza porniti serverele "Apache Web Server" si "MySQL Database". [Link](https://www.youtube.com/watch?v=mXdpCRgR-xE&list=PL0eyrZgxdwhwBToawjm9faF1ixePexft-&index=2&ab_channel=DaniKrossing) cu instalarea pe windows.

- ### Acum puteti intra in browser si sa scrieti localhost/phpmyadmin.Acolo vom face baza de date.

- ### Apoi intrati in folderul htdocs de la voi din calculator. In interiorul lui descarcati de pe github proiectul nostru. Trebuie sa ii dati drepturi, altfel nu il veti putea modifica. Pe ubuntu chmod -R 777 FinancialEducation/. Dupa asta puteti intra in browser si scrie localhost/FinancialEducation/ pentru a intra pe site.

- ### In interiorul phpMyAdmin creati o baza de date noua numita FinancialEducation. In interiorul acesteia un tabel numit users, dand paste la codul:

CREATE TABLE users (
id int not null PRIMARY KEY AUTO_INCREMENT,
first_name varchar(128) not null,
last_name varchar(128) not null,
username varchar(128) not null,
email varchar(128) not null,
pass varchar(128) not null,
updated_at timestamp not null,
created_at timestamp not null
);

###in sectiunea SQL
- ### Apoi ar trebui sa aveti un tabel gol pe care sa il puteti completa si voi.

- ### Ultimele parti nu sunt importante decat daca vreti sa testati si voi login system-ul.  In rest va trebuie doar xampp.

# Laravel Financial Education

In resources views am pus toate fisierele html, care acum poarta denumirea de blade.php.

Am separat sectiunile din index, recommendation si forum, si a mers :D, va mai ramane voua de facut games.

Stergeti vechiul tabel si creativa cel nou, apoi dati: php artisan migrate.
Daca va apare ca nu e nimic de migrat folositi comanda: php artisan migrate:refresh.

## Taskuri pentru forum :
 - [x] De facut login cu laravel;
 - [x] De facut logout cu laravel;
 - [x] De facut register cu laravel;
 - [x] De facut recover cu laravel;
 - [x] De facut reset cu laravel;
 - [ ] De facut un forum cu laravel;

## Taskuri pentru responsivitate :
- [ ] De centrat modalele pentru cont;
- [ ] De blocat background-ul in timp ce modalele sunt deschise;
- [ ] De facut butoanele din games responsive/ Poate daca are cineva timp si chef sa creeze niste cards ca la services cu fiecare joc;
- [ ] De scos caruselul pt telefoane pt ca nu se vede bine, poate punem o lista cu toate cartile;
- [ ] De modificat modalele de la recomandari a.i. sa se miceasca scrisul pe telefon;


## Taskuri pentru jocuri :
### Aici te ocupi Andrei :p
