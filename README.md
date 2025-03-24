# Form-UI
A Proficient demo form that allows registration,updating,viewing of users login.Can be used for an admin dashboard.Since its 



SQL to initiate db

CREATE DATABASE userdata;

USE userdata;

CREATE TABLE user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(50) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL
);



#Issues
Just a demo the password have not been hashed yet and some security issues with the id displaying plainly in the url.
