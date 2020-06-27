<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="../css/estilos.css" />
        <script type="text/javascript" src="../js/utilerias.js"></script>
    </head>
    <body bgcolor="#79FF91">
        <div id="body">
            <div id="encabezado" >

   <table>
   <tr>
  	   <td><img style="float:left;" src="../content/iconos_eq_s4.png" width="100" height="100" alt="" border="3"></td>
  	   <td><h1 style="float:left; color:#17027D; font-family:arial black">Editar datos del TELEFONO</h1></td>
           <td><img style="float:left;" src="../content/logo_4glte.png" width="50" height="50" alt="" border="3"></td>
	</tr>   
	   </table>
	 </div>
            <div id="opciones">
              <h3>Editando</h3>
            </div>
            <div id="cuerpo">
                <br />
            <fieldset>
                 <form method="post" action="marca.controller.php" enctype="multipart/form-data" onchange="archivo(event)">
               <label>Editar marca</label>
                    <table>
                        <tr>
                            <td>id_marca:</td>
                            <td><input type="" name="" value="<?php if(!empty($marca['id_marca'])){echo $marca['id_marca'];}?>" readonly="readonly" /></td>
                        </tr>
                        <tr>
                            <td>pasillo:</td>
                          <td><input type="text" name="nom_marca" value="<?php if(!empty($marca['nom_marca'])){echo $marca['nom_marca'];}?>" /></td>
                        </tr>                       
                    </table>
                   
                   <input type="hidden" name="id_marca" value="<?php if(!empty($marca['id_marca'])){echo $marca['id_marca'];}?>"/>
                   <input type="hidden" name="viewmarca" value="editarmarca"/>
                   <input type="hidden" name="accion" value="editarmarca"/>
                    <input type="submit" value="Guardar" id="form" />
                    
                 </form>
                     </fieldset>            
               <br />
            </div>
            <br/>
            <hr/>
            <hr/>
            
            
        </div>
    </body>
</html>