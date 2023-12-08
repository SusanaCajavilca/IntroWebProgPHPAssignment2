CREATE table phpusers1(
                          user_id int not null primary key auto_increment,
                          first_name varchar (200),
                          last_name varchar (200),
                          email varchar (200),
                          username varchar (200),
                          password varchar (200)

);
CREATE table phprichpeople(
                          ID int not null primary key  auto_increment,
                          fullName varchar (100),
                          netWorth varchar (100),
                          age varchar (10),
                          country varchar (100),
                          company varchar (100)

);
INSERT into phprichpeople(fullName, netWorth, age, country,company)
VALUES
    ('Elon Musk', '$241.1 Billions', '52', 'South Africa', 'Tesla, SpaceX'),
    ('Bernard Arnault', '$190.8 Billions', '74', 'France', 'LVMH'),
    ('Jeff Bezos', '$169.0 Billions', '59', 'USA', 'Amazon'),
    ('Larry Ellison', '$146.3 Billions', '79', 'USA', 'Oracle'),
    ('Warren Buffet', '$121.0 Billions', '93', 'USA', 'Berkshire Hathaway'),
    ('Mark Zuckerberg', '$119.8 Billions', '39', 'USA', 'Facebook'),
    ('Bill Gates', '$241.1 Billions', '68', 'USA', 'Microsoft'),
    ('Larry Page', '$115.0 Billions', '50', 'USA', 'Google'),
    ('Steve Ballmer', '$112.5 Billions', '67', 'USA', 'Microsoft'),
    ('Sergey Brin', '$110.4 Billions', '50', 'USA', 'Google');