

CREATE TABLE `tb_item` (
  `i_id` int(11) NOT NULL AUTO_INCREMENT,
  `i_no` varchar(50) NOT NULL,
  `i_type` varchar(50) NOT NULL,
  `i_brand` varchar(50) NOT NULL,
  `i_des` varchar(100) NOT NULL,
  `i_qty` int(5) NOT NULL,
  `i_up` decimal(8,2) NOT NULL,
  `i_mp` decimal(8,2) NOT NULL,
  `i_loc` varchar(20) NOT NULL,
  `i_last` date NOT NULL,
  PRIMARY KEY (`i_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO tb_item VALUES("1","G901","OR1","STS1","O RING1","78","500.00","111.00","24","2018-06-22");
INSERT INTO tb_item VALUES("2","35X45X6","USH","NOK","HYDRAULIC SEAL","150","2.50","1.30","25","2018-06-22");
INSERT INTO tb_item VALUES("5","G40","OR","STS","O RING","90","0.50","0.40","34","2018-06-19");
INSERT INTO tb_item VALUES("6","G50","OR","STS","O RING","15","0.10","0.10","37","2018-06-19");
INSERT INTO tb_item VALUES("8","98X120X14.5","OHM","STS","HYDROULIC SEAL","25","150.00","120.00","UN","2018-06-20");
INSERT INTO tb_item VALUES("11","G901","OHM","STS1","HYDROULIC SEAL","8","150.00","100.00","UN","2018-06-22");



CREATE TABLE `tb_rack` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `rack_name` varchar(20) NOT NULL,
  `rack_floor` int(5) NOT NULL,
  `rack_coloum` int(5) NOT NULL,
  `part_id` int(10) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB AUTO_INCREMENT=168 DEFAULT CHARSET=latin1;

INSERT INTO tb_rack VALUES("21","A","1","1","0");
INSERT INTO tb_rack VALUES("22","A","1","2","0");
INSERT INTO tb_rack VALUES("23","A","1","3","0");
INSERT INTO tb_rack VALUES("24","A","1","4","1");
INSERT INTO tb_rack VALUES("25","A","2","1","2");
INSERT INTO tb_rack VALUES("26","A","2","2","0");
INSERT INTO tb_rack VALUES("27","A","2","3","0");
INSERT INTO tb_rack VALUES("28","A","2","4","0");
INSERT INTO tb_rack VALUES("29","A","3","1","0");
INSERT INTO tb_rack VALUES("30","A","3","2","0");
INSERT INTO tb_rack VALUES("31","A","3","3","0");
INSERT INTO tb_rack VALUES("32","A","3","4","0");
INSERT INTO tb_rack VALUES("33","A","4","1","0");
INSERT INTO tb_rack VALUES("34","A","4","2","5");
INSERT INTO tb_rack VALUES("35","A","4","3","0");
INSERT INTO tb_rack VALUES("36","A","4","4","0");
INSERT INTO tb_rack VALUES("37","A","5","1","6");
INSERT INTO tb_rack VALUES("38","A","5","2","0");
INSERT INTO tb_rack VALUES("39","A","5","3","0");
INSERT INTO tb_rack VALUES("40","A","5","4","0");
INSERT INTO tb_rack VALUES("41","B","1","1","0");
INSERT INTO tb_rack VALUES("42","B","2","1","0");
INSERT INTO tb_rack VALUES("43","B","3","1","0");
INSERT INTO tb_rack VALUES("44","C","1","1","0");
INSERT INTO tb_rack VALUES("45","C","1","2","0");
INSERT INTO tb_rack VALUES("46","C","1","3","0");
INSERT INTO tb_rack VALUES("47","C","1","4","0");
INSERT INTO tb_rack VALUES("48","C","1","5","0");
INSERT INTO tb_rack VALUES("49","C","1","6","0");
INSERT INTO tb_rack VALUES("50","C","1","7","0");
INSERT INTO tb_rack VALUES("51","C","1","8","0");
INSERT INTO tb_rack VALUES("52","C","1","9","0");
INSERT INTO tb_rack VALUES("53","C","1","10","0");
INSERT INTO tb_rack VALUES("54","C","1","11","0");
INSERT INTO tb_rack VALUES("55","C","1","12","0");
INSERT INTO tb_rack VALUES("56","C","2","1","0");
INSERT INTO tb_rack VALUES("57","C","2","2","0");
INSERT INTO tb_rack VALUES("58","C","2","3","0");
INSERT INTO tb_rack VALUES("59","C","2","4","0");
INSERT INTO tb_rack VALUES("60","C","2","5","0");
INSERT INTO tb_rack VALUES("61","C","2","6","0");
INSERT INTO tb_rack VALUES("62","C","2","7","0");
INSERT INTO tb_rack VALUES("63","C","2","8","0");
INSERT INTO tb_rack VALUES("64","C","2","9","0");
INSERT INTO tb_rack VALUES("65","C","2","10","0");
INSERT INTO tb_rack VALUES("66","C","2","11","0");
INSERT INTO tb_rack VALUES("67","C","2","12","0");
INSERT INTO tb_rack VALUES("68","C","3","1","0");
INSERT INTO tb_rack VALUES("69","C","3","2","0");
INSERT INTO tb_rack VALUES("70","C","3","3","0");
INSERT INTO tb_rack VALUES("71","C","3","4","0");
INSERT INTO tb_rack VALUES("72","C","3","5","0");
INSERT INTO tb_rack VALUES("73","C","3","6","0");
INSERT INTO tb_rack VALUES("74","C","3","7","0");
INSERT INTO tb_rack VALUES("75","C","3","8","0");
INSERT INTO tb_rack VALUES("76","C","3","9","0");
INSERT INTO tb_rack VALUES("77","C","3","10","0");
INSERT INTO tb_rack VALUES("78","C","3","11","0");
INSERT INTO tb_rack VALUES("79","C","3","12","0");
INSERT INTO tb_rack VALUES("80","C","4","1","0");
INSERT INTO tb_rack VALUES("81","C","4","2","0");
INSERT INTO tb_rack VALUES("82","C","4","3","0");
INSERT INTO tb_rack VALUES("83","C","4","4","0");
INSERT INTO tb_rack VALUES("84","C","4","5","0");
INSERT INTO tb_rack VALUES("85","C","4","6","0");
INSERT INTO tb_rack VALUES("86","C","4","7","0");
INSERT INTO tb_rack VALUES("87","C","4","8","0");
INSERT INTO tb_rack VALUES("88","C","4","9","0");
INSERT INTO tb_rack VALUES("89","C","4","10","0");
INSERT INTO tb_rack VALUES("90","C","4","11","0");
INSERT INTO tb_rack VALUES("91","C","4","12","0");
INSERT INTO tb_rack VALUES("92","C","5","1","0");
INSERT INTO tb_rack VALUES("93","C","5","2","0");
INSERT INTO tb_rack VALUES("94","C","5","3","0");
INSERT INTO tb_rack VALUES("95","C","5","4","0");
INSERT INTO tb_rack VALUES("96","C","5","5","0");
INSERT INTO tb_rack VALUES("97","C","5","6","0");
INSERT INTO tb_rack VALUES("98","C","5","7","0");
INSERT INTO tb_rack VALUES("99","C","5","8","0");
INSERT INTO tb_rack VALUES("100","C","5","9","0");
INSERT INTO tb_rack VALUES("101","C","5","10","0");
INSERT INTO tb_rack VALUES("102","C","5","11","0");
INSERT INTO tb_rack VALUES("103","C","5","12","0");
INSERT INTO tb_rack VALUES("104","C","6","1","0");
INSERT INTO tb_rack VALUES("105","C","6","2","0");
INSERT INTO tb_rack VALUES("106","C","6","3","0");
INSERT INTO tb_rack VALUES("107","C","6","4","0");
INSERT INTO tb_rack VALUES("108","C","6","5","0");
INSERT INTO tb_rack VALUES("109","C","6","6","0");
INSERT INTO tb_rack VALUES("110","C","6","7","0");
INSERT INTO tb_rack VALUES("111","C","6","8","0");
INSERT INTO tb_rack VALUES("112","C","6","9","0");
INSERT INTO tb_rack VALUES("113","C","6","10","0");
INSERT INTO tb_rack VALUES("114","C","6","11","0");
INSERT INTO tb_rack VALUES("115","C","6","12","0");
INSERT INTO tb_rack VALUES("116","C","7","1","0");
INSERT INTO tb_rack VALUES("117","C","7","2","0");
INSERT INTO tb_rack VALUES("118","C","7","3","0");
INSERT INTO tb_rack VALUES("119","C","7","4","0");
INSERT INTO tb_rack VALUES("120","C","7","5","0");
INSERT INTO tb_rack VALUES("121","C","7","6","0");
INSERT INTO tb_rack VALUES("122","C","7","7","0");
INSERT INTO tb_rack VALUES("123","C","7","8","0");
INSERT INTO tb_rack VALUES("124","C","7","9","0");
INSERT INTO tb_rack VALUES("125","C","7","10","0");
INSERT INTO tb_rack VALUES("126","C","7","11","0");
INSERT INTO tb_rack VALUES("127","C","7","12","0");
INSERT INTO tb_rack VALUES("128","C","8","1","0");
INSERT INTO tb_rack VALUES("129","C","8","2","0");
INSERT INTO tb_rack VALUES("130","C","8","3","0");
INSERT INTO tb_rack VALUES("131","C","8","4","0");
INSERT INTO tb_rack VALUES("132","C","8","5","0");
INSERT INTO tb_rack VALUES("133","C","8","6","0");
INSERT INTO tb_rack VALUES("134","C","8","7","0");
INSERT INTO tb_rack VALUES("135","C","8","8","0");
INSERT INTO tb_rack VALUES("136","C","8","9","0");
INSERT INTO tb_rack VALUES("137","C","8","10","0");
INSERT INTO tb_rack VALUES("138","C","8","11","0");
INSERT INTO tb_rack VALUES("139","C","8","12","0");
INSERT INTO tb_rack VALUES("140","C","9","1","0");
INSERT INTO tb_rack VALUES("141","C","9","2","0");
INSERT INTO tb_rack VALUES("142","C","9","3","0");
INSERT INTO tb_rack VALUES("143","C","9","4","0");
INSERT INTO tb_rack VALUES("144","C","9","5","0");
INSERT INTO tb_rack VALUES("145","C","9","6","0");
INSERT INTO tb_rack VALUES("146","C","9","7","0");
INSERT INTO tb_rack VALUES("147","C","9","8","0");
INSERT INTO tb_rack VALUES("148","C","9","9","0");
INSERT INTO tb_rack VALUES("149","C","9","10","0");
INSERT INTO tb_rack VALUES("150","C","9","11","0");
INSERT INTO tb_rack VALUES("151","C","9","12","0");
INSERT INTO tb_rack VALUES("152","C","10","1","0");
INSERT INTO tb_rack VALUES("153","C","10","2","0");
INSERT INTO tb_rack VALUES("154","C","10","3","0");
INSERT INTO tb_rack VALUES("155","C","10","4","0");
INSERT INTO tb_rack VALUES("156","C","10","5","0");
INSERT INTO tb_rack VALUES("157","C","10","6","0");
INSERT INTO tb_rack VALUES("158","C","10","7","0");
INSERT INTO tb_rack VALUES("159","C","10","8","0");
INSERT INTO tb_rack VALUES("160","C","10","9","0");
INSERT INTO tb_rack VALUES("161","C","10","10","0");
INSERT INTO tb_rack VALUES("162","C","10","11","0");
INSERT INTO tb_rack VALUES("163","C","10","12","0");



CREATE TABLE `tb_rackmeta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `r_name` varchar(20) NOT NULL,
  `r_des` varchar(50) NOT NULL,
  `r_floor` int(5) NOT NULL,
  `r_col` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO tb_rackmeta VALUES("3","A","Rack A","5","4");
INSERT INTO tb_rackmeta VALUES("4","B","Rack B","3","1");
INSERT INTO tb_rackmeta VALUES("5","C","Rack C","10","12");



CREATE TABLE `tb_sale` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `i_no` varchar(20) NOT NULL,
  `i_type` varchar(50) NOT NULL,
  `i_brand` varchar(50) NOT NULL,
  `i_des` varchar(50) NOT NULL,
  `i_qty` int(5) NOT NULL,
  `i_up` decimal(8,2) NOT NULL,
  `sale_date` date NOT NULL,
  `sale_time` varchar(15) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

INSERT INTO tb_sale VALUES("1","G40","OR","STS","O RING","2","1.00","2018-06-21","12:13:52pm");
INSERT INTO tb_sale VALUES("2","35X45X6","USH","NOK","HYDRAULIC SEAL","3","1.00","2018-06-20","12:14:41pm");
INSERT INTO tb_sale VALUES("3","G40","OR","STS","O RING","3","0.50","2018-06-20","12:15:37pm");
INSERT INTO tb_sale VALUES("4","G50","OR","STS","O RING","5","0.15","2018-06-20","01:39:42pm");
INSERT INTO tb_sale VALUES("5","G40","OR","STS","O RING","6","0.50","2018-06-20","01:55:03pm");
INSERT INTO tb_sale VALUES("6","35X45X6","USH","NOK","HYDRAULIC SEAL","2","1.39","2018-06-20","03:51:42pm");
INSERT INTO tb_sale VALUES("7","35X45X6","USH","NOK","HYDRAULIC SEAL","3","5.00","2018-06-20","03:56:15pm");
INSERT INTO tb_sale VALUES("8","35X45X6","USH","NOK","HYDRAULIC SEAL","10","2.30","2018-06-20","07:06:12pm");
INSERT INTO tb_sale VALUES("9","G90","OR","STS","O RING","5","0.20","2018-06-21","10:58:35am");
INSERT INTO tb_sale VALUES("10","G90","OR","STS","O RING","20","150.00","2018-06-22","11:00:40am");
INSERT INTO tb_sale VALUES("11","G90","OR","STS","O RING","3","150.00","2018-06-22","11:02:51am");
INSERT INTO tb_sale VALUES("12","G40","OR","STS","O RING","5","60.00","2018-06-22","01:51:36pm");
INSERT INTO tb_sale VALUES("13","G901","OHM","STS1","HYDROULIC SEAL","122","150.00","2018-06-22","02:00:17pm");
INSERT INTO tb_sale VALUES("14","G901","OHM","STS1","HYDROULIC SEAL","15","150.00","2018-06-22","02:00:29pm");
INSERT INTO tb_sale VALUES("15","G901","OHM","STS1","HYDROULIC SEAL","5","150.00","2018-06-22","02:00:33pm");
INSERT INTO tb_sale VALUES("16","G50","OR","STS","O RING","5","0.10","2018-06-22","02:00:50pm");
INSERT INTO tb_sale VALUES("17","G901","OR1","STS1","O RING1","2","151.50","2018-06-23","07:32:41pm");
INSERT INTO tb_sale VALUES("18","G901","OR1","STS1","O RING1","50","999.99","2018-06-24","10:21:46am");
INSERT INTO tb_sale VALUES("19","G901","OR1","STS1","O RING1","52","150000.00","2018-06-24","10:24:03am");



CREATE TABLE `tb_user` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `u_type` varchar(20) NOT NULL,
  `u_pw` varchar(20) NOT NULL,
  `u_tp` int(10) NOT NULL,
  `u_ch_date` date NOT NULL,
  `u_id` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

INSERT INTO tb_user VALUES("29","User","User","Doctor","user@123","778519113","2018-06-06","U29");

