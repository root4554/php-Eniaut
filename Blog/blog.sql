CREATE DATABASE IF NOT EXISTS blog;

CREATE USER IF NOT EXISTS 'blog' IDENTIFIED BY 'blog';

GRANT ALL PRIVILEGES ON blog.* TO 'blog';

USE blog;

CREATE TABLE IF NOT EXISTS `editor` (
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `hash` VARCHAR(255) NOT NULL,

    `username` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `last_login` DATETIME NOT NULL,
    `first_name` VARCHAR(255) NOT NULL,
    `last_name` VARCHAR(255) NOT NULL,
    `role` ENUM('admin', 'editor') NOT NULL DEFAULT 'editor',

    `created` DATETIME NOT NULL,
    `updated` DATETIME NOT NULL,
    `deleted` bit(1) NOT NULL DEFAULT 0,

    CONSTRAINT `hash_uindex` UNIQUE (`hash`)
);

CREATE TABLE IF NOT EXISTS `post` (
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `hash` VARCHAR(255) NOT NULL,

    `title` VARCHAR(255) NOT NULL,
    `content` TEXT NOT NULL,
    `image_url` VARCHAR(255) NOT NULL,   
    `author_id` INT NOT NULL,
    `status` ENUM('draft', 'published') NOT NULL DEFAULT 'draft',
    
    `created` DATETIME NOT NULL,
    `updated` DATETIME NOT NULL,
    `deleted` bit(1) NOT NULL DEFAULT 0,

    CONSTRAINT `hash_uindex` UNIQUE (`hash`),
    constraint `post_author_fk` foreign key (`author_id`) references `editor` (`id`) on delete cascade on update cascade
);

CREATE TABLE IF NOT EXISTS comment (
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `hash` VARCHAR(255) NOT NULL,

    `content` TEXT NOT NULL,
    `author_id` INT NOT NULL,
    `post_id` INT NULL,
    `comment_id` INT NULL,

    `created` DATETIME NOT NULL,
    `updated` DATETIME NOT NULL,
    `deleted` bit(1) NOT NULL DEFAULT 0,

    CONSTRAINT `hash_uindex` UNIQUE (`hash`),
    constraint `comment_author_fk` foreign key (`author_id`) references `editor` (`id`) on delete cascade on update cascade,
    constraint `comment_post_fk` foreign key (`post_id`) references `post` (`id`) on delete cascade on update cascade,
    constraint `comment_comment_fk` foreign key (`comment_id`) references `comment` (`id`) on delete cascade on update cascade
);
