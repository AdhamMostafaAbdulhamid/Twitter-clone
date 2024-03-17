CREATE TABLE `blogdatabase`.`users` (`id` INT NOT NULL AUTO_INCREMENT , `fName` VARCHAR(225) NOT NULL , `lName` VARCHAR(225) NOT NULL , `email` VARCHAR(225) NOT NULL , `password` VARCHAR(225) NOT NULL , `ProfilePicture` VARCHAR(225) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
CREATE TABLE `blogdatabase`.`posts` (`post_id` INT NOT NULL AUTO_INCREMENT , `title` VARCHAR(225) NOT NULL , `content` VARCHAR(225) NOT NULL , `image` VARCHAR(225) NOT NULL , `updated at` DATETIME NOT NULL , `user_id` INT NOT NULL , PRIMARY KEY (`post_id`)) ENGINE = InnoDB;
ALTER TABLE `posts` ADD FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE CASCADE ON UPDATE CASCADE;
CREATE TABLE `blogdatabase`.`comments` (`id` INT NOT NULL , `user_id` INT NOT NULL , `post_id` INT NOT NULL , `content` VARCHAR(225) NOT NULL , `updated_at` DATETIME NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
ALTER TABLE `comments` ADD FOREIGN KEY (`post_id`) REFERENCES `posts`(`post_id`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE `comments` ADD FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE `comments` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT;
