<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/estilos.css" />
        <title></title>
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
           <h3>Ventas Telcel</h3>
           <hr/>
           <ul>
            <li>
                 <a class="enlace" href="vendedor.controller.php?vistavendedor=x&accion=viewvendedor">vendedor</a>
            </li>
             <li>
             <a class="enlace"  href="cliente.controller.php?vistacliente=x&accion=viewcliente">Datos del Cliente </a>
             </li>
             <li>
	        <a class="enlace"  href="venta.controller.php?vistaventa=x&accion=newventa&idvendedor=<?=$cel['id_vendedor']?>">Agregar venta </a>
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
                 echo"<td>".$registro['id_celular']."";
                 //echo"<td>".$registro['id_vendedor']."";
                 echo"<br/><a href='venta.controller.php?vistaventa=x&accion=editarventa&id_celular=".$registro["id_celular"]."'>
                 <img class='foto' src=".$registro["imagen"]." width=120px height=120px /></a> ";   
                 echo "<br/>";
                 echo "<a href='venta.controller.php?vistaventa=x&accion=eliminarventa&id_celular=".$registro["id_celular"]."'> Eliminar</a>";
                 echo " <a href='venta.controller.php?vistaventa=x&accion=editarventa&num_venta=".$registro["num_venta"]."'>Reporte de la venta</a>";
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
        </div>
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