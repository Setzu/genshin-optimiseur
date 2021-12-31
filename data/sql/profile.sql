DROP TABLE profile;

CREATE TABLE IF NOT EXISTS profile (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    user_id INT NOT NULL UNIQUE,
    uid INT(9),
    sharing_uid_permission INT NOT NULL DEFAULT 1 CHECK (sharing_uid_permission BETWEEN 0 AND 1),
    sharing_box_permission INT NOT NULL DEFAULT 1 CHECK (sharing_box_permission BETWEEN 0 AND 1)
) DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;