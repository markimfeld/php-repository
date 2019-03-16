/* 
    19. Obtener los vendedores con 2 o más clientes.
 */
/**
 * Author:  marcos
 * Created: 15/03/2019
 */

SELECT v.nombre AS 'Vendedor', COUNT(c.id) AS 'Nro Clientes' FROM clientes c
INNER JOIN vendedores v ON v.id=c.vendedor_id
GROUP BY v.id 
HAVING COUNT(c.id) >= 2;

SELECT * FROM vendedores WHERE id IN
(SELECT vendedor_id FROM clientes GROUP BY vendedor_id HAVING COUNT(id) >= 2);