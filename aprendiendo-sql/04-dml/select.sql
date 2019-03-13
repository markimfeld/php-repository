#MOSTRAR TODOS LOS REGISTROS / FILAS DE UNA TABLA#
SELECT * FROM usuarios;

#MOSTRAR POR ATRIBUTO#
SELECT email, nombre FROM usuarios;

#OPERADORES ARITMETICOS#
SELECT email, (4+7) AS 'OPERACION' FROM usuarios;

#FUNCIONES MATEMATICAS#
SELECT abs(-8) AS 'OPERACION' FROM usuarios;

SELECT UPPER(nombre) FROM usuarios;
SELECT LOWER(nombre) FROM usuarios;
SELECT CONCAT(nombre, ' ', apellidos) FROM usuarios;
SELECT CONCAT(nombre, ' ', apellidos) AS 'CONVERSION' FROM usuarios;
SELECT UPPER(CONCAT(nombre, ' ', apellidos)) AS 'CONVERSION' FROM usuarios;
SELECT LENGTH(CONCAT(nombre, ' ', apellidos)) AS 'CONVERSION' FROM usuarios;
SELECT email, LENGTH(CONCAT(nombre, ' ', apellidos)) AS 'CONVERSION' FROM usuarios;
SELECT TRIM(CONCAT(' ',nombre, '      ', apellidos,'      ')) AS 'CONVERSION' FROM usuarios;


#FUNCIONES MAS IMPORTANTES PARA TRABAJAR CON FECHAS#
SELECT fecha, CURDATE() AS 'Fecha Actual' FROM usuarios;
SELECT DATEDIFF(fecha, CURDATE()) AS 'Fecha Actual' FROM usuarios;
SELECT DAYNAME(fecha) AS 'Día' FROM usuarios;
SELECT DAYOFMONTH(fecha) AS 'Día' FROM usuarios;
SELECT DAYOFWEEK(fecha) AS 'Día' FROM usuarios;
SELECT DAYOFYEAR(fecha) AS 'Día' FROM usuarios;
SELECT MONTH(fecha) AS 'Día' FROM usuarios;
SELECT DAY(fecha) AS 'Día' FROM usuarios;
SELECT HOUR(fecha) AS 'Día' FROM usuarios;
SELECT CURTIME() AS 'Día' FROM usuarios;
SELECT SYSDATE() AS 'Día' FROM usuarios;
SELECT DATE_FORMAT(fecha, '%d-%m-%Y') FROM usuarios;

#DEVUELVE SI UN CAMPO ES NULO#
SELECT email, ISNULL(apellidos) FROM usuarios;
#DISTINGUIR SI DOS VALORES SON IGUALES O NO#
SELECT email, STRCMP('hola','hola') FROM usuarios;
#VERSION DE MYSQL#
SELECT VERSION() FROM usuarios;
#USER#
SELECT USER() FROM usuarios;