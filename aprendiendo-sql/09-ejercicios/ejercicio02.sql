/* 
    Modificar la comisión de los vendedores y ponerla al 0.5% cuando ganan más de 
    50000
 */
/**
 * Author:  marcos
 * Created: 14/03/2019
 */

UPDATE vendedores SET comision= 0.5 WHERE sueldo >= 50000;