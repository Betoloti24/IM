# Inventory Manager (IM)

## Lenguaje de Programación y Frameworks

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Se ha utilizado el lenguaje de programacion **PHP** para la realizar el Back de la aplicacion. Para el diseño del Front se ha utilizo **HTML5, CSS y Bootstrap 5**.

<p align="center"> <img src="https://imgur.com/ASq88Gy.png"> </p>


## Manejador de Bases de Datos (MDB)

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Para tener una buena compatibilidad con el lenguaje de programacion **PHP**, se ha utilizado el MDB MySQL desde la interfaz de PHPmyadmin.

<p align="center"> <img src="https://imgur.com/21slhOv.png"> </p>

## Diagrama Entidad Relacion (ER)

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Como solo se poseen datos de usuario para el inicio de sesion y los detalles de los productos, se poseen 2 entidades sin relacion alguna, son simplemente tablas de almacenamiento.

<p align="center"> <img src="https://imgur.com/w736Fvi.png"> </p>

## Modelo Relacional (MR)

<p align="center"> <img src="https://imgur.com/4IvQwsf.png"> </p>

## Funcionalidades

### Inicio de Sesión

1. Tenemos una interfaz de usuario amigable que permite iniciar sesion con un usuario y una contraseña.

<p align="center"> <img src="https://imgur.com/FtECWv1.png"> </p>

2. Tambien podemos registrarnos; sin embargo, se requere del codigo de seguridad (2357) que debe de poseer el administrador del sistema.

<p align="center"> <img src="https://imgur.com/pJgVlpN.png"> </p>

3. Ahora hacemos la prueba de iniciar sesion, podemos ver que en la BD tenemos un usuario *Edinyer* con una clave *1234*, y al pulsar **Entrar** nos direcciona al inventario actual.

<p align="center"> <img src="https://imgur.com/VWIr6dc.png"> 
    <img src="https://imgur.com/ElLFpTT.png"> <img src="https://imgur.com/LYGGYJK.png">
</p>

4. Los errores que pueden ocurrir, es que no se haya llenado algun campo, o que el usuario o contraseña ingresados no sean validos, lo que nos mostrara un mensaje de error en la parte inferior si es un error de usuario y/o contraseña, y un mensaje sobre el **input** que no se haya completado.

<p align="center"> <img src="https://imgur.com/aGWD0Pn.png"> 
    <img src="https://imgur.com/rzB2Ie1.png"> 
    <img src="https://imgur.com/e2PxOQZ.png"> 
</p>

5. Para registrarse, se debe de ir a la pagina de registro y colocar los datos solicitados; cade destacar, que se debe de colocar un usuario que no esté registrado, es decir, que todos los usuario tendran un nombre unico para acceder al sistema. A su vez, se debe de colocar la clave de seguridad correctamente. 






