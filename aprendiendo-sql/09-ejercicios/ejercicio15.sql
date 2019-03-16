/* 
    15. Mostrar los clientes que más pedidos han hecho y
        mostrar cuantos hicieron.
 */
/**
 * Author:  marcos
 * Created: 15/03/2019
 */
SELECT c.nombre AS 'Nombre', COUNT(e.id) AS 'Encargos'
FROM encargos e 
INNER JOIN clientes c ON c.id = e.cliente_id
GROUP BY cliente_id 
ORDER BY 2 DESC LIMIT 2;
