<?php
  include ('../Conexion/Conexion.php');
   $db = new Database();
   $con = $db->Conectar();  

   $correcto = false;
   
   if (isset($_POST['id'])) {
       
   } else {
       $P_Nombre = $_POST['P_Nombre'];
       $S_Nombre = $_POST['S_Nombre'];
       $P_apellido = $_POST['P_apellido']; 
       $S_apellido = $_POST['S_apellido'];
       $Doc_identidad = $_POST['Doc_identidad'];
       $email = $_POST['email'];
       $password = $_POST['password'];
       $rol = $_POST['rol']; 
       
       $query = $con->prepare("INSERT INTO usuarios (p_nombre, s_nombre, p_apellido, s_apellido, identidad, correo, passwords, rolesId)
                VALUES (:p_n, :s_n, :p_a, :s_a, :identidad, :correo, :pass, :rol)"); 
       
            $resultado = $query->execute(array(
            ':p_n' => $P_Nombre,
            ':s_n' => $S_Nombre,
            ':p_a' => $P_apellido,
            ':s_a' => $S_apellido,
            ':identidad' => $Doc_identidad,
            ':correo' => $email,
            ':pass' => $password,
            ':rol' => $rol
          ));
                
       if ($resultado) {
          $correcto = true;
       }
 
        

   }
   
    