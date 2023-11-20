SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE mahasiswa(
    nim INT(15) NOT NULL,
    nama VARCHAR (30) NOT NULL,
    prodi VARCHAR(30) NOT NULL,
    anime_favorit VARCHAR(30) NOT NULL,
    waifu VARCHAR(20) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE mahasiswa
ADD PRIMARY KEY(nim);
COMMIT;