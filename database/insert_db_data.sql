USE buildingintellect;

INSERT INTO clients(
	ClientId, 
    ClientName,
    URL,
    City, 
    State,  
    Description
)VALUES
(1, "Microsoft", "http://www.microsoft.com", "Redmond", "WA" , "Microsoft description goes here. Are Statement and Description fields necessary?"),
(2, "Facebook", "http://www.facebook.com", "Seattle", "WA", "Facebook description goes here. Are Statement and Description fields necessary?"),
(3, "Twitter", "http://www.twitter.com", "Bellevue", "WA","Twitter description goes here. Are Statement and Description fields necessary?"),
(4, "Adobe", "http://www.adobe.com", "Seattle", "WA","Adobe description goes here. Are Statement and Description fields necessary?"),
(5, "Consulto Services", "http://www.consulto.com", "Bothell", "WA", "Consulto description goes here. Are Statement and Description fields necessary?"),
(6, "Google", "http://www.google.com", "Seattle", "WA",  "Google description goes here. Are Statement and Description fields necessary?"),
(7, "Contoso", "http://www.contosocorp.com", "Auburn", "WA",  "Contoso description goes here. Are Statement and Description fields necessary?"),
(8, "Expeditors", "http://www.expeditors.com", "Seattle", "WA",  "Exeditors description goes here. Are Statement and Description fields necessary?"),
(9, "Oculus VR", "http://www.oculusvr.com", "Redmond", "WA",  "Oculus description goes here. Are Statement and Description fields necessary?"),
(10, "AT&T", "http://www.att.com", "Seattle", "WA",  "AT&T description goes here. Are Statement and Description fields necessary?");

INSERT INTO client_contacts(
	ContactId, 
    ClientId, 
    ContactFirstName, 
    ContactLastName, 
    Title, 
    PhoneNumber, 
    EmailAddress
) VALUES
( 1, 1, "Jane", "Doe", "Recruitment Director", "425-111-1111", "janedoe@microsoft.com"),
( 2, 2, "John", "Poe", "Sr Engineer", "425-111-1111", "johnpoe@facebook.com"),
( 3, 3, "Kim", "Cotrill", "Project Manager", "425-111-1111", "kimc@twitter.com"),
( 4, 4, "Ken", "LeBlond", "Talent Coordinator", "425-111-1111", "kenleb@adobe.com"),
( 5, 5, "Bill", "Ball", "HR Director", "425-111-1111", "bball@consulto.com"),
( 6, 6, "Barb", "James", "Sr SDET", "425-111-1111", "barbarajames@google.com"),
( 7, 7, "Archie", "Fjord", "QA Manager", "425-111-1111", "arfjor@contoso.com"),
( 8, 8, "Anna", "Warren", "Talent Director", "425-111-1111", "annwar@expeditors.com"),
( 9, 9, "Zed", "Van Buren", "Recruitment Coordinator", "425-111-1111", "zvb@oculusvr.com"),
( 10, 10, "Zoe", "Pitt", "Principal Engineer", "425-111-1111", "pizo@att.com");
