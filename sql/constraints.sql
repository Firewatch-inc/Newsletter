USE `iep`;

/* УСТАНОВКА СВЯЗЕЙ */

/* Связка таблицы "Users" с таблицей "typeUsers" */
ALTER TABLE `users`            ADD CONSTRAINT R1  FOREIGN KEY (id_type_user)       REFERENCES `typeUser` (id_type_user) ON UPDATE CASCADE ON DELETE CASCADE; 
