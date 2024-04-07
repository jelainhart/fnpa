-- Friendly Neighborhood Pet App
-- Milestone 2 due 03.25.23
-- Team: Esha Khator (kaq8eg), Rachel Ney-Grimm (ran5tcw), Jackie Lainhart (nyt8te)

-- PART 1 Create tables
CREATE TABLE  IF NOT EXISTS login(
                      email VARCHAR(200) NOT NULL,
                      pwd VARCHAR(200) NOT NULL,
                      PRIMARY KEY (email));
					  
CREATE TABLE IF NOT EXISTS Animal(
animal_id INT AUTO_INCREMENT, 
nickname VARCHAR(32) NOT NULL, 
species VARCHAR(32) NOT NULL,  
breed VARCHAR(32), 
fur_color VARCHAR(32),
fur_patten VARCHAR(32), 
eye_color VARCHAR(32) NOT NULL, 
pet_size VARCHAR(32) NOT NULL,
additional_description VARCHAR(255),
PRIMARY KEY (animal_id));

CREATE TABLE IF NOT EXISTS Pets(
animal_id INT NOT NULL, 
nickname VARCHAR(30) NOT NULL, 
FOREIGN KEY (animal_id) REFERENCES Animal(animal_id), 
PRIMARY KEY (animal_id));

CREATE TABLE IF NOT EXISTS Lost_animal(
animal_id INT NOT NULL, 
pet_condition VARCHAR(255) NOT NULL,
FOREIGN KEY (animal_id) REFERENCES Animal(animal_id),
PRIMARY KEY(animal_id));

CREATE TABLE IF NOT EXISTS Stray(
animal_id INT NOT NULL,
zip_code INT(5) NOT NULL,
sociability VARCHAR(32),
FOREIGN KEY (animal_id)  REFERENCES Animal(animal_id),
PRIMARY KEY(animal_id));

CREATE TABLE IF NOT EXISTS Household(
household_id INT AUTO_INCREMENT, 
household_name VARCHAR(32), 
street_number INT, 
city VARCHAR(32), 
street_name VARCHAR(32), 
zip_code INT(5),
PRIMARY KEY (household_id));

CREATE TABLE IF NOT EXISTS People(
person_id INT AUTO_INCREMENT, 
first_name VARCHAR(32) NOT NULL,
last_name VARCHAR(32)  NOT NULL,
primary_phone_number INT(10)  NOT NULL,
email_address VARCHAR(32)  NOT NULL,
PRIMARY KEY(person_id));

CREATE TABLE IF NOT EXISTS Reports(
report_id INT AUTO_INCREMENT, 
person_id INT NOT NULL, 
animal_id INT NOT NULL,
date DATETIME NOT NULL,
description VARCHAR(255),
PRIMARY KEY(report_id),
FOREIGN KEY (animal_id)  REFERENCES Animal(animal_id),
FOREIGN KEY (person_id) REFERENCES People(person_id));

CREATE TABLE IF NOT EXISTS Found_reports(
report_id INT NOT NULL, 
street_name VARCHAR(32) NOT NULL, 
zip_code INT(5) NOT NULL, 
city VARCHAR(32) NOT NULL,
FOREIGN KEY (report_id) REFERENCES Reports(report_id),
PRIMARY KEY (report_id));

CREATE TABLE IF NOT EXISTS Lost_reports(
report_id INT NOT NULL,
monetary_rewards DECIMAL(6,2),
FOREIGN KEY (report_id) REFERENCES Reports(report_id),
PRIMARY KEY (report_id));

CREATE TABLE IF NOT EXISTS Comments(
comment_id INT AUTO_INCREMENT,
text VARCHAR(255),
date DATETIME,
report_id INT NOT NULL,
person_id INT NOT NULL,
FOREIGN KEY (report_id) REFERENCES Reports(report_id),
FOREIGN KEY (person_id) REFERENCES People(person_id),
PRIMARY KEY(comment_id));

CREATE TABLE IF NOT EXISTS Owns(
animal_id INT NOT NULL,
household_id INT NOT NULL,
FOREIGN KEY (animal_id)  REFERENCES Animal(animal_id),
FOREIGN KEY (household_id)  REFERENCES Household(household_id),
PRIMARY KEY(animal_id));

