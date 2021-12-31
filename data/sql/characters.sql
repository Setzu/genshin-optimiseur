DROP TABLE characters;

CREATE TABLE IF NOT EXISTS characters (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    user_id INT NOT NULL,
    character_id INT NOT NULL,
    owned INT(1) NOT NULL DEFAULT 0 CHECK (owned BETWEEN 0 AND 1),
    constellations INT(1) NOT NULL DEFAULT 0 CHECK (constellations BETWEEN 0 AND 6),
    CONSTRAINT UNIQUE (user_id, character_id)
) DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;