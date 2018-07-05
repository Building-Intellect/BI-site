/*
This script will drop and re-create the buildingintellect database with no dummy data in it. It does not create the views or stored procedures.
*/

DROP DATABASE IF EXISTS buildingintellect;
CREATE DATABASE buildingintellect;
USE buildingintellect;

CREATE TABLE clients
(
	ClientId				INT				PRIMARY KEY 		AUTO_INCREMENT,
    ClientName				VARCHAR(100)	UNIQUE				NOT NULL,
	URL						VARCHAR(250)	NULL,
    City					VARCHAR(250)	NULL,
    State					VARCHAR(250)	NULL,
	Description 			TEXT			NOT NULL,
    isDeleted				boolean         NOT NULL    DEFAULT 0
);

CREATE TABLE client_contacts
(
	ContactId				INT				PRIMARY KEY			AUTO_INCREMENT,
    ClientId			    INT				NOT NULL,
    ContactFirstName		VARCHAR(50)		NOT NULL,
    ContactLastName			VARCHAR(50)		NOT NULL,
    Title					VARCHAR(100)	NOT NULL,
    PhoneNumber				VARCHAR(12)		NOT NULL,
    EmailAddress			VARCHAR(100)	NOT NULL,
	CONSTRAINT Client_Contact_fk_ClientId
		FOREIGN KEY (ClientId)
        REFERENCES clients(ClientId)
);

CREATE TABLE user_types
(
	TypeId					INT				PRIMARY KEY			AUTO_INCREMENT,
    TypeName				VARCHAR(12)		UNIQUE				NOT NULL
);

CREATE TABLE users
(
	UserId					INT				PRIMARY KEY			AUTO_INCREMENT,
    FirstName				VARCHAR(50)		NOT NULL,
    LastName				VARCHAR(50)		NOT NULL,
	PhoneNumber				VARCHAR(20),
    EmailAddress			VARCHAR(100),
    UserName				VARCHAR(250)	NOT NULL			UNIQUE,
    UserPassword			VARCHAR(500)	NOT NULL,
    TypeId					INT				NOT NULL,
	CONSTRAINT User_fk_TypeId
		FOREIGN KEY (TypeId)
        REFERENCES user_types(TypeId)
);

CREATE TABLE change_log
(
	Change_LogId			INT 			PRIMARY KEY			AUTO_INCREMENT, 
    LogTime					TIMESTAMP		NOT NULL			
	DEFAULT CURRENT_TIMESTAMP  		ON UPDATE CURRENT_TIMESTAMP,
    UserId					INT				NOT NULL,
    Message					TEXT			NOT NULL,
	CONSTRAINT Change_Log_fk_UserId
		FOREIGN KEY (UserId)
        REFERENCES users(UserId)
);

SET NAMES 'utf8';

INSERT INTO user_types
(TypeId, TypeName)
VALUES
(1, 'Basic'),
(2, 'Admin');