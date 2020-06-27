<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="../css/estilos.css" />
    </head>
     <body bgcolor="white">
            <div id="encabezado">
                <table>
           <td><img style="float:left;" src="../content/4.jpg" width="1300" height="100" alt="" border="3"></td>
                </table>
           <hr/>
            </div>
           <div id="menu">
            <ul>
            <li>
                  <a class="enlace"  href="marca.controller.php?vistamarca=x&accion=newmarca">Agregar marca</a>
            </li> 
             <li>
                 <a class="enlace" href="modelo.controller.php?vistamodelo=x&accion=viewmodelo">Modelos</a>
             </li>
             <li>
	         <a class="enlace"  href="compania.controller.php?vistacompania=x&accion=viewcompania">Companias</a>
	    </li>
            
           
         </ul>
               
            <hr/>
            </div>
                <div id="cuerpo">
                <br />
                <table> 
                        <tr>
                            <td>id_marca</td>
                            <td>nom_marca</td>
                        </tr>
                <?php
                $nima=0;
                if($datos!=null){
                    
                foreach($datos as $registro)
                {
                 if ($nima==0 || ($nima%5)==0) echo '<tr>';
                 echo"<td>".$registro['id_marca']."";
                 echo"<td>".$registro['nom_marca']."";
                 echo"<br/><a href='marca.controller.php?vistamarca=x&accion=editarmarca&id_marca=".$registro["id_marca"]."'>
                 editar</a> ";   
                 echo "<br/>";
                 echo "<a href='marca.controller.php?vistamarca=x&accion=eliminarmarca&id_marca=".$registro["id_marca"]."'> Eliminar</a>";
                 
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
    </body>
</html>
