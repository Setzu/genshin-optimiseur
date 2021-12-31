DROP TABLE builds;

CREATE TABLE IF NOT EXISTS builds (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    character_id INT(2) NOT NULL,
    character_lv INT(2) NOT NULL,
    weapon_id INT(3) NOT NULL,
    flower_id INT(3) NOT NULL,
    feather_id INT(3) NOT NULL,
    hourglass_id INT(3) NOT NULL,
    goblet_id INT(3) NOT NULL,
    headgear_id INT(3) NOT NULL
) DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;