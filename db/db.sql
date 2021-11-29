--create DB employees-v2 and insert data

DROP DATABASE IF EXISTS employees_v2;
CREATE DATABASE IF NOT EXISTS employees_v2;

USE employees_v2;

CREATE TABLE employees (
    id INT UNSIGNED AUTO_INCREMENT,
    name VARCHAR(20) NOT NULL,
    lastName VARCHAR(50),
    email VARCHAR(100) NOT NULL,
    avatar TEXT,
    gender VARCHAR(10) NOT NULL DEFAULT "man",
    city VARCHAR(20),
    streetAddress INT,
    state VARCHAR(5),
    age INT NOT NULL,
    postalCode INT,
    phoneNumber INT NOT NULL,
    PRIMARY KEY(id)
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
        7383627627
    ),
    (
        "John",
        "Doe",
        "joo.com",
        34,
        "man",
        "New York",
        89,
        "WA",
        09889,
        1283645645
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
        9983632461
    ),
    (
        "Richard",
        "Desmond",
        "dismond@foo.com",
        30,
        "man",
        90,
        "Salt lake city",
        "UT",
        457320,
        90876987654
    ),
    (
        "Susan",
        "Smith",
        "susanmith@baz.com",
        28,
        "woman",
        43,
        "Louisville",
        "KNT",
        445321,
        224355488976
    ),
    (
        "Brad",
        "Simpson",
        "brad@foo.com",
        40,
        "man",
        128,
        "Atlanta",
        "GEO",
        394221,
        6854634522
    ),
    (
        "Neil",
        "Walker",
        "walkerneil@baz.com",
        42,
        "man",
        1,
        "Nashville",
        "TN",
        90143,
        45372788192
    );

INSERT INTO users (name, email, password)
VALUES ("admin", "mark.parellada@gmail.com", "$2y$10$8Jq.8i9/FUIJOUCmA8AUx.Rxrhwcq3YbwfEBmP8Tg9YtsTTn.kHAK");


