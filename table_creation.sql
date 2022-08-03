create table gojoanimelogin (
    iduserlogin NUMBER(38,0) NOT NULL,
    username VARCHAR(20) NOT NULL,
    loginpasswd VARCHAR2(45 BYTE) NOT NULL,
    PRIMARY KEY (iduserlogin)
);

create table customerinfo (
   idcustomer number(38,0) NOT NULL,
   customername varchar(45) NOT NULL,
   customerusername int NOT NULL,
   phonenumber varchar(35) NOT NULL,
   customerpasswd int NOT NULL,
   email varchar(35),
   PRIMARY KEY (idcustomer),
   constraint fk_cinfo_gjl FOREIGN KEY (customerusername) REFERENCES gojoanimelogin (iduserlogin),
   constraint fk_cinfo_gj2 FOREIGN KEY (customerpasswd) REFERENCES gojoanimelogin (iduserlogin)
);


