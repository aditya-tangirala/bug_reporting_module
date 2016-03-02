--
-- MySQL 5.5.20
-- Fri, 16 Aug 2013 21:29:27 +0000
--

CREATE TABLE `inbox` (
   `t_user` varchar(20) not null,
   `subject` varchar(20),
   `msg` varchar(200) not null,
   `f_user` varchar(20) not null,
   `st1` int(1),
   `st2` int(1),
   `idn` int(5) not null auto_increment,
   PRIMARY KEY (`idn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=13;

INSERT INTO `inbox` (`t_user`, `subject`, `msg`, `f_user`, `st1`, `st2`, `idn`) VALUES 
('Aditya Tangirala', 'Project', 'My project is over', 'ravi teja', '1', '0', '1'),
('Aditya Tangirala', 'SOLAR PANEL PROJECT', 'We have a new project on solar panels. I will assign all of you that project', 'vinayak rao', '1', '1', '2'),
('Aditya Tangirala', 'Info', 'BITS-Pilani Hyderabad campus', 'ravi teja', '1', '1', '3'),
('asdf ghjk', 'MODULE ASSIGNMENT', 'you are allotted PVC module of GREEN IT project.\n \n The module details are Solar panels \n &nbsp;&nbsp;&nbsp;&nbsp;Try to complete it fast', 'ravi teja', '1', '1', '4'),
('ravi teja', 'MODULE ASSIGNMENT', 'you are allotted Renewable energy module of GREEN IT project.\n \n The module details are Wind energy \n &nbsp;&nbsp;&nbsp;&nbsp;Try to complete it fast', 'ravi teja', '1', '1', '5'),
('ravi teja', 'ajshdkj', 'shkdfhak', 'asdf ghjk', '1', '1', '6'),
('Aditya Tangirala', 'hi how r u', 'kldsjfkldjlkdsfj', 'asdf ghjk', '1', '0', '7'),
('asdf ghjk', 'MODULE ASSIGNMENT', 'you are allotted gtgv module of GREEN IT project.\n \n The module details are rgtvrt \n &nbsp;&nbsp;&nbsp;&nbsp;Try to complete it fast', 'ravi teja', '1', '1', '8'),
('Aditya Tangirala', 'hi', 'hello', 'SASTRY TVS', '1', '1', '9'),
('asdf ghjk', 'jnk', 'jnjm', 'Aditya Tangirala', '1', '1', '10'),
('asdf ghjk', '', 'asdada', 'Aditya Tangirala', '1', '1', '11'),
('Aditya Tangirala', 'dgdfvdkmgfdfklmkldfl', 'd', 'asdf ghjk', '1', '1', '12');

CREATE TABLE `login` (
   `uid` varchar(20) not null,
   `pswd` varchar(15) not null,
   `name` varchar(30) not null,
   `dsgn` varchar(30),
   `email` varchar(30) not null,
   PRIMARY KEY (`uid`),
   UNIQUE KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `login` (`uid`, `pswd`, `name`, `dsgn`, `email`) VALUES 
('aditya93', '1', 'Aditya Tangirala', 'divhead', 'aditya@gmail.com'),
('qwer', 'tyui', 'asdf ghjk', 'testeng', 'sann@gmail.com'),
('raj', '12', 'Aditya Tangirala', 'divhead', 'raj@gmail.com'),
('raviteja', 'password', 'ravi teja', 'testlead', 'ravirockz94@gmail.com'),
('sastry93', '123', 'SASTRY TVS', 'divhead', 'asda'),
('vinayak rao', '123456', 'vinayak rao', 'divhead', 'tetalisatish23@gmail.com');

CREATE TABLE `module_assgn` (
   `pname` varchar(25) not null,
   `tl_name` varchar(25) not null,
   `mname` varchar(10) not null,
   `mnum` varchar(5) not null,
   `assgn` varchar(20) not null,
   `mdet` varchar(200),
   `pmname` varchar(20) not null,
   PRIMARY KEY (`pmname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `module_assgn` (`pname`, `tl_name`, `mname`, `mnum`, `assgn`, `mdet`, `pmname`) VALUES 
('GREEN IT', 'ravi teja', 'gtgv', 'tgr5t', 'asdf ghjk', 'rgtvrt', 'GREEN ITgtgv'),
('GREEN IT', 'ravi teja', 'PVC', '2', 'asdf ghjk', 'Solar panels', 'GREEN ITPVC'),
('GREEN IT', 'ravi teja', 'Renewable ', '1', 'ravi teja', 'Wind energy', 'GREEN ITRenewable en');

CREATE TABLE `project` (
   `pid` int(11) not null auto_increment,
   `pname` varchar(30) not null,
   `cname` varchar(20) not null,
   `cdetails` varchar(100) not null,
   `pdesc` varchar(200) not null,
   `s_date` date not null,
   `d_date` date not null,
   `tl_name` varchar(40),
   `round` int(1) default '1',
   `status` varchar(10),
   PRIMARY KEY (`pid`),
   UNIQUE KEY (`pname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=4;

INSERT INTO `project` (`pid`, `pname`, `cname`, `cdetails`, `pdesc`, `s_date`, `d_date`, `tl_name`, `round`, `status`) VALUES 
('1', 'GREEN IT', 'pulla rao ', 'door no. 3-22,east fort,trivandrum', 'install solar power systems in akshay kendras', '2013-07-16', '2013-07-24', 'ravi teja', '2', 'Live'),
('2', 'ffevfreve', 'fevrfv', 'rfvrf', 'rfvr', '2013-07-17', '2013-07-25', 'ravi teja', '1', 'live'),
('3', 'djfkj', 'kdfkbkjdfbkj', 'bnkjdfkjbdskjbk', 'bknxjkfkjsjfvnkj', '2013-07-17', '2013-07-26', 'ravi teja', '1', 'live');

CREATE TABLE `report` (
   `sno` int(10) not null auto_increment,
   `pname` varchar(20) not null,
   `module` varchar(20) not null,
   `testcaseid` varchar(20),
   `mbs` varchar(200),
   `desce` varchar(200),
   `severity` varchar(20) not null,
   `remark` varchar(200) not null,
   `status` int(1),
   UNIQUE KEY (`sno`),
   UNIQUE KEY (`testcaseid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=3;

INSERT INTO `report` (`sno`, `pname`, `module`, `testcaseid`, `mbs`, `desce`, `severity`, `remark`, `status`) VALUES 
('1', 'GREEN IT', 'PVC', 'tid_1234', 'screen1', 'not visible', 'Medium', 'Passed', '1'),
('2', 'GREEN IT', 'PVC', 'tid_a12', 'ahgsdu', 'kjshdkjhkah', 'Medium', 'asdgh', '1');

CREATE TABLE `row_id` (
   `count` int(11) not null,
   PRIMARY KEY (`count`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- [Table `row_id` is empty]

CREATE TABLE `rpt_stts` (
   `testcaseid` varchar(20) not null,
   `status` int(1)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- [Table `rpt_stts` is empty]

CREATE TABLE `user_details` (
   `testcaseid` varchar(20) not null,
   `name` varchar(20) not null,
   `username` varchar(20) not null,
   `date_time` timestamp not null default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
   PRIMARY KEY (`testcaseid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `user_details` (`testcaseid`, `name`, `username`, `date_time`) VALUES 
('tid_1234', 'asdf ghjk', 'qwer', '2013-07-12 16:27:54'),
('tid_a12', 'asdf ghjk', 'qwer', '2013-07-12 17:08:23');