DROP TABLE artifacts;

CREATE TABLE IF NOT EXISTS artifacts (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    user_id INT NOT NULL,
    set_id INT NOT NULL,
    level INT NOT NULL,
    main_stat_id INT NOT NULL,
    main_stat_value NUMERIC NOT NULL,
    first_substat_id INT NOT NULL,
    second_substat_id INT NOT NULL,
    third_substat_id INT NOT NULL,
    fourth_substat_id INT NOT NULL,
    first_substat_value NUMERIC NOT NULL,
    second_substat_value NUMERIC NOT NULL,
    third_substat_value NUMERIC NOT NULL,
    fourth_substat_value NUMERIC NOT NULL
) DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;