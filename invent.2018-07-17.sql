

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `tb_rack` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `rack_name` varchar(20) NOT NULL,
  `rack_floor` int(5) NOT NULL,
  `rack_coloum` int(5) NOT NULL,
  `part_id` int(10) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `tb_rackmeta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `r_name` varchar(20) NOT NULL,
  `r_des` varchar(50) NOT NULL,
  `r_floor` int(5) NOT NULL,
  `r_col` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






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


INSERT INTO tb_user VALUES
("29","User","User","Doctor","user@123","778519113","2018-06-06","U29");


