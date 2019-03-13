/*
SUBCONSULTAS:
- Son consultas que se ejecutan dentro de otras.
- Consiste en utilizar los resultados de la subconsulta para operar en la consulta
principal.
- Jugando con las claves ajenas / foraneas.
*/

# SACAR USUARIOS CON ENTRADAS #
SELECT * FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas);

SELECT * FROM usuarios WHERE id NOT IN (SELECT usuario_id FROM entradas);

# Sacar los usuarios que tengan alguna entrada que en su titulo hable de FIFA 19#
SELECT nombre, apellidos FROM usuarios WHERE id 
    IN (SELECT usuario_id FROM entradas WHERE titulo LIKE '%FIFA 19%');

# Sacar todas las entradas de la categoria acción utilizando su nombre #
SELECT * FROM entradas WHERE categoria_id IN (SELECT id FROM categorias WHERE nombre='Acción');
# Mostrar las categorias con mas de 3 entradas #
SELECT nombre FROM categorias WHERE id IN
    (SELECT categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(categoria_id) >= 3);
# Mostrar los usuarios que crearon una entrada un martes #
SELECT nombre FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas WHERE DAYOFWEEK(fecha) = 3);
# Mostrar el nombre del usuario que tenga más entradas #
SELECT CONCAT(nombre, ' ', apellidos) AS 'Usuario con mas entradas' FROM usuarios WHERE id = 
    (SELECT usuario_id FROM entradas GROUP BY usuario_id ORDER BY COUNT(id) DESC LIMIT 1);
# Mostrar las categorias sin entradas #
SELECT * FROM categorias WHERE id NOT IN (SELECT categoria_id FROM entradas);