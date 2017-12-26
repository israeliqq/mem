<?php  
function Conexion(){  
   $link = new mysqli('localhost', 'user','', 'mem');
   if ($link -> connect_errno) {

   die( "Fallo la conexión a MySQL: (" . $link -> mysqli_connect_errno() 
   . ") " . $link -> mysqli_connect_error());
   }
   //$link -> mysqli_close();

   return $link;  
}


function Consulta($distrito){  
   $result = Conexion()->query("SELECT * FROM institucion WHERE distrito = '".utf8_encode($distrito)."';");
   return $result;  
}

function Colegio($id){  
   $result = Conexion()->query("SELECT * FROM institucion WHERE id = '".$id."';");
   return $result;  
}

function matricula(){  
   $result = Conexion()->query("SELECT SUM(matricula) as total FROM institucion;");
   return $result;  
}

function funcionarios(){  
   $result = Conexion()->query("SELECT SUM(funcionarios) as total FROM institucion;");
   //total
   return $result;  
}

function cantidadColegios(){  
   $result = Conexion()->query("SELECT count(*) as total FROM institucion");
   //count(*)
   return $result;  
}
function noticias(){
    $result = Conexion()->query("SELECT html,autor,titulo FROM noticia");
    return $result; 

}

?> 
