# Form-UI
A fully functional demo form enabling user registration, updates, and login viewing, ideal for integration into an admin dashboard.


SQL code to initiate db

CREATE DATABASE userdata;

USE userdata;

CREATE TABLE user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(50) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL
);



#Issues
It's just a demo; the password hasn't been hashed yet, and there are some security concerns, such as the ID being exposed in the URL.
