/*
    27. Visualizar los nombres de los clientes y la cantidad de encargos realizados,
        incluyendos los que no hayan realizados encargos.
*/

SELECT c.nombre AS 'Cliente', COUNT(e.cantidad) AS 'Nro de Encargos' 
FROM clientes c
LEFT JOIN encargos e ON e.cliente_id = c.id 
GROUP BY c.nombre;