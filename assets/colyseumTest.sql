USE colyseum;

SELECT `id`, `title`, `performer`, `date`, `picture` 
FROM `shows`
ORDER BY `date` LIMIT 3;