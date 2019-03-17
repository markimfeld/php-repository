/*
    23. Listar todos los encargos realizados con la marca del coche y el nombre 
        del cliente.
*/


SELECT c.marca, cl.nombre FROM encargos e
INNER JOIN clientes cl ON cl.id = e.cliente_id
INNER JOIN coches c ON c.id=e.coche_id;