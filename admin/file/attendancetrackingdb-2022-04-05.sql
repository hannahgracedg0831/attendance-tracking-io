DROP TABLE backup_data;

CREATE TABLE `backup_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;




DROP TABLE tbl_attendance;

CREATE TABLE `tbl_attendance` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `SCHOOLID` varchar(250) NOT NULL,
  `TIMEIN` varchar(250) NOT NULL,
  `TIMEOUT` varchar(250) NOT NULL,
  `LOGDATE` varchar(250) NOT NULL,
  `STATUS` varchar(250) NOT NULL,
  `STAFF_ID` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_attendance VALUES("1","GT18-01","08:09:55pm","08:32:40pm","2022-02-14","1","12345");
INSERT INTO tbl_attendance VALUES("2","GT18-01","08:32:33pm","08:32:40pm","2022-02-14","1","123");
INSERT INTO tbl_attendance VALUES("3","GT18-09","08:38:03pm","08:38:10pm","2022-02-14","1","123");
INSERT INTO tbl_attendance VALUES("4","GT18-01","02:25:30pm","02:35:58pm","2022-02-17","1","GT18-0111");
INSERT INTO tbl_attendance VALUES("5","GT18-01","02:27:49pm","02:35:58pm","2022-02-17","1","GT18-0111");
INSERT INTO tbl_attendance VALUES("6","GT18-01","02:29:53pm","02:35:58pm","2022-02-17","1","GT18-0111");
INSERT INTO tbl_attendance VALUES("7","GT18-01","02:30:50pm","02:35:58pm","2022-02-17","1","GT18-0111");
INSERT INTO tbl_attendance VALUES("8","GT18-01","02:32:58pm","02:35:58pm","2022-02-17","1","");
INSERT INTO tbl_attendance VALUES("9","GT18-01","02:34:42pm","02:35:58pm","2022-02-17","1","GT18-0111");
INSERT INTO tbl_attendance VALUES("10","GT18-01","04:02:57pm","","2022-02-17","0","GT18-0111");



DROP TABLE tbl_logs;

CREATE TABLE `tbl_logs` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `logType` enum('In','Out','','') NOT NULL,
  `stuff_id` int(11) NOT NULL,
  `logdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




DROP TABLE tbl_report;

CREATE TABLE `tbl_report` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




DROP TABLE tbl_staff;

CREATE TABLE `tbl_staff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_id` varchar(100) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `mname` varchar(250) NOT NULL,
  `position` varchar(100) NOT NULL,
  `barangay` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `dob` varchar(250) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_staff VALUES("1","12345","Hannah Grace","Dela Cruz","Gutierrez","Guard","Padolina","General Tinio","Nueva Ecija","08/31/1999","Female","098765432","gutierrezhannah70@gmail.com","");
INSERT INTO tbl_staff VALUES("2","123","Mark Leynard","Bulaclac","Bianan","Admin","Concepcion","Adasde","AsA","2000/01/10","Male","0987654334","leyanrd@gmail.com","");
INSERT INTO tbl_staff VALUES("4","GT18-00004","Joyce","San Pedro","Dytianquin","Teacher","Gawad Kalinga","General Tinio","Nueva Ecija","2022-03-02","Female","09827362736","joyce@gmail.com","");
INSERT INTO tbl_staff VALUES("5","GT0101","John Louie","Sibayan","Bulaklak","Guard","Concepcion","General Tinio","Nueva Ecija","2022-03-23","Male","09886456423","jlbulaklak@gmail.com","");



DROP TABLE tbl_student;

CREATE TABLE `tbl_student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(100) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `mname` varchar(250) NOT NULL,
  `course` varchar(100) NOT NULL,
  `year_section` varchar(100) NOT NULL,
  `barangay` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `dob` varchar(250) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_student VALUES("1","GT18-01","Joyce","Dytianquin","San Pedro","BSIT","4A","Gawad Kalinga","General Tinio","Nueva Ecija","2000-05-18","Female","09876543234","leynardbulaclac@yahoo.com","","0");
INSERT INTO tbl_student VALUES("3","GT18-100","Mark Leynard","Bulaclac","Bianan","BSIT","4A","Concepcion","General Tinio","Nueva Ecija","10/10/2000","Male","0987654344","Leynard@gmail.com","","0");
INSERT INTO tbl_student VALUES("4","GT18-00189","John Louie","Sibayan","Bulaklak","BSIT","4A","Concepcion","General Tinio","Nueva Ecija","2021-01-21","Male","098767654543","jlbulaklak@yahoo.com","","0");
INSERT INTO tbl_student VALUES("5","GT18-00120","Hannah Grace","Gutierrez","Dela Cruz","BSIT","4A","Padolina","General Tinio","Nueva Ecija","2022-03-09","Female","09876544323","hannah@gmail.com","","0");



DROP TABLE tbl_user;

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'default',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_user VALUES("11","123","admin","$2y$10$fmvyRrkajqvwDLtkXIuxWO71oyAmgQVX7DKiCiLVWCiUZMgxO5kgy","default");
INSERT INTO tbl_user VALUES("13","12345","hannah","$2y$10$hLEahVHwPi33VfRI8lHqu.2s76Vcr6hM9R68k137hownPZkFbj/b2","active");
INSERT INTO tbl_user VALUES("14","GT18-00004","joyce","$2y$10$WvBQUZX.Ia2VgIFZzKuGbumQMgk0dpNzVZpucen1F7yOA2Cy8fn2C","default");



DROP TABLE tbl_visitor;

CREATE TABLE `tbl_visitor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `visitor_id` varchar(100) NOT NULL,
  `facility` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_visitor VALUES("16","1040594682","Office");
INSERT INTO tbl_visitor VALUES("19","1669596097","CLRC");
INSERT INTO tbl_visitor VALUES("20","340237917","Gymnasium");
INSERT INTO tbl_visitor VALUES("21","1512811400","ComLab 1");



