<html>
 <head>
   <meta charset="utf-8">
   <link href="p1.css" rel="stylesheet" type="text/css"/>
   <title>Tabla</title>
 </head>
 <body>

   <table width="100%" id="tabla">
     <tr>
       <th>Datos</th>
     </tr>
     <tr>
       <th>Nombre: </th>
       <td> <?php echo htmlspecialchars($_REQUEST['nombre']); ?> </td>
     </tr>

     <tr>
       <th>Email: </th>
       <td> <?php echo htmlspecialchars($_REQUEST['Email']) ?> </td>
     </tr>

     <tr>
       <th>Contraseña: </th>
       <td> <?php echo htmlspecialchars($_REQUEST['Pass1']) ?> </td>
     </tr>

     <tr>
       <th>Edad: </th>
       <td> <?php echo htmlspecialchars($_REQUEST['Edad']) ?> </td>
     </tr>

     <tr>
       <th>Telefono: </th>
       <td> <?php echo htmlspecialchars($_REQUEST['tlf']) ?> </td>
     </tr>

     <tr>
       <th>Sexo: </th>
       <td> <?php echo htmlspecialchars($_REQUEST['sex']) ?> </td>
     </tr>

     <tr>
       <th>Género musical: </th>
       <td> <?php
         $genero_musical = $_REQUEST['genero'];

         for ($i=0; $i < count($genero_musical); $i++) {
         echo " ".$genero_musical[$i];
         }
         ?> </td>
     </tr>

     <tr>
       <th>Descripción: </th>
       <td> <?php echo htmlspecialchars($_REQUEST['descripcion']) ?> </td>
     </tr>

     <tr>
       <th>Imagen: </th>
       <td> <?php
       $nombre_archivo=$_FILES['imagen']['name'];
       move_uploaded_file($_FILES['imagen']['tmp_name'],"uploads/$nombre_archivo");

       if($_REQUEST['metodo']=="POST" && $_REQUEST['codificacion'] == "multipart/form-data"){
       echo "<img src='http://localhost/~sint78/Practica/uploads/$nombre_archivo' height=\"100\" width=\"100\" />";
     }else{
       echo htmlspecialchars($_REQUEST['imagen']);
     }


        ?> </td>
     </tr>

     <tr>
       <th>Servidor php elegido: </th>
       <td> <?php echo htmlspecialchars($_REQUEST['server']) ?> </td>
     </tr>

     <tr>
       <th>Metodo elegido: </th>
       <td> <?php echo htmlspecialchars($_REQUEST['metodo']) ?> </td>
     </tr>

     <tr>
       <th>Codificación: </th>
       <td> <?php echo htmlspecialchars($_REQUEST['codificacion']) ?> </td>
     </tr>

     <tr>
       <th>Hora: </th>
       <td> <?php echo htmlspecialchars($_REQUEST['hora']) ?> </td>
     </tr>

     <tr>
       <th>Version Navegador: </th>
       <td> <?php echo htmlspecialchars($_REQUEST['navegador']) ?> </td>
     </tr>

</body>
</html>
