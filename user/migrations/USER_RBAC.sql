CREATE TABLE IF NOT EXISTS `user` (
  `id` int          NOT NULL AUTO_INCREMENT PRIMARY KEY NOT NULL,
  `firstname`       varchar(128) NOT NULL,
  `lastname`        varchar(128) NOT NULL,

  `username`        varchar(128) UNIQUE NOT NULL,
  `password`        varchar(255) NOT NULL,

  `status`          bit(1) NOT NULL DEFAULT 1,
  `super_admin`     bit(1) NOT NULL DEFAULT 0,

  `email`            varchar(128) UNIQUE DEFAULT NULL,
  `datetime_create`  datetime     NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `datetime_update`  datetime
);

