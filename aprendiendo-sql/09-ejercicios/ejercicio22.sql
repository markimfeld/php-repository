/*
    22. Mostrar listado de clientes (nro de cliente y nombre)
        mostrar tambien el nro de vendedor y su nombre.
*/

SELECT c.id AS 'Nro Cliente', c.nombre AS 'Cliente', v.id AS 'Nro Vendedor', v.nombre AS 'Vendedor' 
FROM clientes c
INNER JOIN vendedores v ON v.id = c.vendedor_id;