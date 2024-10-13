CREATE Database mvcdata;

USE mvcdata;

CREATE TABLE books (
  id int NOT NULL,
  name varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  author varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  title text COLLATE utf8mb4_general_ci NOT NULL,
  photo varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  genre varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO books (name, author, title, photo, genre) VALUES
('Qunduz amakining ertaklari', 'Ferdenant Magellan', 'Uch cho&#039;chqa va bo&#039;ri haqidagi ertak', '2024-10-13_14-01-43_. Облака', 'Ertak'),
('Lovya poyasi', 'Ferdenant Magellan', 'Devlar va jek oltin tuxum qo&#039;yadigan tovuqni talashadi', '2024-10-13_14-51-48_. Самолеты', 'Hikoya');
