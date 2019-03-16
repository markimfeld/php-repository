/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  marcos
 * Created: 12/03/2019
 */

/**
    CONSULTAS MULTITABLA:
    Son consultas que sirven para consultar varias tablas en una sola sentencia
*/

#Mostrar las entradas con el nombre del autor y el nombre de la categoria#
SELECT e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categoria' 
FROM entradas e , usuarios u , categorias c
WHERE e.usuario_id = u.id AND e.categoria_id = c.id;

#INNER JOIN#
/*Es mucho más eficiente ya que une unicamente las filas que coinciden
con esta condición*/
/*
    Se notaría mucho la diferencia si tuvieramos miles de registros
*/
SELECT e.id, e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categoria'
FROM entradas e
INNER JOIN usuarios u ON e.usuario_id = u.id
INNER JOIN categorias c ON e.categoria_id = c.id;

#Mostrar el nombre de las categorías y al lado cuantas entradas tienen#
SELECT c.nombre AS 'Categoria', COUNT(e.id) AS 'Numero de entradas' 
FROM entradas e, categorias c 
WHERE e.categoria_id = c.id GROUP BY e.categoria_id;

/*
    RIGHT -> mantener todas las filas de la derecha.
    LEFT  -> mantener todas las filas de la izquierda.
*/
#INNER JOIN#
SELECT c.nombre, COUNT(e.id) FROM categorias c 
LEFT JOIN entradas e ON e.categoria_id = c.id
GROUP BY e.categoria_id, c.id; 

SELECT c.nombre, COUNT(e.id) FROM entradas e 
RIGHT JOIN  categorias c ON e.categoria_id = c.id
GROUP BY e.categoria_id, c.id;

#Mostrar el email de los usuarios y al lado cuantas entradas tienen#
SELECT u.email, COUNT(e.usuario_id) FROM usuarios u, entradas e 
WHERE u.id = e.usuario_id GROUP BY e.usuario_id;


