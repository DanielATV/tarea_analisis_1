# Login y registro de usuarios

#### Tablas Encriptadas (postgres)

Para el correcto uso de tablas encriptadas usaremos pgcrypto<br/>
Mediante el uso de un hash mas salt para seguridad estoo mapeara la contraseña objetivo<br/><br/>

##### Usando pgcrypto

Para poder usar pgcrypto debemos crear la extensión<br/>
```
CREATE EXTENSION pgcrypto;
```

Luego hacemos nuestras tablas<br/>
```
CREATE TABLE users (
   id uuid NOT NULL DEFAULT gen_random_uuid() PRIMARY KEY, /* id (aleatoria) del usuario */
   email text NOT NULL, /* email del usuario */
   password text NOT NULL, /* contraseña del usuario */
   name text NOT NULL /* nombre del usuario */
);
```
##### Insertando en las tablas

Para insertar un usuario debemos usar la siguiente sintaxis en la BD
```
/* No insertamos en la columna id por la funcion gen_random_uuid() que nos genera una id automática */
/* Usamos lower($email) para obtener un email que no sea sensible a las mayúsculas */
/* La función crypt() recibe dos parámetros la contraseña como tal y gen_salt() la 
   cual añade un valor al hash para protegerlo contra ataques tipo diccionario */
   
INSERT INTO users (email, password, name) VALUES (lower('$email'), crypt('$pas', gen_salt('bf', 8)),'$name');

```

##### Identificando a usuarios

Para seleccionar usuarios de la BD la sintaxis es la siguiente
```
/* Verificamos que exista el correo proporcionado como filtro principal */
SELECT * FROM users WHERE email = lower('$email');
/* Verificamos que exista el correo proporcionado como filtro principal y que la contraseña sea la correcta verificando el hash */
SELECT * FROM users WHERE email = lower('$email') AND password = crypt('$pass', password);
```


