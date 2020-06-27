<link rel="stylesheet" type="text/css" href="../css/estilos.css" />
<html>
    <head>
 <div id="encabezado">
<table>
   <tr>
  	   <td><img style="float:left;" src="../content/logo-telcel.gif" width="900" height="100" alt="" border="10"></td>
  	   <td bgcolor="gray"><h1>Nueva compania</h1></td>
           <td><img style="float:left;" src="../content/logo-telcel.gif" width="150" height="100" alt="" border="10"></td>
		   
	</tr>   
	   </table>
 </div>
   <!-- <script type="text/javascript" src="../js/utilerias.js"></script> -->
    </head>
    <br/>
    <hr/>
    <body bgcolor="#79FF91">
     <fieldset  class="form" style="width:500px;">
        <form method="post" action="../controller/compania.controller.php"  enctype="multipart/form-data">
            id_compania:<input type="text" name="id_compania" /><br/>
            nombre:<input type="text" name="nombre" /><br/>
            Direccion:<input type="text" name="direccion" /><br/>
           
            imagen:<br/><input type="file" id="imagen" name="imagen" acept="image/gif, image/jpeg, image/png"/><br/>
            
            <img id="previa" src="<?php echo  $registro['foto'] ?>" name="imagen" heigt="100px" width="100px" ochange="archivo(event)"/><br/>
            
            <input type="hidden" name="viewcompania" value="x"/>
            <input type="hidden" name="accion" value="addcompania"/>       
            <input type="submit" name="agregarcompania" value="agregar compania"/>
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
