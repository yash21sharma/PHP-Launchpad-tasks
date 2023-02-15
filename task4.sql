CREATE TABLE `existing_user` (
  `S_no` int,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255),
  `Phone_no` int UNIQUE,
  `ID` int PRIMARY KEY,
  `Invite_code` timestamp UNIQUE,
  `invite_link` timestamp UNIQUE
);

CREATE TABLE `signup` (
  `S_no` int,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255),
  `Phone_no` int UNIQUE,
  `invite_code` timestamp
);

CREATE TABLE `admin` (
  `S_no` int,
  `User_name` varchar(255),
  `Invited_user` varchar(255),
  `Invite_code` int,
  `Invite_link` varchar(255)
);

ALTER TABLE `existing_user` ADD FOREIGN KEY (`Name`) REFERENCES `admin` (`Invited_user`);

ALTER TABLE `existing_user` ADD FOREIGN KEY (`Invite_code`) REFERENCES `admin` (`Invite_code`);

ALTER TABLE `existing_user` ADD FOREIGN KEY (`invite_link`) REFERENCES `admin` (`Invite_link`);

ALTER TABLE `signup` ADD FOREIGN KEY (`Name`) REFERENCES `admin` (`User_name`);
