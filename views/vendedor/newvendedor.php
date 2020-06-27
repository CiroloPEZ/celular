<link rel="stylesheet" type="text/css" href="../css/estilos.css" />
<html>
    <head>
 <div id="encabezado">
<table>
   <tr>
  	   <td><img style="float:left;" src="../content/logo-telcel.gif" width="900" height="100" alt="" border="10"></td>
  	   <td bgcolor="gray"><h1>Nuevo vendedor</h1></td>
           <td><img style="float:left;" src="../content/logo-telcel.gif" width="150" height="100" alt="" border="10"></td>
		   
	</tr>   
	   </table>
 </div>
    <script type="text/javascript" src="../js/utilerias.js"></script>
    </head>
    <br/>
    <hr/>
    <body bgcolor="#79FF91">
     <fieldset  class="form" style="width:500px;">
        <form method="post" action="../controller/vendedor.controller.php"  enctype="multipart/form-data">
            id_vendedor:<input type="text" name="id_vendedor" /><br/>           
            nombre:<input type="text" name="nombre" /><br/>
            apellido:<input type="text" name="apellido" /><br/>
            imagen:<br/><input type="file" id="imagen" name="imagen" acept="image/gif, image/jpeg, image/png"/><br/>
            <img id="previa" src="<?php echo $datos['imagen'] ?>" name="imagen" heigt="100px" width="100px" ochange="archivo(event)"/><br/>
            
            <input type="hidden" name="viewvendedor" value="x"/>
            <input type="hidden" name="accion" value="addvendedor"/>       
            <input type="submit" name="agregarvendedor" value="agregar vendedor"/>
          <br/>
        <center>
        <a href="vendedor.controller.php?vistavendedor=x&accion=viewvendedor">Lista Vendedores</a>
		
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
