CREATE USER `newsletter`@`localhost`;

GRANT SELECT, INSERT, UPDATE, DELETE, EXECUTE, REFERENCES ON newsletter.* TO `newsletter`@`localhost`;

SET PASSWORD FOR 'newsletter'@'localhost' = PASSWORD('15Letters');