CREATE TABLE IF NOT EXISTS Is_part_of(
person_id INT NOT NULL,
household_id INT NOT NULL,
FOREIGN KEY (person_id) REFERENCES People(person_id),
FOREIGN KEY (household_id)  REFERENCES Household(household_id),
PRIMARY KEY (person_id));

CREATE TABLE IF NOT EXISTS Pet_sightings(
report_id INT NOT NULL,
animal_id INT NOT NULL,
FOREIGN KEY (report_id) REFERENCES Reports(report_id),
FOREIGN KEY (animal_id) REFERENCES Animal(animal_id),
PRIMARY KEY(report_id));

-- Insert data to the tables as if the site has been in use for a month
INSERT INTO Animal (species, breed, fur_color, fur_pattern, eye_color, pet_size, additional_description) VALUES
('Dog', 'Cocker Spaniel', 'Medium Brown', 'Patches', 'Brown', 'Medium', 'He always having the zoomies and likes to wiggle out of his harness'),
('Dog', 'Poodle', 'Black', 'Solid Color', 'Black', 'Large', 'They were chilling by the playground. No collar.'),
('Cat', 'Ragdoll', 'Light Gray', 'Striped', 'Yellow', 'Small', 'He loves salmon'),
('Cat', 'Persian', 'White', 'Solid Color', 'Red', 'Medium', 'She is a princess, likes to watch TV and nap'),
('Dog', 'Dachshund', 'Medium Brown', 'Bi-color', 'Brown', 'Small', 'He was raised in a hotel'),
('Cat', 'Siamese', 'Cream', 'Color Point', 'Blue', 'Small', 'A gentle sweetheart whose owners set her loose after moving away years ago'),
('Cat', 'Unknown', 'Orange', 'Striped', 'Green', 'Small', 'He lives in the woods behind our neighborhood, stares at people but will not accept treats.'),
('Cat', 'Munchkin', 'Medium Brown', 'Tabby', 'Green', 'Very Small', 'The most precious babiest baby ever, he is everything'),
('Dog', 'Labrador Retriever', 'Cream', 'Solid Color', 'Gray', 'Large', 'Good girl'),
('Dog', 'Unknown', 'White', 'Spotted', 'Black', 'Medium', 'She seemed to be taking herself on a walk to the park?'),
('Cat', 'Cornish Rex', 'Light brown', 'Tortoiseshell', 'Heterochromia', 'Very Small', '4 months old! She is the cutest kitten in the world!'),
('Cat', 'Japanese Bobtail', 'White', 'Calico', 'Brown', 'Very Small', 'Cat'),
('Cat', 'Tonkinese', 'Cream', 'Color Point', 'Blue', 'Small', 'My little rescue baby <3'),
('Cat', 'Oriental Bicolor', 'Black', 'Bi-color', 'Yellow', 'Small', 'Vindictive'),
('Cat', 'Maine Coon', 'Orange', 'Striped', 'Green', 'Small', 'He is very sweet and very stupid'),
('Cat', 'American Shorthair', 'Black', 'Solid Color', 'Green', 'Small', 'Found hiding under my porch. Couldn''t get a good look.'),
('Cat', 'Bengal', 'Medium Brown', 'Tabby', 'Brown', 'Medium', 'Very pretty, but seems to think he is a jungle cat. Will attack if bored.'),
('Cat', 'British Shorthair', 'Dark Gray', 'Solid Color', 'Yellow', 'Very Small', 'Looks very underfed, possibly a kitten :('),
('Cat', 'Snowshoe', 'Black', 'Solid Color', 'Green', 'Small', 'I found him in the alley behind my building and brought him in to live with me'),
('Cat', 'Sokoke', 'Light Gray', 'Solid Color', 'Orange', 'Small', 'His name is Rhett but will only respond to "Gooey".'),
('Cat', 'Toyger', 'Black', 'Spotted', 'Yellow', 'Very Small', 'She kind of looks like an owl. She hates being bothered, is very very smart'),
('Cat', 'Turkish Angora', 'Orange', 'Tortoiseshell', 'Green', 'Very Small', 'Enjoys peeing on the bed. No medical problems, just jumps on my bed, and squats while staring straight at me.'),
('Cat', 'Turkish Van', 'Dark Gray', 'Calico', 'Yellow', 'Small', 'giant blorf of a cat. He is very soft (attitude and feel), quite fat'),
('Cat', 'Cheetoh', 'Black', 'Color Point', 'Green', 'Small', 'He will also meow to be put into the airing cupboard above the hot water tank,'),
('Cat', 'Colorpoint Shorthair', 'Light Gray', 'Bi-color', 'Orange', 'Very Small', 'she used to be very hostile but now, for the most part, is very friendly and she loves people'),
('Cat', 'Cornish Rex', 'Black', 'Tabby', 'Yellow', 'Small', 'Poppy is a weird cat, she’s either really nice or very hyperactive and a bit aggressive.'),
('Cat', 'Cymric, or Manx Longhair', 'White', 'Color Point', 'Blue', 'Small', 'He''s a mama''s boy who cries a lot'),
('Cat', 'Cyprus', 'Cream', 'Striped', 'Blue', 'Small', 'He’s like socially awkward even by cat standards so he just sits and stares off into the distance'),
('Cat', 'Sphynx', 'None', 'Solid Color', 'Gray', 'Very Small', 'Cat, stone cold killer.'),
('Cat', 'Domestic Shorthair', 'Gray', 'Tuxedo', 'Yellow', 'Medium', 'A certified yapper, thick queen'),
('Cat', 'Domestic Shorthair', 'Gray', 'Tabby', 'Green', 'Medium', 'Shy around humans he doesn''t know, will probably run away'),
('Cat', 'Domestic Shorthair', 'Gray', 'Tabby', 'Yellow', 'Medium', 'Super friendly, likes to come up to people and asks to be petted');

