/* 
    16. Obtener un listado de clientes atendidos por el vendedor 'David Lopez'
 */
/**
 * Author:  marcos
 * Created: 15/03/2019
 */

SELECT c.nombre AS 'Cliente', CONCAT(v.nombre, ' ' ,v.apellido) AS 'Vendedor' 
FROM clientes c 
INNER JOIN vendedores v ON v.id=c.vendedor_id
WHERE c.vendedor_id = 1;

SELECT * FROM clientes WHERE vendedor_id IN 
        (SELECT id FROM vendedores WHERE nombre='David' AND apellido='Lopez');

/*
    Porque no usamos el LIKE para comparar string:
    Porque con el igual se hace más rapida la comparación.
*/