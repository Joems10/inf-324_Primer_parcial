

CREATE TABLE PERSONA
(
    ci varchar(20) NOT NULL,
    nombre_completo varchar(255) NOT NULL,
    fecha_de_nacimiento date NOT NULL,
    departamento char(2) NOT NULL,
    telefono varchar(50) NOT NULL,
    primary key(ci)
);


INSERT INTO PERSONA (ci, nombre_completo, fecha_de_nacimiento, departamento,telefono) VALUES
('56789', 'PEREZ ALANDIA WALTER ABRAHAM', '1998-07-21', '02','591+75757123'),
('56790', 'RODRIGUEZ ROJAS HUGO ALVARO ', '1996-08-22', '05','591+75757456'),
('56791', 'YUJRA SEGALES JUAN REYNALDO', '1990-03-02', '03','591+75732145'),
('56792', 'VELARDE VERA HUGO SERGIO ', '1998-08-24', '05','591+75757856'),
('56793', 'POLO RIVERO RONALD EDDY', '1995-04-02', '01','591+75757431'),
('56794', 'SANCHEZ MONTOYA PEDRO', '1996-05-18', '02','591+75757098'),
('56795', 'GUTIERREZ BUSTILLOS NANCY TATIANA', '1988-06-27', '03','591+75757099'),
('56796', 'CANAVIRI CANAVIRI JANNETH', '1980-01-11', '01','591+75757023'),
('56797', 'LOAYZA GUZMAN STEPHANIA JANINE', '1999-01-04', '04','591+75757024'),
('56798', 'GARCIA PEÑARANDA CHRISTIAN MARIO', '1994-10-25', '07','591+75757035'),
('56799', 'CHURQUI YUJRA ROSALIA ROSA', '1994-08-06', '07','591+75757036'),
('56800', 'GUTIERREZ GARCIA MARITZA ELSA', '1995-11-03', '05','591+75757037'),
('56801', 'ORTIZ VARGAS CAROL ROSA', '1993-12-07', '07','591+75757038'),
('56802', 'HUAYHUA CHAMBI ALICIA', '1996-01-08', '02','591+75757040'),
('56803', 'DEHEZA ROSSEL LUIS FERNANDO ', '1996-01-03', '05','591+75757041'),
('56804', 'ERGUETA APARICIO GUSTAVO ADOLFO', '1993-12-12', '07','591+75757042'),
('56805', 'CONDE ZUÑAGUA SANDRA CORINA', '1996-11-11', '02','591+75757043');


