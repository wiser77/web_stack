CREATE DATABASE image_gallery;

USE image_gallery;

CREATE TABLE images (
    id INT AUTO_INCREMENT PRIMARY KEY,
    image VARCHAR(255) NOT NULL,
    title VARCHAR(255) NOT NULL
);


INSERT INTO images (image, title) VALUES 
('uploads/image1.jpg', 'Beautiful Sunset'),
('uploads/image2.jpg', 'Mountain View'),
('uploads/image3.jpg', 'City Lights');
