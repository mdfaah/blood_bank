
CREATE TABLE `donner` (
  `id` int(10) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `religion` varchar(50) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `dateofbirth` date DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `confirm_password` varchar(50) NOT NULL,
  `bloodgroup` varchar(50) NOT NULL,
  `last_donate_date` date DEFAULT NULL,
  `house_no` varchar(10) DEFAULT NULL,
  `road_no` varchar(50) DEFAULT NULL,
  `word_no` varchar(10) DEFAULT NULL,
  `area_name` varchar(10) DEFAULT NULL,
  `thana` varchar(10) DEFAULT NULL,
  `post_code` varchar(10) DEFAULT NULL,
  `district` varchar(50) DEFAULT NULL,
  `division` varchar(10) DEFAULT NULL,
  `type` varchar(10) NOT NULL,
   PRIMARY KEY (id);
) 


CREATE TABLE `donner_phone` (
  `phone` int(20) NOT NULL,
  `id` int(10) NOT NULL
   PRIMARY KEY (phone,id), 

   FOREIGN KEY (id) REFERENCES Donner(id) 
) 


CREATE TABLE `h_phone` (
  `phone` int(20) NOT NULL,
  `h_id` int(50) DEFAULT NULL
   PRIMARY KEY (phone,h_id),
     FOREIGN KEY (h_id) REFERENCES orders(h_id)
) 

CREATE TABLE `orders` (
  `h_id` int(10) NOT NULL,
  `h_name` varchar(50) NOT NULL,
  `amount` int(10) DEFAULT NULL,
  `lastdate` date NOT NULL,
  `type` varchar(10) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL
    PRIMARY KEY (h_id)
) 

CREATE TABLE `staff` (
  `s_id` int(10) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `job_category` varchar(50) DEFAULT NULL,
  `job_title` varchar(50) DEFAULT NULL,
  `qualification` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `dateofbirth` date DEFAULT NULL,
  `house_no` varchar(10) DEFAULT NULL,
  `road_no` varchar(50) DEFAULT NULL,
  `word_no` varchar(10) DEFAULT NULL,
  `area_name` varchar(10) DEFAULT NULL,
  `thana` varchar(10) DEFAULT NULL,
  `post_code` varchar(10) DEFAULT NULL,
  `district` varchar(50) DEFAULT NULL,
  `division` varchar(10) DEFAULT NULL,
  PRIMARY KEY (s_id)
) 


CREATE TABLE `staff_phone` (
  `phone` varchar(20) NOT NULL,
  `s_id` int(10) NOT NULL
  PRIMARY KEY (phone,s_id),
     FOREIGN KEY (s_id) REFERENCES Staff(s_id)
) 

