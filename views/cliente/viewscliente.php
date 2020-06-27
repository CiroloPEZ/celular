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
  	   <td><img style="float:left;" src="../content/logo_telcel.png" width="300" height="120" alt="" border="3"></td>
           <td bgcolor="gray"><h1 style="float:left; color:white; font-family:'arial black';">&nbsp; &nbsp; TELCEL &nbsp; &nbsp; </h1></td>
           <td><img style="float:left;" src="../content/logo_4glte.png" width="300" height="120" alt="" border="3"></td>
	</tr>   
	   </table>
            </div>
             <div id="menu">
           <h3>CELULALERES "TELCEL"</h3>
           <hr/>
           <ul>
           <li>
	       <a class="enlace"  href="cliente.controller.php?vistacliente=x&accion=newcliente">Agregar cliente </a>
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
                 echo"<td>".$registro['id_cliente']."";
                 echo"<td>".$registro['nom_cliente']."";
                 echo"<br/><a href='cliente.controller.php?vistacliente=x&accion=editarcliente&id_cliente=".$registro["id_cliente"]."'>
                 <img class='foto' src=".$registro["imagen"]." width=120px height=120px /></a> ";   
                 echo "<br/>";
                 echo "<a href='cliente.controller.php?vistacliente=x&accion=eliminarcliente&id_cliente=".$registro["id_cliente"]."'> Eliminar</a>";
                 echo " <a href='cliente.controller.php?vistacliente=x&accion=ventacelular&id_cliente=".$registro["id_cliente"]."'>Comprar</a>";
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
                <div id="ut"><h5>Universidad Tecnologica Del Sur Del Estado De Mexico</h5></div>
                <div id="nom"><h5>Celulares telcel </h5></div>
                <div id="tics"><h5>Tecnologias De La Informacion Y Comunicacion</h5></div>
            </div>
        </div>
    </body>
</html>
