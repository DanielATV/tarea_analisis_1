CREATE EXTENSION pgcrypto;


CREATE TABLE users (
  id uuid NOT NULL DEFAULT gen_random_uuid() PRIMARY KEY, /* id (aleatoria) del usuario */
  email text NOT NULL, /* email del usuario */
  password text NOT NULL, /* contraseña del usuario */
  name text NOT NULL /* nombre del usuario */
);
