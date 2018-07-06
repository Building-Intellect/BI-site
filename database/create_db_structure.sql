/*
This script will drop and re-create the buildingintellect database with no dummy data in it. It does not create the views or stored procedures.
*/
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

SET NAMES 'utf8';
