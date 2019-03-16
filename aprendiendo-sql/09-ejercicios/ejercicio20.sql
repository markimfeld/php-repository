/* 
    20. Seleccionar el grupo en el que trabaja el vendedor con mayor salario
        y mostrar el nombre del grupo.
 */
/**
 * Author:  marcos
 * Created: 16/03/2019
 */
/************* MI FORMA *************************/
SELECT g.id AS 'Nro Grupo', g.nombre AS 'Nombre', g.ciudad 'Ciudad' 
FROM grupos g 
INNER JOIN vendedores v ON v.grupo_id = g.id
ORDER BY sueldo DESC
LIMIT 1;
/*********************VICTOR************************/
SELECT * FROM grupos WHERE id IN
(SELECT grupo_id FROM vendedores WHERE sueldo=
    (SELECT MAX(sueldo) FROM vendedores)
);
  