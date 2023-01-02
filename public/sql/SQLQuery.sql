-- Create database
CREATE DATABASE StudentFinalProjectManagementSystem;

-- Create admin authentication table
CREATE TABLE Admin 
(
    AdminID INT NOT NULL AUTO_INCREMENT,
    Email VARCHAR(50) NOT NULL,
    Password VARCHAR(50) NOT NULL,

    PRIMARY KEY (AdminID)
);

CREATE TABLE Student 
(
    StudentID INT NOT NULL AUTO_INCREMENT,
    Name VARCHAR(250) NOT NULL,
    NIM VARCHAR(50) NOT NULL,
    Program VARCHAR(50) NOT NULL,
    Topic VARCHAR(250) NOT NULL,    
    Status VARCHAR(20) NOT NULL,
    Supervisor VARCHAR(250) NOT NULL,
    Date DATE NOT NULL,

    PRIMARY KEY (StudentID)
);

-- Insert admin account
INSERT INTO Admin (Email, Password) VALUES ('admin@ukim.ac.id', 'admin1908');
INSERT INTO Admin (Email, Password) VALUES ('filkom@ukim.ac.id', 'filkom1908');

INSERT INTO Student (Name, NIM, Program, Topic, Status, Supervisor, Date) VALUES
(
    'Billy Franscois',
    '12155201200012',
    'Computer Science',
    'Web Application with Cool framework',
    'Approved',
    'Hanny Tuhuteru',
    '2022-04-22'
);

-- Update MD5 password
Update Admin SET Password = MD5(Password);

-- Delete column
ALTER TABLE Admin DROP Email, DROP Password;

-- Display admin account
SELECT * FROM StudentFinalProjectManagementSystem.Admin;