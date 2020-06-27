<link rel="stylesheet" type="text/css" href="../css/estilos.css" />
<html>
    <head>
 <div id="encabezado">
<table>
   <tr>
  	   <td><img style="float:left;" src="../content/3.png" width="200" height="100" alt="" border="10"></td>
           <td><img style="float:left;" src="../content/3.png" width="100" height="100" alt="" border="10"></td>
            <td><img style="float:left;" src="../content/3.png" width="200" height="100" alt="" border="10"></td>
  	   <td bgcolor="gray"><h1>Agregar Marca</h1></td>
           <td><img style="float:left;" src="../content/3.png" width="200" height="100" alt="" border="10"></td>
           <td><img style="float:left;" src="../content/3.png" width="100" height="100" alt="" border="10"></td>
           <td><img style="float:left;" src="../content/3.png" width="200" height="100" alt="" border="10"></td>
	</tr>   
	   </table>
 </div>
    <script type="text/javascript" src="../js/utilerias.js"></script>
    </head>
    <br/>
    <hr/>
    <body bgcolor="#79FF91">
     <fieldset  class="form" style="width:500px;">
        <form method="post" action="../controller/marca.controller.php"  enctype="multipart/form-data">
             id_marca:<input type="text" name="id_marca" /><br/>
             nom_marca:<input type="text" name="nom_marca" /><br/>           
            <input type="hidden" name="viewmarca" value="x"/>
            <input type="hidden" name="accion" value="addmarca"/>       
            <input type="submit" name="agregarmarca" value="agregar marca"/>
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
