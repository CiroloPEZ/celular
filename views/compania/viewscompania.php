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
  	   <td><img style="float:left;" src="../content/logo-telcel.gif" width="1300" height="100" alt="" border="3"></td>
         
	</tr>   
	   </table>
            </div>
           <div id="menu">
           <h3>CELULALERES "TELCEL"</h3>
           <hr/>
          <ul>
               <li>
                 <a class="enlace" href="venta.controller.php?vistaventa=x&accion=viewventa">Venta</a>
             </li>
             <li>
	         <a class="enlace"  href="compania.controller.php?vistacompania=x&accion=newcompania&idcompania=<?=$compa['idcompania']?>">Agregar Compania</a>
	    </li>
            <li>
	         <a class="enlace"  href="vendedor.controller.php?vistavendedor=x&accion=newvendedor">Vendor</a>
	    </li>
            <li>
              <img src="../content/logo_telcel.png" width="150" heigth="150">
            </li>
            <li>
              <img src="../content/movistar-logo.gif" width="100" heigth="100">
            </li>
            <li>
              <img src="../content/Prepago-Iusacell.jpg" width="120" heigth="150">
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
                 echo"<td>".$registro['nombre']."";
                 echo"<br/><a href='celular.controller.php?vistacelular=x&accion=viewcelular&id_compania=".$registro['id_compania']."'>
                 <img class='foto' src=".$registro["imagen"]." width=120px height=120px /></a> ";
                 
                
                 echo "<br/>";
                 echo "<a href='compania.controller.php?vistacompania=x&accion=eliminarcompania&id_compania=".$registro["id_compania"]."'> Eliminar</a>";
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
