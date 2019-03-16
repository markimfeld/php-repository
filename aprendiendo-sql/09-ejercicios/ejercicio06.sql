/* 
    6. Visualizar el nombre y los apellidos de los vendedores en una misma column,
        su fecha de registro y el dia de la semana en la que se registraron.
 */
/**
 * Author:  marcos
 * Created: 14/03/2019
 */

SELECT CONCAT(nombre, ' ', apellido) AS 'Vendedor', 
fecha_alta AS 'Fecha Inicio', DAYNAME(fecha_alta) AS 'Dia Inicio' 
FROM vendedores;