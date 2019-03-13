<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Formulario PHP y HTML</title>
    </head>
    
    <body>
        <h1>Formulario</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="nombre">Nombre:</label> 
            <p><input type="text" name="nombre" /></p>
            <label for="apellido">Apellido:</label> 
            <p><input type="text" name="apellido" placeholder="Ingresa tu apellido"/></p>
            <input type="submit" value="Enviar" />
            
            <label for="button">Button:</label> 
            <p><input type="button" name="button" value="Click"/></p>
            
            <label for="sexo">Sexo</label> 
            <p>
                Hombre:<input type="checkbox" name="sexo" value="Hombre" checked="checked"/>
                Mujer:<input type="checkbox" name="sexo" value="Mujer"/>
            </p>
            
            <label for="color">Color:</label> 
            <p><input type="color" name="color" /></p>
            
            <label for="date">Date:</label> 
            <p><input type="date" name="date" /></p>
            
            <label for="email">Email:</label> 
            <p><input type="email" name="email" /></p>
            
            <label for="file">File:</label> 
            <p><input type="file" name="file" multiple="multiple"/></p>
            
            <label for="file">Hidden:</label> 
            <p><input type="hidden" name="file" multiple="multiple"/></p>
            
            <label for="file">Number:</label> 
            <p><input type="number" name="file" /></p>
            
            <label for="file">Password:</label> 
            <p><input type="password" name="file" /></p>
            
             <label for="url">URL:</label> 
             <p><input type="url" name="url" /></p>
             
             <textarea></textarea><br />
             <p><input type="submit" name="Submit" value="Submit"/></p>
             
             
             Peliculas:
             <select name="peliculas">
                 <option value="Avangers">Avangers</option>
                 <option value="Spiderman">Spiderman</option>
                 <option value="Batman">Batman</option>
                 <option value="Los increibles 2">Los increibles 2</option>
             </select>
        </form>
    </body>
</html>
