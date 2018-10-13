# tarea_analisis_1

#### Tablas Encriptadas (postgres)

Para el correcto uso de tablas encriptadas usaremos pgcrypto<br/>
Mediante el uso de un hash mas salt para seguridad estoo mapeara la contraseña objetivo<br/><br/>

##### Usando pgcrypto

Para poder usar pgcrypto debemos crear la extensión<br/>
> CREATE EXTENSION pgcrypto;
