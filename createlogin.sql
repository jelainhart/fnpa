CREATE TABLE login(
                      email VARCHAR(200) NOT NULL,
                      pwd VARCHAR(200) NOT NULL,
                      PRIMARY KEY (email));

INSERT INTO login(email, pwd)
VALUE ('demo@demo.com', '$2y$10$7yMQ/KY5uHu1CwMBdptV5O12zpR9jJA4WcxAZxCT6zXIjyg8G4AWa');