<link rel="stylesheet" type="text/css" href="../css/estilos.css" />
<html>
    <head>
 <div id="encabezado">
<table>
   <tr>
  	  <td><img style="float:left;" src="../content/4.jpg" width="1300" height="100" alt="" border="3"></td>
	</tr>   
	   </table>
 </div>
    <script type="text/javascript" src="../js/utilerias.js"></script>
    </head>
    <br/>
    <hr/>
    <body bgcolor="#79FF91">
     <fieldset  class="form" style="width:500px;">
        <form method="post" action="../controller/celular.controller.php"  enctype="multipart/form-data">
            id_celular:<input type="text" name="id_celular" /><br/>
            id_modelo:
            <select name="id_modelo">
            <?php
               if($mod!=null){ 
                 echo "<option value=".$mode["id_modelo"].">".$mode['id_modelo']."</option>";
                 }
                ?>
            </select>
            <br/>
            color:<input type="text" name="color" /><br/>
            imei:<input type="text" name="imei" /><br/>
            estatus:<input type="text" name="estatus" /><br/>
             compania:<select name= "id_compania">
            <?php
               if($compa!=null){
                   
                        echo "<option value=".$compa['id_compania'].">".$compa['nombre']."</option>";
                        
               }
                ?></select>
              <br/>  
            imagen:<br/><input type="file" id="imagen" name="imagen" acept="image/gif, image/jpeg, image/png"/><br/>
            <img  src="<?php echo $newcelular['imagen']?>" name="imagen" heigt="100px" width="100px" ochange="archivo(event)"/><br/>
            
            <input type="hidden" name="viewcelular" value="x"/>
            <input type="hidden" name="accion" value="addcelular"/>       
            <input type="submit" name="agregarcelular" value="agregar celular"/>
          <br/>
        <center>
        <a href="celular.controller.php?vistacelular=x&accion=viewcelular">vista celular</a>
		
        </center>
        </form>
        </fieldset>
        <br/>
          <div id="pie">
                <hr />
                <div id="ut"><h3>Universidad Tecnologica Del Sur Del Estado De Mexico</h3></div>
                <div id="nom"><h3>Celulares telcel</h3></div>
                <div id="tics"><h3>Tecnologias De La Informacion Y Comunicacion</h3></div>
            </div> 
        </body>
 </html>