INSERT INTO Pets(animal_id, nickname)
VALUES
(1, 'Cookie'),
(3, 'Earl'),
(4, 'Mittens'),
(5, 'Hundley'),
(8, 'Shnookums'),
(9, 'Tuesday'),
(11, 'Bagel'),
(12, 'Rover'),
(13, 'Boots'),
(14, 'Da Baby'),
(15, 'Bonk'),
(19, 'Cat'),
(20, 'Goey'),
(21, 'Whiskey'),
(22, 'Lucky'),
(23, 'Joey'),
(24, 'Tim'),
(25, 'Tiger'),
(26, 'Poppy'),
(27, 'Chantilly'),
(28, 'Squishy'),
(29, 'Tuna'),
(30, 'Fluffy'),
(31, 'Cookie'),
(32, 'Biscuit');

INSERT INTO Lost_animal(animal_id,  pet_condition)
VALUES
(2, 'Sick'),
(10, 'Healthy'),
(16, 'Unknown'),
(18, 'Malnourished');

INSERT INTO Stray(animal_id, nickname, zip_code, sociability)
VALUES
(6, 'Mitzi', 22206, 'Friendly'),
(7, 'Firestar', 22030, 'Temperamental'),
(17, 'Pikachu', 22901, 'Aggressive');

INSERT INTO Household(household_id, household_name, street_number, city, street_name, zip_code)
VALUES
(1, 'Patels', 13227, 'Ashburn', 'Oak St.', 21042),
(2, 'Shas', 92, 'Centreville', 'First Valley Way', 20102),
(3, 'Hanes', 401, 'Chantilly', 'Bluebriar Rd.', 22330),
(4, 'Diamonds', 313, 'Charlottesville', '5th St SW', 22902),
(5, 'Dritan', 1109, 'Charlottesville', 'St. Clair Avenue', 22901),
(6, 'House A', 1312, 'Dungannon', 'Sweetspice Street', 24245),
(7, 'Seydoux', 1482, 'Virginia Beach', 'Tates Creek Road', 23451),
(8, 'Ramp', 304, 'The Plains', 'Swenson Court', 1002),
(9, 'Yuan', 7202, 'Amherst', '10th Street East', 1059),
(10, 'Gáspár', 4199, 'Bridgewater', 'Clinton Avenue', 22030),
(11, 'Najib', 442, 'Eastville', 'Canterbury Road', 22192),
(12, 'Nam', 203, 'Centreville', 'Merryweather St.', 20102);

