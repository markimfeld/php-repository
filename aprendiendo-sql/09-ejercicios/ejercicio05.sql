/* 
    5. Listar todos los vendedores con su nombre y el numero de dias que llevan
    en el concesionario.
 */
/**
 * Author:  marcos
 * Created: 14/03/2019
 */

SELECT v.nombre, DATEDIFF(CURDATE(),v.fecha_alta) AS 'Antigüedad en días' 
FROM vendedores v; 