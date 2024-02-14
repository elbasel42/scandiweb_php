CREATE TABLE IF NOT EXISTS products (
    id int NOT NULL auto_increment,
    title varchar(255) NOT NULL,
    price decimal(12, 5) NOT NULL,
    sku varchar(255) NOT NULL,
    type varchar(255) NOT NULL,
    weight decimal(12, 6),
    size decimal(12, 6),
    PRIMARY KEY (id)
) ENGINE = InnoDB AUTO_INCREMENT = 1;