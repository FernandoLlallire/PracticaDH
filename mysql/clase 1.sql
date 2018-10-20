--Ejercicio 1
SELECT * FROM movies;
--Ejercicio 2
select * from actors;
--Ejercicio 3
select title from movies;
--Ejercicio 4
select first_name,last_name from actors
--Ejercicio 5
select * from movies where release_date > '2010'
--Ejercicio 6
select * from movies where year(release_date) between '2000' and '2010'
--Ejercicio 7
select * from movies where title = 'Toy Story'
--Ejercicio 8
select * from actors where first_name = 'mark'
--Ejercicio 9
select * from actors where first_name <> 'mark'
--Ejercicio 10
select * from actors where first_name = 'mark' or first_name = 'sam'
--Ejercicio 11
select * from movies where (year(release_date) < '2000' or year(release_date)>'2009') and id > 10
