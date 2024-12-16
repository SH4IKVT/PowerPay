-- Create table for address
CREATE TABLE address (
    address_id INT AUTO_INCREMENT PRIMARY KEY,
    pincode VARCHAR(10),
    district VARCHAR(50),
    street_name VARCHAR(100)
);

-- Create table for admin_users
CREATE TABLE admin_users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstName VARCHAR(50),
    lastName VARCHAR(50),
    email VARCHAR(50),
    password VARCHAR(50),
    address_id INT,
    phone_number VARCHAR(60),
    FOREIGN KEY (address_id) REFERENCES address(address_id)
);

-- Create table for users
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    admin_id INT,
    firstName VARCHAR(50),
    lastName VARCHAR(50),
    email VARCHAR(50),
    phone_number VARCHAR(60),
    password VARCHAR(60),
    address_id INT,
    FOREIGN KEY (admin_id) REFERENCES admin_users(id),
    FOREIGN KEY (address_id) REFERENCES address(address_id)
);

-- Create table for customer_bill
CREATE TABLE customer_bill (
    bill_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    amount DECIMAL(10, 2),
    tax DECIMAL(10, 2),
    bill_date DATE,
    Status VARCHAR(60),
    FOREIGN KEY (user_id) REFERENCES users(id)
);

-- Create table for payment
CREATE TABLE payment (
    pid INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    phone_number VARCHAR(60),
    date DATE,
    card_number VARCHAR(60),
    bill_id INT,
    status VARCHAR(60),
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (bill_id) REFERENCES customer_bill(bill_id)
);

-- Create table for queries
CREATE TABLE queries (
    qid INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    admin_id INT,
    query_text TEXT,
    timestamp TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (admin_id) REFERENCES admin_users(id)
);
