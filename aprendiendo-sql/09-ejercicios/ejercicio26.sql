/* 
    26. Sacar los vendedores que tienen jefe y sacar el nombre del jefe.
 */

SELECT ve.nombre AS 'JEFE', v.nombre AS 'VENDEDOR' FROM vendedores v 
INNER JOIN vendedores ve ON ve.id = v.jefe
WHERE v.jefe IS NOT NULL;

