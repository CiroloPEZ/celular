<link rel="stylesheet" type="text/css" href="../css/estilos.css" />
<html>
    <head>
 <div id="encabezado">
<table>
   <tr>
  	   <td><img src="../content/logo_telcel.png" width="100" height="100" alt="" border="10"></td>
  	   <td bgcolor="gray"><h1>Agregar Celular</h1></td>
           <td><img src="../content/logo_4glte.png" width="90" height="90" alt="" border="10"></td>
		   
	</tr>   
	   </table>
 </div>
    <script type="text/javascript" src="../js/utilerias.js"></script>
    </head>
    <br/>
    <hr/>
    <body bgcolor="#79FF91">
     <fieldset  class="form" style="width:500px;">
        <form method="post" action="../controller/cliente.controller.php"  enctype="multipart/form-data">
            id_cliente:<input type="text" name="id_cliente" /><br/>
            nom_cliente:<input type="text" name="nom_cliente" /><br/>
            credito:<input type="text" name="credito" /><br/>
            imagen:<br/><input type="file" id="imagen" name="imagen" acept="image/gif, image/jpeg, image/png"/><br/>
            <img id="previa" src="<?php echo $datos['imagen'] ?>" name="imagen" heigt="100px" width="100px" ochange="archivo(event)"/><br/>
            
            <input type="hidden" name="viewcliente" value="x"/>
            <input type="hidden" name="accion" value="addcliente"/>       
            <input type="submit" name="agregarcliente" value="agregar cliente"/>
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
