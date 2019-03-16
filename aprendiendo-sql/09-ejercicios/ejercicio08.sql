/* 
    8. Visualizar todos los coches en cuya marca exista la letra "A" y cuyo modelo empiezen
        por "F"
 */
/**
 * Author:  marcos
 * Created: 14/03/2019
 */

SELECT * FROM coches WHERE marca LIKE '%a%' AND modelo LIKE 'F%';
