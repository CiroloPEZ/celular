<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="../css/estilos.css" />
    </head>
     <body bgcolor="#B7FFFF">
        <div id="body">
            <div id="encabezado">

   <table>
       <tr>
         <td><img style="float:left;" src="../content/4.jpg" width="1300" height="100" alt="" border="3"></td>
	</tr>   
	   </table>
            </div>
             <div id="menu">
           <h3>MODELOS</h3>
           <hr/>
           <ul>
           <li>
               <a class="enlace"  href="marca.controller.php?vistamarca=x&accion=viewmarca">Marca</a>
            </li>
           <li>
             <a class="enlace"  href="compania.controller.php?vistacompania=x&accion=viewcompania">Companias</a>
           </li>
           <li>
	       <a class="enlace"  href="modelo.controller.php?vistamodelo=x&accion=newmodelo">Agregar Modelo</a>
	    </li>
           </ul>
               <hr/>
            </div>
                <div id="cuerpo">
                <br />
                <table>
                <?php
                $nima=0;
                if($datos!=null){
                    
                foreach($datos as $registro)
                {
                 if ($nima==0 || ($nima%5)==0) echo '<tr>';
                 echo"<td>".$registro['id_modelo']."";
                 echo"<td>".$registro['id_marca']."";
                 echo"<br/><a href='modelo.controller.php?vistamodelo=x&accion=editarmodelo&id_modelo=".$registro["id_modelo"]."'>
                 <img class='foto' src=".$registro["imagen"]." width=120px height=120px /></a> ";   
                 echo "<br/>";
                 echo "<a href='modelo.controller.php?vistamodelo=x&accion=eliminarmodelo&id_modelo=".$registro["id_modelo"]."'> Eliminar</a>";
                 echo " <a href='modelo.controller.php?vistamodelo=x&accion=editarmodelo&id_modelo=".$registro["id_modelo"]."'>Editar</a>";
                 $nima=$nima+1;
                 if ($nima==0 || ($nima%5)==0) echo '</tr>';
   
                 }
                }
                
                 echo " </tr> ";
                 ?>
             
                    </table>
           
                <br />
                <hr/>
            </div>
            <br/>
         <div id="pie">
                <hr />
                <table>
                    <tr><td>
                       <h5>Universidad Tecnologica Del Sur Del Estado De Mexico</h5>
                    </td>
                    <td>
                <h5>Celulares telcel </h5></td>
                    <td>
                <h5>Tecnologias De La Informacion Y Comunicacion</h5></td>
                    </tr>
                </table>
            </div>
    </body>
</html>
