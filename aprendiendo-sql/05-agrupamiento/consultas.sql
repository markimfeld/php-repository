# CONSULTAS DE AGRUPAMIENTO #
SELECT titulo FROM entradas;
SELECT titulos FROM entradas GROUP BY categoria_id;
SELECT COUNT(titulo) AS 'NÚMEROS DE ENTRADAS', categoria_id FROM entradas GROUP BY categoria_id;

# el where no lo puedo usar en agrupamiento #

# CONSULTAS DE AGRUPAMIENTO CON CONDICIONES # UTILIZO EL HAVING 
SELECT COUNT(titulo) AS 'NÚMEROS DE ENTRADAS', categoria_id 
FROM entradas GROUP BY categoria_id HAVING COUNT(titulo) >= 4;

/*

AVG     sacar la media
COUNT   permite contar el numero de elementos
MAX     permite devolver el valo máximo del grupo
MIN     valor minimo del grupo 
SUM     SUMAR TODO EL CONTENIDO DEL GRUPO

*/
SELECT AVG(id) AS 'Media' FROM entradas;
SELECT MAX(id) AS 'Maximo id' FROM entradas;
SELECT MIN(id) AS 'Maximo id' FROM entradas;
SELECT SUM(id) AS 'Maximo id' FROM entradas;
