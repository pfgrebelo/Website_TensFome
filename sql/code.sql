DROP TABLE IF EXISTS restaurants;
DROP TABLE IF EXISTS users;
DROP TABLE IF EXISTS usertypes;

CREATE TABLE usertypes(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255),
    visibility BIT DEFAULT 1
);

CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(255) UNIQUE,
    password VARCHAR(255),
    email VARCHAR(255),
    name VARCHAR(255),
    address VARCHAR(255),
    contact INT,
    last_login VARCHAR(255),
    photo VARCHAR(255),
    status VARCHAR(255),
    visibility BIT DEFAULT 1,
    usertype_id INT NOT NULL DEFAULT 2,

    FOREIGN KEY (usertype_id) REFERENCES usertypes(id)
);

CREATE TABLE restaurants (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255),
    type VARCHAR(255),
    photo VARCHAR(255),
    menu VARCHAR(255),
    visibility BIT DEFAULT 1
);

INSERT INTO usertypes(name)VALUES('admin'),('user');
INSERT INTO users(username,password,name,contact,usertype_id)VALUES
    ('admin',MD5('pass'),'Administrator',911222333,1),
    ('user',MD5('pass'),'User',961234455,2);
INSERT INTO restaurants(name,type)VALUES
    ('Salpoente','Português'),
    ('Il Libertino','Italiano'),
    ('Granturino','Steakhouse'),
    ('Green Point','Cozinha Internacional'),
    ('Bacalhau e Afins','Português'),
    ('Imperial','Português Tradicional');