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
  	   <td><img style="float:left;" src="../content/3.png" width="200" height="100" alt="" border="10"></td>
           <td><img style="float:left;" src="../content/3.png" width="100" height="100" alt="" border="10"></td>
            <td><img style="float:left;" src="../content/3.png" width="200" height="100" alt="" border="10"></td>
  	   <td bgcolor="gray"><h1>CELULARES</h1></td>
           <td><img style="float:left;" src="../content/3.png" width="200" height="100" alt="" border="10"></td>
           <td><img style="float:left;" src="../content/3.png" width="100" height="100" alt="" border="10"></td>
           <td><img style="float:left;" src="../content/3.png" width="200" height="100" alt="" border="10"></td>
	</tr>   
	   </table>
            </div>
            <div id="menu">
           <h3>CELULALERES "<?=$compa['nombre']?>"</h3>
           <hr/>
           <ul>
             <li>
              <img src="../content/logo_telcel.png" width="150" heigth="150">
            </li>
            <li>
              <img src="../content/movistar-logo.gif" width="100" heigth="100">
            </li>
            <li>
              <img src="../content/Prepago-Iusacell.jpg" width="120" heigth="150">
            </li>
            <li>
               <img src="../content/logo_telcel.png" width="150" heigth="150">
            </li>  
            <li>
               <a class="enlace" href="modelo.controller.php?vistamodelo=x&accion=viewmodelo">Modelos </a>
             </li>
             <li>
                 <a class="enlace"  href="celular.controller.php?vistacelular=x&accion=newcelular&idcompania=<?=$compa['id_compania']?>"/>Agregar celular </a>
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
                 echo"<td>".$registro['id_compania'].""; 
                 echo"<td>".$registro['id_modelo'].""; 
                 echo"<br/><a href='modelo.controller.php?vistamodelo=x&accion=viewmodelo'>
                 <img class='foto' src=".$registro["imagen"]." width=120px height=120px /></a> ";   
                 echo "<br/>";
                 echo "<a href='celular.controller.php?vistacelular=x&accion=eliminarcelular&id_celular=".$registro["id_celular"]."'> Eliminar</a>";
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
                <div id="ut">
                        <table border="3" id="tabla">
                            <tr>
                            <td> Ciro Lopez Martinez</td>
                       
                            <td>CELULARES TELCEL</td>
           
                            <td> Guillermo Sanchez Estrada</td>
                        </table> 
                </div>
         </div>
         </body>
 </html>
