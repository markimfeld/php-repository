/* 
    29. Crear una vista llamada vendedores A que incluirá todos los vendedores
        del grupo que se llame "Vendedores A"
*/

CREATE VIEW vendedoresA AS
SELECT v.nombre AS 'Nombre', v.apellido AS 'Apellido' FROM vendedores v
INNER JOIN grupos g ON g.id = v.grupo_id
WHERE g.nombre = 'Vendedores A';

CREATE VIEW vendedoresA AS
SELECT * FROM vendedores WHERE grupo_id IN
(SELECT id FROM grupos WHERE nombre = 'Vendedores A');