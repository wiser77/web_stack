CREATE DATABASE food_ordering;

CREATE TABLE countries (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);

CREATE TABLE states (
    id INT AUTO_INCREMENT PRIMARY KEY,
    country_id INT,
    name VARCHAR(255) NOT NULL,
    FOREIGN KEY (country_id) REFERENCES countries(id)
);

INSERT INTO countries (name) VALUES ('India'), ('USA');

INSERT INTO states (country_id, name) VALUES 
(1, 'Tamil Nadu'), (1, 'Maharashtra'), 
(2, 'California'), (2, 'Texas');
