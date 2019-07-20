--initialisation script

CREATE SCHEMA CORPCONTENT ;

CREATE TABLE `corpcontent`.`block_content` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `Top_hook_p` TEXT NULL,
  `Block1_h` TEXT NULL,
  `Block1_p` TEXT NULL,
  `Block2_h` TEXT NULL,
  `Block2_p` TEXT NULL,
  `Block3_h` TEXT NULL,
  `Block3_p` TEXT NULL,
  `Block4_h` TEXT NULL,
  `Block4_p` TEXT NULL,
  PRIMARY KEY (`id`))
COMMENT = 'Contents for blocks 1 - 4. <ul> items and testimonials in separate tables. Title is pulled from the API instead.';

CREATE TABLE `corpcontent`.`list_items` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `ul` TEXT NULL,
    PRIMARY KEY (`id`))
COMMENT = 'Content for <ul> items in block 2';

CREATE TABLE `corpcontent`.`testimonials` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `testimonials` TEXT NULL,
    PRIMARY KEY (`id`))
COMMENT = 'Content for testimonials in block 4';

INSERT INTO `corpcontent`.`block_content` (`id`, `Top_hook_p`, `Block1_h`, `Block1_p`, `Block2_h`, `Block2_p`, `Block3_h`, `Block3_p`, `Block4_h`, `Block4_p`) VALUES ('1', 'The first and the best.', 'Your clients are our clients.', 'By giving you premier service, it frees up your time to deliver great customer service on your end.', 'Every single angle.', 'We make sure we’re unbeaten at every single turn. From things like:', 'Number one in every single nation.', 'Our brand is recognised the world over, and quite rightly so.', 'But don’t just take our word for it.', 'Here are some things that our delighted customers have said:');

--will do more inserts for the other tables later.
