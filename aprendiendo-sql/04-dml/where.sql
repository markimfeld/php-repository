#CONSULTA CON UNA CONDICIÓN#
SELECT * FROM usuarios WHERE email = 'msimfeld@gmail.com' AND apellidos = 'imfeld';

/*
OPERADOR DE COMPARACIÓN
Igual           =
Distinto        !=
Menor que       <
Mayor que       >
Menor o Igual   <=
Mayor o Igual   >=
Entre           between A and B
En              in
Es null         is null
No nulo         is not null
Como            like
No es como      not like
*/

/**
OPERADORES LOGICOS:
OR
AND
NOT
*/

/**
COMODINES:
Cualquier cantidad de caracteres: %
Un caracter desconocido: _
*/

#EJEMPLOS#

# 1. Mostrar Nombre y Apellido de todos los usuarios registrados en 2019
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha) = 2019;
# 2.
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha) != 2019;
# 3.
SELECT nombre FROM usuarios WHERE apellidos LIKE '%a%' AND password = 'marcos12345';
# 4. Sacar todos los registros de la tabla usuarios cuyo año sea par
SELECT * FROM usuarios WHERE (YEAR(fecha)%2 != 0);
# 5. Sacar todos los registros de la tabla usuarios cuyo nombre tenga más de 
#    5 letras y que se hayan registrado antes de 2020, y mostrar el nombre en mayus
SELECT UPPER(nombre), apellidos FROM usuarios WHERE LENGTH(nombre) > 5 AND YEAR(fecha) < 2020;

# PERMITE ORDENAR
SELECT nombre, email FROM usuarios ORDER BY nombre ASC;
# ME PERMITE LIMITAR LA CANTIDAD DE REGISTROS QUE APARECEN
SELECT * FROM usuarios LIMIT 2,5;