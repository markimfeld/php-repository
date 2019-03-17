/* 
    30. Mostrar los datos del vendedor con más antigüedad en el concesionario.
 */

SELECT * FROM vendedores WHERE fecha_alta = 
(SELECT MIN(fecha_alta) FROM vendedores); 
/***********MAS EFICIENTE****************/
SELECT * FROM vendedores ORDER BY fecha_alta ASC LIMIT 1;

/*
    30 plus. Obtener los coches con más unidades vendidas.
*/

SELECT * FROM coches WHERE id =
(SELECT coche_id FROM encargos WHERE cantidad IN
(SELECT MAX(cantidad) FROM encargos));

