/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  marcos
 * Created: 13/03/2019
 */

/*
    VISTAS:
    Las podemos definir como una consulta almacenada en la base de datos que se utiliza
    como una tabla virtual.
    No almacena datos sino que utiliza asociaciones y los datos originales
    de las tablas, de forma que siempre se mantiene actualizada.
*/

CREATE VIEW entradas_con_nombres AS
SELECT e.id, e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categoria'
FROM entradas e
INNER JOIN usuarios u ON e.usuario_id = u.id
INNER JOIN categorias c ON e.categoria_id = c.id; 