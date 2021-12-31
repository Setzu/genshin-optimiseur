DROP TABLE weapons;

CREATE TABLE IF NOT EXISTS weapons (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    user_id INT NOT NULL,
    weapon_id INT NOT NULL,
    refinement INT NOT NULL,
    weapon_level INT NOT NULL,
    UNIQUE (user_id, weapon_id)
) DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;