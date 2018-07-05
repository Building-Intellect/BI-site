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

INSERT INTO users(
	UserId, 
    FirstName,
    LastName, 
    PhoneNumber, 
    EmailAddress, 
    UserName, 
    UserPassword, 
    TypeId
) VALUES
(1, "Steven", "Balo", "206-111-1111", "steven@balo.com", "steba", "steba", 2),
(2, "Alfred", "Sterling", "206-111-1111", "casey@casey.com", "casri", "casri", 1),
(3, "Alexis", "Vonnegut", "206-111-1111", "aiman@aiman.com", "aimma", "aimma", 1),
(4, "Brian", "Asimov", "206-111-1111", "chris@chris.com", "chrme", "chrme", 1 ),
(5, "Bridgette", "Bradbury", "206-111-1111", "bob@bob.com", "robmc", "robmc", 1),
(6, "Carl", "Lovelace", "206-111-1111", "jeremy@jeremy.com", "jerdu", "jerdu", 1),
(7, "Chloe", "Gibson", "206-111-1111", "nathan@nathan.com", "natfl", "natfl", 1),
(8, "Dave", "Turing", "206-111-1111", "sai@sai.com", "saich", "siach", 1 ),
(9, "Donna", "Kennedy", "206-111-1111", "mario@mario.com", "marro", "marro", 1),
(10, "Kellan", "Nealy", "206-111-1111", "kellann@buildingintellect.com", "kellan", "kellan", 2),
(11, "Randy", "Polajzar", "206-111-1111", "randyp@buildingintellect.com", "randy", "randy", 2),
(12, "Ethel", "Washington", "206-111-1111", "tim@tim.com", "timda", "timda", 1),
(13, "Frank", "Franklin", "206-111-1111", "joe@joe.com", "joemc", "joems", 1),
(14, "Flo", "Van Buren", "206-111-1111", "austin@austin.com", "ausam", "ausam", 1);