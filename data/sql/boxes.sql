DROP TABLE boxes;

CREATE TABLE IF NOT EXISTS boxes (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    user_id INT NOT NULL UNIQUE,
    characters_id INT UNIQUE,
    weapons_id INT UNIQUE,
    artifacts_id INT UNIQUE,
    sharing_permission INT DEFAULT 0 CHECK (sharing_permission BETWEEN 0 AND 1)
) DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;