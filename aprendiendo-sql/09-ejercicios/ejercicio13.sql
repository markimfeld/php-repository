/* 
    13. Sacar la media de sueldos entre todos los vendedores por grupo.
 */
/**
 * Author:  marcos
 * Created: 15/03/2019
 */

SELECT g.nombre AS 'Grupo', AVG(v.sueldo) AS 'Media' FROM vendedores v, grupos g 
WHERE g.id = v.grupo_id GROUP BY v.grupo_id;

SELECT g.nombre AS 'Grupo', ROUND(AVG(v.sueldo),2) AS 'Media' FROM vendedores v
INNER JOIN grupos g ON g.id=v.grupo_id GROUP BY v.grupo_id;

SELECT g.nombre AS 'Grupo', CEIL(AVG(v.sueldo)) AS 'Media' FROM vendedores v
INNER JOIN grupos g ON g.id=v.grupo_id GROUP BY v.grupo_id;