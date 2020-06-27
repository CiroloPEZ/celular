<link rel="stylesheet" type="text/css" href="../css/estilos.css" />
<html>
    <head>
 <div id="encabezado">
   <table>
   <tr>
  	   <td><img style="float:left;" src="../content/7.jpeg" width="200" height="100" alt="" border="10"></td>
           <td><img style="float:left;" src="../content/7.jpeg" width="100" height="100" alt="" border="10"></td>
            <td><img style="float:left;" src="../content/7.jpeg" width="200" height="100" alt="" border="10"></td>
  	   <td bgcolor="gray"><h1>Agregar Modelo</h1></td>
           <td><img style="float:left;" src="../content/7.jpeg" width="200" height="100" alt="" border="10"></td>
           <td><img style="float:left;" src="../content/7.jpeg" width="100" height="100" alt="" border="10"></td>
           <td><img style="float:left;" src="../content/7.jpeg" width="200" height="100" alt="" border="10"></td>
	</tr>   
	   </table>
 </div>
    <script type="text/javascript" src="../js/utilerias.js"></script>
    </head>
    <br/>
    <hr/>
    <body bgcolor="#79FF91">
     <fieldset  class="form" style="width:500px;">
        <form method="post" action="../controller/modelo.controller.php"  enctype="multipart/form-data">
            id_modelo:<input type="text" name="id_modelo" /><br/>
            id_marca:
            <select name= "id_marca">
          <?php
               if($mode!=null){ 
                   foreach($mode as $dos) {
                 
                        echo "<option value=".$dos['id_marca'].">".$dos['nom_marca']."</option>";
                  
               }}
                ?></select>
            <br/>
            nombre:<input type="text" name="nombre" /><br/>
            costo:<input type="text" name="costo" /><br/>
            imagen:<br/><input type="file" id="imagen" name="imagen" acept="image/gif, image/jpeg, image/png"/><br/>
            <img id="previa" src="<?php echo $datos['imagen'] ?>" name="imagen" heigt="100px" width="100px" ochange="archivo(event)"/><br/>
            
            <input type="hidden" name="viewmodelo" value="x"/>
            <input type="hidden" name="accion" value="addmodelo"/>       
            <input type="submit" name="addmodelo" value="agregar modelo"/>
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
