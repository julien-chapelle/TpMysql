USE colyseum;

-- SELECT `id`, `title`, `performer`, `date`, `picture` 
-- FROM `shows`
-- ORDER BY `date` LIMIT 3;

-- ALTER TABLE `shows`
-- ADD COLUMN `officialSite` VARCHAR(255) NOT NULL;

-- SELECT `shows`.`title`, `shows`.`performer`, `shows`.`date`, `shows`.`startTime`, `shows`.`picture`, `shows`.`officialSite`, `shows`.`duration`, `showtypes`.`type`
-- FROM `shows`
-- LEFT JOIN `showtypes`
-- ON `shows`.`showTypesId`=`showtypes`.`id`;

-- SELECT `shows`.`performer`, `shows`.`firstGenresId`, `shows`.`secondGenreId`, `genres`.`id`, `genres`.`genre`
-- FROM `shows`
-- LEFT JOIN `genres`
-- ON `shows`.`firstGenresId`=`genres`.`id`;

-- SELECT `shows`.`title`, `shows`.`performer`, `shows`.`date`, `shows`.`startTime`, `shows`.`picture`, `shows`.`officialSite`, `shows`.`duration`, `showtypes`.`type`, `shows`.`firstGenresId`, `shows`.`secondGenreId` AS `genre_2`, `genres`.`id`, `genres`.`genre` AS `genre_1`
--             FROM `shows`
--             LEFT JOIN `showtypes`
--             ON `shows`.`showTypesId`=`showtypes`.`id`
--             LEFT JOIN `genres` AS `table2`
--             ON `shows`.`firstGenresId`=`genres`.`id`

            SELECT `shows`.`title`, `shows`.`performer`, `shows`.`date`, `shows`.`startTime`, `shows`.`picture`, `shows`.`officialSite`, `shows`.`duration`, `showtypes`.`type`, `shows`.`firstGenresId`, `shows`.`secondGenreId`, `genres`.`id`, `genres`.`genre`,
            CASE 
            WHEN `shows`.`secondGenreId`='3' THEN 'Pop/Rock'
            WHEN `shows`.`secondGenreId`='4' THEN 'Musique électronique'
            WHEN `shows`.`secondGenreId`='5' THEN 'Folk'
            WHEN `shows`.`secondGenreId`='13' THEN 'Funk'
            ELSE 'autre'
            END AS 'genre2'
            FROM `shows`
            LEFT JOIN `showtypes`
            ON `shows`.`showTypesId`=`showtypes`.`id`
            LEFT JOIN `genres`
            ON `shows`.`firstGenresId`=`genres`.`id`;

-- SELECT DISTINCT DATE_FORMAT(`date`, '%M')
-- FROM `shows`
-- ORDER BY `date` ASC;


-- OK
-- $media_object_shows = 'SELECT `shows`.`title`, `shows`.`performer`, `shows`.`date`, `shows`.`startTime`, `shows`.`picture`, `shows`.`officialSite`, `shows`.`duration`, `showtypes`.`type`, `shows`.`firstGenresId`, `shows`.`secondGenreId`, `genres`.`id`, `genres`.`genre`
--             FROM `shows`
--             LEFT JOIN `showtypes`
--             ON `shows`.`showTypesId`=`showtypes`.`id`
--             LEFT JOIN `genres`
--             ON `shows`.`firstGenresId`=`genres`.`id`
--             ORDER BY `date`';
-- OK





