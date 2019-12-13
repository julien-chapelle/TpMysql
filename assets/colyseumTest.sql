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

SELECT `shows`.`title`, `shows`.`performer`, `shows`.`date`, `shows`.`startTime`, `shows`.`picture`, `shows`.`officialSite`, `shows`.`duration`, `showtypes`.`type`, `shows`.`firstGenresId`, `shows`.`secondGenreId` AS `genre_2`, `genres`.`id`, `genres`.`genre` AS `genre_1`
            FROM `shows`
            LEFT JOIN `showtypes`
            ON `shows`.`showTypesId`=`showtypes`.`id`
            LEFT JOIN `genres`
            ON `shows`.`firstGenresId`=`genres`.`id`
            ORDER BY
            (CASE
                WHEN `genre_2`='3' THEN INSERT('3', 1, 1, 'Pop/Rock')
                WHEN `genre_2`='4' THEN INSERT('4', 1, 1, 'Musique électronique')
                WHEN `genre_2`='5' THEN INSERT('5', 1, 1, 'Folk')
                WHEN `genre_2`='13' THEN INSERT('13', 1, 1, 'Funk')
                ELSE 'autre'
            END);


