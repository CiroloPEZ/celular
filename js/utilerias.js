 function mostrarcliente()
 
 {
 var id_cliente=document.getElementById("id_cliente").value;
         
            $.getJSON("../model/data.php?id_cliente="+id_cliente,{format:"json"},function(data){            
              var res="<center><tr><td><b>id_cliente:</b>"+data['id_cliente']+"<br/>"; 
              res=res+"<b>total del costo:</b>"+data['total']+"<br/>";
              res=res+"<img src='"+data['foto']+"' width=100px height=100/></td></tr></center>";
               document.getElementById("ciro").innerHTML=res;
               
        });
 }
     
       