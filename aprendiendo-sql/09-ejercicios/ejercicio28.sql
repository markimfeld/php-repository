/* 
    28. Mostrar todos los vendedores y el numero de clientes.
        Se debe mostrar tengan o no clientes
 */

SELECT v.nombre, v.apellido AS 'Vendedor', COUNT(cl.id) AS 'Cantidad de Clientes'
FROM vendedores v
LEFT JOIN clientes cl ON cl.vendedor_id=v.id
GROUP BY v.id;


