SELECT * from movies where year(release_date) between '1999' and '2004'
select * from movies WHERE release_date BETWEEN '1999-10-01' and '2005-12-31'
select * from movies where length between 45 and 120
select * from actors where first_name between 'he' and 'to' order by first_name
select * from movies where title like 't%c'
select * from movies where year(release_date)=2010 order by title
select * from movies where title like '%-%'
select * from movies where release_date like '____-10%'  or release_date like '1999-%' order by title
 -- parte del join ej D
select genres.id, genres.name, movies.title
from genres
	inner join movies on genres.id = movies.genre_id
order by name desc
 -- parte del join ej e
 SELECT * FROM movies
 inner join actor_movie on actor_movie.movie_id = movies.id
 inner join actors on actor_movie.actor_id = actors.id
 inner join genres on movies.genre_id = genres.id
