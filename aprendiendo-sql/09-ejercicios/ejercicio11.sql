/* 
    11. Visualizar todos los cargos y el numero de vendedores
        que hay en cada cargo.
 */
/**
 * Author:  marcos
 * Created: 15/03/2019
 */

SELECT cargo, COUNT(id) AS 'Nro Vendedores' 
FROM vendedores GROUP BY cargo;