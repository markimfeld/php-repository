/* 
    21. Obtener los nombres y ciudades de los clientes con encargos de 
            3 unidades o más.
 */
/**
 * Author:  marcos
 * Created: 16/03/2019
 */

/********VICTOR**********/
SELECT nombre, ciudad FROM clientes WHERE id IN 
(SELECT cliente_id FROM encargos WHERE cantidad >= 3);

/* con 3 o mas encargos */
/************MIO************/
SELECT nombre, ciudad FROM clientes WHERE id IN (
    SELECT cliente_id 
    FROM encargos 
    GROUP BY cliente_id 
    HAVING COUNT(cantidad) >= 3 
);