INSERT INTO People(person_id, first_name, last_name, primary_phone_number, email_address)
VALUES
(1, 'Shailey', 'Patel', '7034566650', 'howdyyall244@gmail.com'),
(2, 'Aditya', 'Sha', '5717643876', 'purr234@gmail.com'),
(3, 'Sonya', 'Sha', '5711768493', 'sonyas@gmail.com'),
(4, 'Riya', 'Sha', '5717646789', 'sira1@verizon.net'),
(5, 'Abigail', 'Hane', '5043457689', 'haneabby@yahoo.com'),
(6, 'Lily', 'Hane', '5043457894', 'hanelily@yahoo.com'),
(7, 'Joseph', 'Hane', '5045948695', 'wow@gmail.com'),
(8, 'Hazel', 'Hane', '5048563458', 'coolbeans@hotmail.com'),
(9, 'Elanor', 'Diamond', '5035845864', 'random@gmail.com'),
(10, 'Kristofor', 'Dritan', '4342188489', 'f365e476ftdqv@gmail.com'),
(11, 'Jessica', 'Ferguson', '5714567671', 'jessiiica@gmail.com'),
(12, 'Paul', 'Ferguson', '5715567893', 'pfg782@gmail.com'),
(13, 'Leto', 'Ferguson', '5714957670', 'goduke365@yahoo.com'),
(14, 'Léa', 'Seydoux', '7573110777', 'lseydoux@yahoo.com'),
(15, 'Charlotte', 'Rampling', '7036282779', 'CharlieRamp@gmail.com'),
(16, 'Roger', 'Yuan', '8044587808', 'r.yuan@yahoo.com'),
(17, 'Imola', 'Gáspár', '7579349022', 'imolala9@gmail.com'),
(18, 'Hassan', 'Najib', '7572903582', 'hassan.n87@gmail.com'),
(19, 'Mya', 'Nam', '7038765678', 'sparklez213@gmail.com');


INSERT INTO Reports(report_id, date, description, animal_id, person_id)
VALUES
(1, '2024-01-14', 'Saw a string bean of a cat waltz across my yard', 2, 11),
(2, '2024-01-20', 'I LOST MY PRECIOUS BABY HE LEFT ME', 21, 16),
(3, '2024-03-02', 'He didn''t come home for supper. Please email me if you''ve seen this fella. I''m embarrassed I managed to lose a beloved.', 1, 3),
(4, '2024-02-25', 'This cat keeps lying on my porch furniture', 10, 17),
(5, '2024-02-29', 'Love seeing this cat around on my morning walks.', 6, 9),
(6, '2024-03-01', 'Drove by and saw this black cat with a collar I have never seen before', 16, 12),
(7, '2024-03-01', 'This poor baby was so skinny when I found them. They must have been lost for a while, has a collar on.', 18, 13),
(8, '2024-03-10', 'This cat who is always around only sometimes bites me', 7, 10),
(9, '2024-03-14', 'I always see this cat around the neighborhood. He bit me twice.', 17, 10);

INSERT INTO Found_reports(report_id, street_name, zip_code, city)
VALUES
(1, 'Huntington', 22206, 'Arlington'),
(4, 'Middle Ridge Dr', 22030, 'Bridgewater'),
(6, 'Old Brook Rd', 22901, 'Charlottesville'),
(7, 'Cobble St', 22902, 'Charlottesville');

INSERT INTO Lost_reports(report_id, monetary_rewards)
VALUES
(2, 500.00),
(3, 50.00);

INSERT INTO Comments(comment_id, report_id, person_id, text, date)
VALUES
(1, 1, 9, 'hey i think is my cat', '2024-01-18'),
(2, 2, 5, 'I''ll keep my eyes peeled', '2024-01-20'),
(3, 7, 10, 'omg poor thing!', '2024-03-02');

INSERT INTO Owns(animal_id, household_id)
VALUES
(1, 2),
(4, 2),
(3, 3),
(5, 3),
(9, 3),
(8, 4),
(11, 6),
(12, 5),
(13, 7),
(14, 7),
(15, 8),
(19, 8),
(20, 8),
(21, 8),
(22, 8),
(23, 8),
(24, 9),
(25, 10),
(26, 10),
(27, 11),
(28, 11),
(29, 11),
(30, 12),
(31, 12),
(32, 12);

INSERT INTO Is_part_of(person_id, household_id)
VALUES
(1, 1),
(2, 2),
(3, 2),
(4, 2),
(5, 3),
(6, 3),
(7, 3),
(8, 3),
(9, 4),
(10, 5),
(11, 6),
(12, 6),
(13, 6),
(14, 7),
(15, 8),
(16, 9),
(17, 10),
(18, 11);

