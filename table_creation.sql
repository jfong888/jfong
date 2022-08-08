DROP SCHEMA IF EXISTS 'gojoanime';

CREATE SCHEMA IF NOT EXISTS 'gojoanime' DEFAULT CHARACTER SET utf8;
USE 'gojoanime'

create table gojoanimelogin (
    iduserlogin NUMBER(38,0) NOT NULL,
    username VARCHAR(20) NOT NULL,
    loginpasswd VARCHAR2(45 BYTE) NOT NULL,
    PRIMARY KEY (iduserlogin)
);

create table customerinfo (
   idcustomer INT NOT NULL,
   customername VARCHAR(45) NOT NULL,
   customerusername INT NOT NULL,
   phonenumber VARCHAR(35) NOT NULL,
   customerpasswd INT NOT NULL,
   email VARCHAR(35),
   gender VARCHAR(7),
   PRIMARY KEY (idcustomer),
   constraint fk_cinfo_gjl FOREIGN KEY (customerusername) REFERENCES gojoanimelogin (iduserlogin),
   constraint fk_cinfo_gj2 FOREIGN KEY (customerpasswd) REFERENCES gojoanimelogin (iduserlogin)
);

create table many_to_many_anime (
    idcustomer INT NOT NULL,
    idanimesession INT NOT NULL,
    PRIMARY KEY (idcustomer, idanimesession),
    constraint fk_mtma_gjm1 FOREIGN KEY (idcustomer) REFERENCES customerinfo (idcustomer),
    constraint fk_mtma_gjm2 FOREIGN KEY (idanimesession) REFERENCES watchanimepage (idanimesession)
);

create table watchanimepage (
   idanimesession INT NOT NULL,
   watchedanime VARCHAR(100) NOT NULL,
   PRIMARY KEY (idanimesession)
);

create table ContactUs (
    idsession NUMBER(38,0) NOT NULL,
    firstname VARCHAR(40) NOT NULL,
    lastname VARCHAR(40) NOT NULL,
    email VARCHAR(35) NOT NULL, 
    phonenumber VARCHAR(35) NOT NULL,
    PRIMARY KEY (idsession)
)