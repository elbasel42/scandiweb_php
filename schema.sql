CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    price FLOAT NOT NULL,
    sku VARCHAR(255) NOT NULL UNIQUE,
    product_type VARCHAR(255) NOT NULL,
    weight FLOAT,
    size FLOAT,
    length FLOAT,
    height FLOAT,
    width FLOAT
) ENGINE = InnoDB;
