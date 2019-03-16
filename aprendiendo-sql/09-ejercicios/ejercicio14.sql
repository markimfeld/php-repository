/* 
    14. Visualizar las unidades totales vendidas de cada coche
        a cada cliente.
        Mostrando el nombre del producto, numero de cliente y la suma de unidades.
 */
/**
 * Author:  marcos
 * Created: 15/03/2019
 */

SELECT c.nombre AS 'Cliente', p.marca AS 'Vehículo', SUM(e.cantidad) AS 'Cantidad' 
FROM encargos e, coches p, clientes c
WHERE e.cliente_id = c.id AND p.id = e.cliente_id GROUP BY p.id;

SELECT p.marca AS 'Vehículo', c.nombre AS 'Cliente', SUM(e.cantidad) AS 'Cantidad'
FROM encargos e
INNER JOIN coches p ON p.id=e.coche_id
INNER JOIN clientes c ON c.id=e.cliente_id
GROUP BY e.coche_id, e.cliente_id; 

/*********AGRUPADO POR COCHE************/
SELECT p.marca AS 'Vehículo', c.nombre AS 'Cliente', SUM(e.cantidad) AS 'Cantidad'
FROM encargos e
INNER JOIN coches p ON p.id=e.coche_id
INNER JOIN clientes c ON c.id=e.cliente_id
GROUP BY e.coche_id;

/*********AGRUPADO POR CLIENTE************/
SELECT p.marca AS 'Vehículo', c.nombre AS 'Cliente', SUM(e.cantidad) AS 'Cantidad'
FROM encargos e
INNER JOIN coches p ON p.id=e.coche_id
INNER JOIN clientes c ON c.id=e.cliente_id
GROUP BY e.cliente_id;  