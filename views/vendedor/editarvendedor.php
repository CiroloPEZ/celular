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
  	   <td><h1 style="float:left; color:#17027D; font-family:arial black">Editar datos del VENDEDOR</h1></td>
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
                 <form method="post" action="vendedor.controller.php" enctype="multipart/form-data" onchange="archivo(event)">
               <label>Editar vendedor</label>
                    <table>
                        <tr>
                            <td>id_vendedor:</td>
                            <td><input type="" name="" value="<?php if(!empty($vendedor['id_vendedor'])){echo $vendedor['id_vendedor'];}?>" readonly="readonly" /></td>
                        </tr>
                        <tr>
                            <td>nombre:</td>
                            <td><input type="text" name="nombre" value="<?php if(!empty($vendedor['nombre'])){echo $vendedor['nombre'];}?>" /></td>
                        </tr>
                        <tr>
                            <td>apellido:</td>
                            <td><input type="text" name="apellido" value="<?php if(!empty($vendedor['apellido'])){echo $vendedor['apellido'];}?>" /></td>
                        </tr>
                        <tr>
                            <td>imagen:</td>
                            <td><input type="file" name="imagen"/></td>
                           <td><img id="previa" src="<?php echo $vendedor['imagen']; ?>" name="foto" width="90" height="90"/></td>
                        </tr>
                        
                    </table>
                   
                    <input type="hidden" name="id_vendedor" value="<?php if(!empty($vendedor['id_vendedor'])){echo $vendedor['id_vendedor'];}?>"/>
                    <input type="hidden" name="imagenanterior" value="<?php if(!empty($vendedor['imagen'])){echo $celular['imagen'];}?>"/>
                    <input type="hidden" name="viewvendedor" value="x"/>
                   <input type="hidden" name="accion" value="editarvendedor"/>
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