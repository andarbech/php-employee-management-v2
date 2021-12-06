DROP DATABASE IF EXISTS employees_v2;
CREATE DATABASE IF NOT EXISTS employees_v2;

USE employees_v2;

CREATE TABLE employees (
    id INT UNSIGNED AUTO_INCREMENT,
    PRIMARY KEY(id),
    name VARCHAR(20) NOT NULL,
    lastName VARCHAR(50),
    email VARCHAR(100) NOT NULL,
    age INT NOT NULL,
    gender VARCHAR(10) NOT NULL DEFAULT "man",
    city VARCHAR(20),
    streetAddress INT,
    state VARCHAR(5),
    postalCode INT,
    phoneNumber VARCHAR(20)
);

CREATE TABLE users (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    name VARCHAR(20) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL
);

--insert data

INSERT INTO employees (name, lastName, email, age, gender, city, streetAddress, state, postalCode, phoneNumber) 
VALUES (   
        "Rack",
        "Lei",
        "jackon@network.com",
        24,
        "man",
        "San Jone",
        126,
        "CA",
        394221,
        "7383627627"
    ),
    (
        "Leila",
        "Mills",
        "mills@leila.com",
        29,
        "woman",
        "San Diego",
        55,
        "CA",
        098765,
        "9983632461"
    ),
    (
        "Richard",
        "Desmond",
        "dismond@foo.com",
        30,
        "man",
        "Salt",
        90,
        "UT",
        457320,
        "90876987654"
    ),
    (
        "Susan",
        "Smith",
        "susanmith@baz.com",
        28,
        "woman",
        "Louisville",
        43,
        "KNT",
        445321,
        "224355488976"
    ),
    (
        "Brad",
        "Simpson",
        "brad@foo.com",
        40,
        "man",
        "Atlanta",
        128,
        "GEO",
        394221,
        "6854634522"
    ),
    (
        "Neil",
        "Walker",
        "walkerneil@baz.com",
        42,
        "man",
        "Nashville",
        1,
        "TN",
        90143,
        "45372788192"
    );

INSERT INTO users (name, email, password)
VALUES ("admin", "mark.parellada@gmail.com", "contrasenya");