INSERT INTO Pet_sightings(report_id, animal_id)
VALUES
(1, 2),
(2, 21),
(3, 1),
(4, 10),
(5, 6),
(6, 16),
(7, 18),
(8, 7),
(9, 17);

-- Show descriptions of the tables
DESC Animal;
SELECT COUNT(*) FROM Animal;

DESC Comments;
SELECT COUNT(*) FROM Comments;

DESC Found_reports;
SELECT COUNT(*) FROM Found_reports;

DESC Household;
SELECT COUNT(*) FROM Household;

DESC Is_part_of;
SELECT COUNT(*) FROM Is_part_of;

DESC Lost_animal;
SELECT COUNT(*) FROM Lost_animal;

DESC Lost_reports;
SELECT COUNT(*) FROM Lost_reports;

DESC Owns;
SELECT COUNT(*) FROM Owns;

DESC People;
SELECT COUNT(*) FROM People;

DESC Pets;
SELECT COUNT(*) FROM Pets;

DESC Pet_sightings;
SELECT COUNT(*) FROM Pet_sightings;

DESC Reports;
SELECT COUNT(*) FROM Reports;

DESC Stray;
SELECT COUNT(*) FROM Stray;

-- Basic SQL commands for the logic of our app
-- When signing up for our site, a person can register their own informat and they will be added to the People’s table (insert statements shown above) and can update their information if it changes.
UPDATE People SET primary_phone = '7035865445' WHERE person_id = 4;

--When a person registers their household, they can add people (insert statements shown above) and remove people or update the Is Part Of table in the event that someone moves to a different household. 
DELETE FROM Is_part_of WHERE person_id = 3;
UPDATE Is_part_of SET household_id = 7 WHERE person_id = 13;

--A person can insert (seen above) or delete or update rows in the Owns table in the case of registering a new pet with their household, a pet dying, or a pet being given away to a different household.
DELETE FROM Owns WHERE animal_id = 14;
UPDATE Owns SET household_id = 9 WHERE animal_id = 23;

--A user updating the attributes of their animal, for example, as it grows its pet_size or eye color might change
UPDATE Animal
SET eye_color=Green, pet_size=Small, additional_description= 'he is an old man cat now'
WHERE animal_id = 13;

--A user can retrieve all pet sighting reports so users can browse these to look for theirs.
SELECT * FROM Reports JOIN Found_reports JOIN pet_sightings JOIN Animal JOIN Lost_animal;

--Retrieve all pet sighting reports that concern animals with certain characteristics. These will be variables the user indicates through select boxes on the front end. So it can be about the animal’s species, breed, fur_color, fur_pattern, eye_color, pet_size, or location. This is an example of one such query.
SELECT * 
FROM Reports JOIN Found_reports JOIN pet_sightings JOIN Animal JOIN Lost_animal
WHERE species= 'cat' AND fur_color= 'Black' AND pet_size= 'Very Small';

--If an animal dies the user can delete their animal from the site.
DELETE FROM Animal WHERE animal_id = 13;

--When a lost pet is found and retrieved by the owner, the lost report created by the owner can be deleted.
DELETE FROM Comments WHERE report_id IN (
SELECT report_id FROM Reports 
WHERE animal_id = 27);
DELETE FROM Reports WHERE animal_id = 27;

--Advanced SQL
-- A check to see if zip codes entered are within the 20000s because the scope of our project is just Virginia cities. 20040-24658

ALTER TABLE household
ADD CONSTRAINT check_zip_code
CHECK(zip_code >= 20040 AND zip_code <= 24658);

ALTER TABLE Found_reports
ADD CONSTRAINT check_zip_code
CHECK(zip_code >= 20040 AND zip_code <= 24658);

ALTER TABLE Stray
ADD CONSTRAINT check_zip_code
CHECK(zip_code >= 20040 AND zip_code <= 24658);

-- A stored procedure to get all the pets from a household
DELIMITER $$
CREATE PROCEDURE getHouseholdPets()
BEGIN
	SELECT household_name, nickname 
FROM Household NATURAL JOIN Owns NATURAL JOIN Pets;
END$$
DELIMITER ;
CALL getHouseholdPets();
