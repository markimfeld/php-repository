/*
    25. Obtener una lista de los nombres de los clientes con el importe de sus
        encargos acumulado.
*/

SELECT cl.nombre, SUM(c.precio * e.cantidad) FROM encargos e
INNER JOIN clientes cl ON cl.id = e.cliente_id
INNER JOIN coches c ON c.id=e.coche_id
GROUP BY e.cliente_id 
ORDER BY 2 ASC;