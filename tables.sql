-- database default name: generalsystem

-- comment/review system table and example content

CREATE TABLE comments (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Date DATETIME,
    Name VARCHAR(255),
    Content TEXT
);

INSERT INTO comments (Date, Name, Content) VALUES ('2024-01-04', 'Name1', 'Comment example.');
INSERT INTO comments (Date, Name, Content) VALUES ('2024-01-04', 'Name2', 'Comment example.');
INSERT INTO comments (Date, Name, Content) VALUES ('2024-01-04', 'Name3', 'Comment example.');
INSERT INTO comments (Date, Name, Content) VALUES ('2024-01-04', 'Name4', 'Comment example.');
INSERT INTO comments (Date, Name, Content) VALUES ('2024-01-04', 'Name5', 'Comment example.');
INSERT INTO comments (Date, Name, Content) VALUES ('2024-01-04', 'Name6', 'Comment example.');
INSERT INTO comments (Date, Name, Content) VALUES ('2024-01-04', 'Name7', 'Comment example.');
INSERT INTO comments (Date, Name, Content) VALUES ('2024-01-04', 'Name8', 'Comment example.');
INSERT INTO comments (Date, Name, Content) VALUES ('2024-01-04', 'Name9', 'Comment example.');
INSERT INTO comments (Date, Name, Content) VALUES ('2024-01-04', 'Name10', 'Comment example.');
INSERT INTO comments (Date, Name, Content) VALUES ('2024-01-04', 'Name11', 'Comment example.');
INSERT INTO comments (Date, Name, Content) VALUES ('2024-01-04', 'Name12', 'Comment example.');
INSERT INTO comments (Date, Name, Content) VALUES ('2024-01-04', 'Name13', 'Comment example.');
INSERT INTO comments (Date, Name, Content) VALUES ('2024-01-04', 'Name14', 'Comment example.');
INSERT INTO comments (Date, Name, Content) VALUES ('2024-01-04', 'Name15', 'Comment example.');



-- menu cart system table and example content

CREATE TABLE `product` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `product` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'Baranina Maly', 'smallmut', 'menuimage/kebab1.jpg', 21.00),
(2, 'Kurczak Maly', 'smallchi', 'menuimage/kebab2.jpg', 20.00),
(3, 'Mieszany Maly', 'smallmix', 'menuimage/kebab3.jpg', 22.00),
(4, 'Baranina Duzy', 'bigmut', 'menuimage/kebab1.jpg', 29.00),
(5, 'Kurczak Duzy', 'bigchi', 'menuimage/kebab2.jpg', 28.00),
(6, 'Mieszany Duzy', 'bigmix', 'menuimage/kebab3.jpg', 30.00),
(7, 'Americal Style', 'premium1', 'menuimage/kebab4.jpg', 34.00),
(8, 'Turkish Taste', 'premium2', 'menuimage/kebab5.jpg', 34.00);


-- login system table and example content

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL
);


INSERT INTO users (username, password) VALUES ('user1', 'password');
INSERT INTO users (username, password) VALUES ('user2', 'password');
INSERT INTO users (username, password) VALUES ('user3', 'password');
INSERT INTO users (username, password) VALUES ('user4', 'password');
INSERT INTO users (username, password) VALUES ('user5', 'password');
INSERT INTO users (username, password) VALUES ('user6', 'password');
INSERT INTO users (username, password) VALUES ('user7', 'password');
INSERT INTO users (username, password) VALUES ('user8', 'password');
INSERT INTO users (username, password) VALUES ('user9', 'password');
INSERT INTO users (username, password) VALUES ('user10', 'password');

