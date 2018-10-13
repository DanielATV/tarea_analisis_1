# tarea_analisis_1

#### Tablas Encriptadas (postgres)

Para el correcto uso de tablas encriptadas usaremos pgcrypto<br/>
Mediante el uso de un hash mas salt para seguridad estoo mapeara la contraseña objetivo<br/><br/>

##### Usando pgcrypto

Para poder usar pgcrypto debemos crear la extensión<br/>
> CREATE EXTENSION pgcrypto;

Luego hacemos nuestras tablas<br/>
> CREATE TABLE users (<br/>
>   \tid uuid NOT NULL DEFAULT gen_random_uuid() PRIMARY KEY, /* id (aleatoria) del usuario */<br/>
>   \temail text NOT NULL, /* email del usuario */<br/>
>   \tpassword text NOT NULL, /* contraseña del usuario */<br/>
>   \tname text NOT NULL /* nombre del usuario */<br/>
> );<br/>
