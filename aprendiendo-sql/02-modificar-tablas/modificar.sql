# RENOMBRAR UNA TABLA #
ALTER TABLE usuarios RENAME TO usuarios_renom;

# CAMBIAR EL NOMBRE DE UNA COLUMNA #
ALTER TABLE usuarios_renom CHANGE apellidos apellido VARCHAR(100) null;

# MODIFICAR COLUMNA SIN CAMBIAR SU NOMBRE #
ALTER TABLE usuarios_renom MODIFY apellido VARCHAR(200) not null;

# AÑADIR COLUMNA #
ALTER TABLE usuarios_renom ADD website VARCHAR(100) null;

# AÑADIR RESTRICCIÓN A COLUMNA #
ALTER TABLE usuarios_renom ADD CONSTRAINT uq_email UNIQUE(email);

# BORRAR UNA COLUMNA #
ALTER TABLE usuarios_renom DROP website;