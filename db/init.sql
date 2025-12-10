CREATE DATABASE IF NOT EXISTS campus_milpalta;
USE campus_milpalta;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    full_name VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert a default admin user (password: admin123)
-- Note: In a real app, use password_hash() in PHP. This is just for initial setup if manually importing.
-- The PHP registration/login script should handle hashing.
