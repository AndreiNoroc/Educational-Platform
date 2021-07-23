 FinancialEducation

Va insatalati xampp de pe site-ul https://www.apachefriends.org/index.html
fie pt ubuntu fie pt windows.

Dupa ce se intaleaza porniti serverele "Apache Web Server" si "MySQL Database".
https://www.youtube.com/watch?v=mXdpCRgR-xE&list=PL0eyrZgxdwhwBToawjm9faF1ixePexft-&index=2&ab_channel=DaniKrossing
Link cu instalarea pe windows.

Acum puteti intra in browser si sa scrieti localhost/phpmyadmin.Acolo vom face baza de date.

Apoi intrati in folderul htdocs de la voi din calculator. In interiorul lui descarcati de pe github
proiectul nostru. Trebuie sa ii dati drepturi, altfel nu il veti putea modifica.
Pe ubuntu chmod -R 777 FinancialEducation/.
Dupa asta puteti intra in browser si scrie localhost/FinancialEducation/ pentru a intra pe site.

In interiorul phpMyAdmin creati o baza de date noua numita loginsystem.
In interiorul acesteia un tabel numit users, dand paste la codul:
CREATE TABLE users (
    id int(11) not null PRIMARY KEY AUTO_INCREMENT,
    user_first varchar(128) not null,
    user_last varchar(128) not null,
    user_email varchar(128) not null,
    user_uid varchar(128) not null,
    user_pwd varchar(128) not null
);
in sectiunea SQL
Apoi ar trebui sa aveti un tabel gol pe care sa il puteti completa si voi.

Ultimele parti nu sunt importante decat daca vreti sa testati si voi login system-ul.
In rest va trebuie doar xampp.

In interiorul acesteia un tabel numit pwdReset, dand paste la codul:
CREATE TABLE pwdReset (
    pwdResetId int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    pwdResetEmail TEXT NOT NULL,
    pwdResetSelector TEXT NOT NULL,
    pwdResetToken TEXT NOT NULL,
    pwdResetExpires TEXT NOT NULL,
);