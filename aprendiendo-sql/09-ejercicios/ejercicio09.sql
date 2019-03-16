/* 
       Mostrar todos lo vendedores del grupo numero 2 ordenados por salario
       de mayor a menor.
 */
/**
 * Author:  marcos
 * Created: 15/03/2019
 */

SELECT * FROM vendedores WHERE grupo_id = 2 ORDER BY sueldo DESC;

SELECT * FROM vendedores WHERE grupo_id = 1 ORDER BY sueldo DESC;