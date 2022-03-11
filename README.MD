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

5. Para registrarse, se debe de ir a la pagina de registro y colocar los datos solicitados; cade destacar, que se debe de colocar un usuario que no esté registrado, es decir, que todos los usuario tendran un nombre unico para acceder al sistema. A su vez, se debe de colocar la clave de seguridad correctamente. Al pulsar **Enviar** te envia la pagina de inventario y se almacena el usuario ingresado en la BD. 

<p align="center"> 
    <img src="https://imgur.com/m81qaIG.png"> 
    <img src="https://imgur.com/LYGGYJK.png"> 
    <img src="https://imgur.com/srqSYpL.png"> 
</p>

6. Posee también sus mensajes de error, entre ellos está el hecho de que coloque un usuario que ya está registrado, o que coloque el código de seguridad de forma errada.

<p align="center"> 
    <img src="https://imgur.com/v0Q3eeb.png"> 
    <img src="https://imgur.com/b8amKqM.png">  
    <img src="https://imgur.com/tjcB48U.png"> 
    <img src="https://imgur.com/B9U5bXf.png">
</p>

### Inventario

1. Podemos ver una lista de los productos que estan en la BD; sin embargo, aquí sólo se muestra toda la información menos la descripción.

<p align="center"> 
    <img src="https://imgur.com/LYGGYJK.png"> 
    <img src="https://imgur.com/QWXWNDY.png"> 
    <img src="https://imgur.com/BTfufLc.png"> 
    <img src="https://imgur.com/tfcjiMC.png"> 
</p>

### Modificación de Productos

1. Podemos modificar la informacion detallada de un producto cualquiera del inventario pulsando el boton de **Modificar**.

<p align="center"> <img src="https://imgur.com/YNCzIsX.png"> </p>

2. Vemos una cómoda interfaz que te permite modificar todos los datos del producto, menos el código.

<p align="center"> <img src="https://imgur.com/ysXSjHY.png"> </p>

3. En este caso modificamos la marca, la cantidad y la imagen del producto.

<p align="center"> <img src="https://imgur.com/OxcJkkA.png"> </p>

4. Al pulsar **Actualizar**, nos saldrá una ventana emergente para confirmar la modificacion, pulsamos **Aceptar** si queremos confirmar, o **Calcelar** si no queremos confirmarla.

<p align="center"> <img src="https://imgur.com/66emcLO.png"> </p>

5. Nos redireccionará automaticamente al inventario, y podemos ver que se ha modificado con exito la informacion del producto, y no solo en la BD, si no también la imagen del explorador.

<p align="center"> 
    <img src="https://imgur.com/Z6RLoa8.png"> 
    <img src="https://imgur.com/2rsMAMq.png"> 
    <img src="https://imgur.com/wuxiPdi.png"> 
</p>

6. Otra funcionalidad que posee la modificación, es la limpieza de los datos, por si se necesita recuperar la información por defecto del producto.

<p align="center"> 
    <img src="https://imgur.com/tnOG6QS.png"> 
    <img src="https://imgur.com/PWF11L1.png"> 
</p>

### Eliminación

1. Es mucho mas simple, simplemente se pulsa el boton **X** que posee el producto.

<p align="center"> <img src="https://imgur.com/c3XzpBo.png"> </p>

2. Nos sale una ventana emergente para confirmar la eliminación.

<p align="center"> <img src="https://imgur.com/F8qp01u.png"> </p>

3. Vemos que ya no se posee el producto en el inventario, ni tampoco en la base de datos y un mensaje que nos confirma la operación.

<p align="center"> 
    <img src="https://imgur.com/FIRTTsG.png"> 
    <img src="https://imgur.com/qvvg0vX.png"> 
</p>

### Buscar Producto por Código

1. Primero tenemos que pulsar el boton de **Buscar Producto** en el cintillo de navegación que está en toda página después de iniciar sesión.

<p align="center"> <img src="https://imgur.com/ixyvcgL.png"> </p>

2. Podemos ver una interfaz que nos solicita el codigo del producto.

<p align="center"> <img src="https://imgur.com/GtYJwU3.png"> </p>

3. Ingresamos el código del producto a consultar y pulsamos el botón de **Buscar**, vemos que nos muestra todos los detalles del producto.

<p align="center"> <img src="https://imgur.com/dXAcf3r.png"> </p>

4. Entre los errores, puede ocurrir que coloquen letras en el **input** o que coloque un código de un producto que no existe.

<p align="center"> 
    <img src="https://imgur.com/Duw5XA9.png"> 
    <img src="https://imgur.com/pMBa0dL.png"> 
    <img src="https://imgur.com/2YRqEaS.png"> 
    <img src="https://imgur.com/aadOP3I.png"> 
</p>

### Crear Producto

1. Primero pulsamos el botón de **Ingresar Producto** en la barra de navegación.

<p align="center"> <img src="https://imgur.com/MpIjCHH.png"> </p>

2. Vemos una interfaz que nos permite ingresar toda la información del producto, menos el código, eso lo genera el mismo MDB.

<p align="center"> <img src="https://imgur.com/SboFbqx.png"> </p>

3. Ingresamos todos los datos y pulsamos el botón de **Guardar**.

<p align="center"> <img src="https://imgur.com/iLbMsIs.png"> </p>

4. Va a aparecer una ventana emergente que nos va a pedir la confirmacion para la inserción de los datos en la base de datos.

<p align="center"> <img src="https://imgur.com/hGSuz1S.png"> </p>

5. Podemos ver que lista el nuevo producto en el inventario y está ingresado en la base de datos.

<p align="center"> 
    <img src="https://imgur.com/gZPNkBa.png"> 
    <img src="https://imgur.com/ErMRLlO.png"> 
</p>

6. La creación también posee una opcion de limpieza de la pantalla para limpiar todos los **input**.

<p align="center"> <img src="https://imgur.com/ZDj4gBx.png"> </p>

### Salir del Sistema

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Por último podemos ver en la barra de navegacion que hay un botón de **Cerrar Sesión**, lo que al pulsarlo nos envía a la página de iniciar sesión.

<p align="center"> <img src="https://imgur.com/vbgTYzq.png"> </p>
<p align="center"> <img src="https://imgur.com/FtECWv1.png"> </p>


