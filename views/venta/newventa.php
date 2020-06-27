<link rel="stylesheet" type="text/css" href="../css/estilos.css" />

<html>
    <head>
    <div id="encabezado">
        <table>
            <tr>
                <td><img src="../content/logo_telcel.png" width="100" height="100" alt="" border="10"></td>
                <td bgcolor="gray"><h1>Agregar Venta</h1></td>
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
        <form method="post" id="form1" name="form1" action="../controller/venta.controller.php"  enctype="multipart/form-data">
        

            id_vendedor:
            <select name="id_vendedor">
            <?php
                if ($cel!=null) {
                    foreach ($cel as $dos) {
                       echo "<option value=".$dos['id_vendedor'].">".$dos['nombre']."," . $dos['apellido'] . "</option>";
                    }
                } echo "</select>";
                ?>
                <br/>
                fecha:<input type="date" name="fecha" /><br/>
                Hora:<input type="time" name=""/><br/>
                total:<input id='nombrebox' onKeyUp="listatotal();"
                 <br/><br/>
                 id_cliente:<select name="id_cliente" onchange="mostrarcliente();">
                    <?php
                    if ($cli != null) {
                        foreach ($cli as $dos) {
                            echo "<option value=" . $dos['id_cliente'] . ">" . $dos['id_cliente'] . "</option>";
                        }
                    }
                    ?></select>
                <br/>
                 Id_celular:<br/>
                    <select name="id_celular" onchange="mostrarcliente();">
                        <?php
                        if($celu!=null){
                        foreach ($celu as $nombre){
                            echo "<option value='".$nombre['id_celular']."'>".$nombre['id_modelo']."</option>";
                        }
                        
                        }
                        ?>
                    </select>
            
                <br/>
                num_venta:<input type="text" name="num_venta" /><br/>

                imagen:<br/><input type="file" id="imagen" name="imagen" acept="image/gif, image/jpeg, image/png"/><br/>
                <img id="previa" src="<?php echo $datos['imagen'] ?>" name="imagen" heigt="100px" width="100px" ochange="archivo(event)"/><br/>
                <br/>
                <input type="hidden" name="viewventa" value="x"/>
                <input type="hidden" name="accion" value="addventa"/>       
                <input type="submit" name="addventa" value="agregar venta"/>
                <br/>
                <center>
                    <a href="venta.controller.php?vistaventa=x&accion=listaventas">Lista de ventas</a>

                </center>
        </form>
    </fieldset>
    <table id="ciro">
        
        <tr><td>total</td><td>imagen</td></tr>
    </table>
    <br/>
    <div id="pie">
        <hr />
        <div id="ut"><h3>Universidad Tecnologica Del Sur Del Estado De Mexico</h3></div>
        <div id="nom"><h3>Celulares telcel</h3></div>
        <div id="tics"><h3>Tecnologias De La Informacion Y Comunicacion</h3></div>
    </div> 
</body>

</html>