INSERT INTO persona (ci, nombre_completo, fecha_de_nacimiento, departamento, telefono) VALUES ('8353503', 'JOEL MARCELO SOLIZ CAGUAYA', '2022-03-19', '01','591+77716589);


CREATE TABLE ACCESO
(
    ci varchar(20) NOT NULL,
    usuario varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    rol varchar(30) NOT NULL,
    primary key(ci),
    FOREIGN KEY(ci) REFERENCES PERSONA(ci)
);


INSERT INTO acceso (ci, usuario, password, rol) VALUES ('8353503', 'jmsoliz', '123456', 'DIRECTOR');

insert into ACCESO (ci, usuario, password, rol) values ('56789', 'aaambcle0', '111aaa', 'DIRECTOR');
insert into ACCESO (ci, usuario, password, rol) values ('56790', 'bbbkwood1', '222bbb', 'DOCENTE');
insert into ACCESO (ci, usuario, password, rol) values ('56791', 'ccccoome2', '333ccc', 'ESTUDIANTE');
insert into ACCESO (ci, usuario, password, rol) values ('56792', 'ddddncey3', '444ddd', 'ESTUDIANTE');
insert into ACCESO (ci, usuario, password, rol) values ('56793', 'eeeebitt4', '555eee', 'ESTUDIANTE');
insert into ACCESO (ci, usuario, password, rol) values ('56794', 'ffffasli5', '666fff', 'ESTUDIANTE');
insert into ACCESO (ci, usuario, password, rol) values ('56795', 'ggggging6', '777ggg', 'ESTUDIANTE');
insert into ACCESO (ci, usuario, password, rol) values ('56796', 'hhhhhhwe7', '888hhh', 'ESTUDIANTE');
insert into ACCESO (ci, usuario, password, rol) values ('56797', 'iiiworth8', '999iii', 'ESTUDIANTE');
insert into ACCESO (ci, usuario, password, rol) values ('56798', 'jjjjjier9', '101jjj', 'ESTUDIANTE');
insert into ACCESO (ci, usuario, password, rol) values ('56799', 'kkkeifera', '102kkk', 'ESTUDIANTE');
insert into ACCESO (ci, usuario, password, rol) values ('56800', 'llleylerb', '103lll', 'ESTUDIANTE');
insert into ACCESO (ci, usuario, password, rol) values ('56801', 'mmmcliffe', '104mmm', 'ESTUDIANTE');
insert into ACCESO (ci, usuario, password, rol) values ('56802', 'nnnrrilld', '105nnn', 'ESTUDIANTE');
insert into ACCESO (ci, usuario, password, rol) values ('56803', 'ooofgonte', '201ooo', 'ESTUDIANTE');
insert into ACCESO (ci, usuario, password, rol) values ('56804', 'pppaggenf', '202ppp', 'ESTUDIANTE');
insert into ACCESO (ci, usuario, password, rol) values ('56805', 'qqmklineg', '203qqq', 'ESTUDIANTE');



CREATE TABLE INSCRIPCION
(
    CIestudiante varchar(20) NOT NULL,
    sigla varchar(10) NOT NULL,
    nota1 int,
    nota2 int,
    nota3 int,
    nota_final int,
    primary key(CIestudiante, sigla),
    FOREIGN KEY(CIestudiante) REFERENCES PERSONA(ci)
);

insert into INSCRIPCION (CIestudiante, sigla, nota1, nota2, nota3, nota_final) values ('56789', 'INF-112', 51, 47, 48, 48);
insert into INSCRIPCION (CIestudiante, sigla, nota1, nota2, nota3, nota_final) values ('56790', 'INF-121', 97, 10, 60, 55);
insert into INSCRIPCION (CIestudiante, sigla, nota1, nota2, nota3, nota_final) values ('56791', 'INF-113', 78, 61, 17, 52);
insert into INSCRIPCION (CIestudiante, sigla, nota1, nota2, nota3, nota_final) values ('56792', 'INF-121', 74, 90, 26, 63);
insert into INSCRIPCION (CIestudiante, sigla, nota1, nota2, nota3, nota_final) values ('56793', 'INF-121', 43, 43, 22, 36);
insert into INSCRIPCION (CIestudiante, sigla, nota1, nota2, nota3, nota_final) values ('56794', 'INF-111', 86, 18, 3, 35);
insert into INSCRIPCION (CIestudiante, sigla, nota1, nota2, nota3, nota_final) values ('56795', 'INF-111', 30, 15, 15, 20 );
insert into INSCRIPCION (CIestudiante, sigla, nota1, nota2, nota3, nota_final) values ('56796', 'INF-113', 12, 36, 44, 30);
insert into INSCRIPCION (CIestudiante, sigla, nota1, nota2, nota3, nota_final) values ('56797', 'INF-112', 23, 98, 26, 49);
insert into INSCRIPCION (CIestudiante, sigla, nota1, nota2, nota3, nota_final) values ('56798', 'INF-121', 54, 31, 40, 41);
insert into INSCRIPCION (CIestudiante, sigla, nota1, nota2, nota3, nota_final) values ('56799', 'INF-121', 20, 73, 73, 55);
insert into INSCRIPCION (CIestudiante, sigla, nota1, nota2, nota3, nota_final) values ('56800', 'INF-112', 66, 62, 81, 69);
insert into INSCRIPCION (CIestudiante, sigla, nota1, nota2, nota3, nota_final) values ('56801', 'INF-113', 69, 82, 80, 77);
insert into INSCRIPCION (CIestudiante, sigla, nota1, nota2, nota3, nota_final) values ('56802', 'INF-112', 22, 95, 40, 52);
insert into INSCRIPCION (CIestudiante, sigla, nota1, nota2, nota3, nota_final) values ('56803', 'INF-113', 97, 100, 57, 84);
insert into INSCRIPCION (CIestudiante, sigla, nota1, nota2, nota3, nota_final) values ('56804', 'INF-121', 6, 24, 21, 17);
insert into INSCRIPCION (CIestudiante, sigla, nota1, nota2, nota3, nota_final) values ('56805', 'INF-121', 82, 82, 3, 55);


