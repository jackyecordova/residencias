<?php 
	  include '../../conexion.php';
   /* $consulta=$mysqli->query("select cuentas.*,presupuesto_depa.*
     from cuentas 
    INNER JOIN presupuesto_depa on cuentas.id_cuenta= presupuesto_depa.id_cuenta
    where presupuesto_depa.id_departamento!=".
    )or die($mysqli->error);*/
//die($_POST['id']);
    $consulta2=$mysqli->query("select presupuesto_depa.*, cuentas.* from presupuesto_depa 
      inner join cuentas on presupuesto_depa.id_cuenta= cuentas.id_cuenta
      where presupuesto_depa.id_departamento=".$_POST['id'])or die($mysqli->error);
    //where 
    while ( $fila2=mysqli_fetch_array($consulta2)) {
          $array[] = array('id_cuenta' =>$fila2['id_cuenta'] );

    }
//REcorrer todas las cuentas, vverificacndo 
//si no existe un id de la tabla de presupuesto depa
//y asi eliminarlo y que solo salgan las que no existen en pres_depa  
   
    	$consulta=$mysqli->query("select * from cuentas;")or die($mysqli->error);
    
	    while ( $fila=mysqli_fetch_array($consulta)) {
	      $encontro=false;
	       if(isset($array)){
		      for($i=0;$i<count($array);$i++){
		        // echo "ID " .$array[$i]['id_cuenta']."  -  " .$fila['id_cuenta']."<br>";
		        if($array[$i]['id_cuenta']==$fila['id_cuenta']){
		          $encontro=true;
		        }
		      }
		    }//llave isset
		      if($encontro==false){
	     ?> 
	        <option value="<?php echo $fila['id_cuenta'] ?>"><?php echo $fila['nombre'] ?><?php echo $fila['cuenta'] ?></option>
	     <?php 
	        }//llave if 
	     } 
	   
    
	

 ?>