--initialisation script

CREATE SCHEMA 'CORPCONTENT' ;

CREATE TABLE `corpcontent`.`block content` (
  `Block Primary` INT NOT NULL,
  `Top hook p` NVARCHAR(256) NULL,
  `Block1 h` NVARCHAR(256) NULL,
  `Block1 p` NVARCHAR(256) NULL,
  `Block2 h` NVARCHAR(256) NULL,
  `Block2 p` NVARCHAR(256) NULL,
  `Block3 h` NVARCHAR(256) NULL,
  `Block3 p` NVARCHAR(256) NULL,
  `Block4 h` NVARCHAR(256) NULL,
  `Block4 p` NVARCHAR(256) NULL,
  PRIMARY KEY (`Block Primary`))
COMMENT = 'Contents for blocks 1 - 4. <ul> items and testimonials in separate tables. Title is pulled from the API instead.';

INSERT INTO `corpcontent`.`block content` (`Block Primary`, `Top hook p`, `Block1 h`, `Block1 p`, `Block2 h`, `Block2 p`, `Block3 h`, `Block3 p`, `Block4 h`, `Block4 p`) VALUES ('1', 'The first and the best.', 'Your clients are our clients.', 'By giving you premier service, it frees up your time to deliver great customer service on your end.', 'Every single angle.', 'We make sure we’re unbeaten at every single turn. From things like:', 'Number one in every single nation.', 'Our brand is recognised the world over, and quite rightly so.', 'But don’t just take our word for it.', 'Here are some things that our delighted customers have said:');
