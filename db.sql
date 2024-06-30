CREATE DATABASE IF NOT EXISTS id18842182_esp32;

-- Create a user and grant privileges
CREATE USER 'id18842182_electronoobs'@'localhost' IDENTIFIED BY '4(M(&g6!RjzK2c6{';
GRANT ALL PRIVILEGES ON api.* TO 'id18842182_electronoobs'@'localhost';
GRANT ALL PRIVILEGES ON *.* TO 'id18842182_electronoobs'@'localhost' IDENTIFIED BY '4(M(&g6!RjzK2c6{' WITH GRANT OPTION;
FLUSH PRIVILEGES;


-- Use the database
USE id18842182_esp32;

-- Create the table to store the LED status
CREATE TABLE IF NOT EXISTS LED_status (
    id INT(11) NOT NULL AUTO_INCREMENT,
    status TINYINT(1) NOT NULL DEFAULT 0,
    PRIMARY KEY (id)
);

-- Insert initial data into the LED_status table
INSERT INTO LED_status (status) VALUES (0);

-- Ensure only one row is present (for safety)
DELETE FROM LED_status WHERE id > 1;

CREATE TABLE IF NOT EXISTS Time (
    id INT(11) NOT NULL AUTO_INCREMENT,
    date_time DATETIME NOT NULL,
    PRIMARY KEY (id)
);