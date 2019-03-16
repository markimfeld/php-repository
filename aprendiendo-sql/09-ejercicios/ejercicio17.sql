/* 
    17. Obtener listado con los encargos realizados por el cliente
        'Fruteria Antonia Inc'
 */
/**
 * Author:  marcos
 * Created: 15/03/2019
 */

SELECT e.id AS 'Nº Encargo', c.nombre AS 'Cliente', p.marca, e.cantidad, e.fecha 
FROM encargos e 
INNER JOIN clientes c ON c.id=e.cliente_id
INNER JOIN coches p ON p.id=e.coche_id
WHERE e.cliente_id 
IN (SELECT id FROM clientes WHERE nombre='Tienda Trab Inc');

SELECT * FROM encargos WHERE cliente_id
IN (SELECT id FROM clientes WHERE nombre='Fruteria Antonia Inc');