DROP SCHEMA IF EXISTS gojoanime;

CREATE SCHEMA IF NOT EXISTS gojoanime DEFAULT CHARACTER SET utf8;
USE gojoanime

create table gojoanimelogin (
    iduserlogin INT NOT NULL,
    username VARCHAR(20) NOT NULL,
    loginpasswd VARCHAR(45) NOT NULL,
    PRIMARY KEY (iduserlogin)
);

create table customerinfo (
   idcustomer INT NOT NULL,
   customername VARCHAR(45) NOT NULL,
   iduserlogin INT NOT NULL,
   phonenumber VARCHAR(35) NOT NULL,
   email VARCHAR(35),
   gender VARCHAR(7),
   PRIMARY KEY (idcustomer),
   constraint fk_cinfo_gjl FOREIGN KEY (iduserlogin) REFERENCES gojoanimelogin (iduserlogin)
);

create table watchanimepage (
   idanimesession INT NOT NULL,
   anime VARCHAR(30) NOT NULL,
   episode INT(2) NOT NULL,
   episodename VARCHAR(50) NOT NULL,
   PRIMARY KEY (idanimesession)
);

create table many_to_many_anime (
    idcustomer INT NOT NULL,
    idanimesession INT NOT NULL,
    PRIMARY KEY (idcustomer, idanimesession),
    constraint fk_mtma_gjm1 FOREIGN KEY (idcustomer) REFERENCES customerinfo (idcustomer),
    constraint fk_mtma_gjm2 FOREIGN KEY (idanimesession) REFERENCES watchanimepage (idanimesession)
);

create table ContactUs (
    idsession INT NOT NULL,
    firstname VARCHAR(40) NOT NULL,
    lastname VARCHAR(40) NOT NULL,
    email VARCHAR(35) NOT NULL, 
    phonenumber VARCHAR(35) NOT NULL,
    PRIMARY KEY (idsession)
);