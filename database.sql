CREATE DATABASE student_tasks;

USE student_tasks;

CREATE TABLE tasks (
    
    id INT AUTO_INCREMENT PRIMARY KEY,
    
    title VARCHAR(255) NOT NULL,
    
    description TEXT,
    
    status VARCHAR(50) DEFAULT 'To Do',

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);