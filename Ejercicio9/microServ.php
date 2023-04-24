<?php
	include "conexion.php";

	$pdo=new Conexion();

    switch($_SERVER['REQUEST_METHOD']){
        case 'GET':
            if(isset($_GET['ci']))
            {
                $sqls = "SELECT * FROM persona WHERE ci=:ci";
                $sql = $pdo->prepare($sqls);
                $sql->bindValue(':ci', $_GET['ci']);
                $sql->execute();
                $sql->setFetchMode(PDO::FETCH_ASSOC);
                header("HTTP/1.1 200 dato encontrado");
                echo json_encode($sql->fetchAll());
                exit;
            }
            else
            {
                $sqls="SELECT * FROM PERSONA";
                $sql = $pdo->prepare($sqls);
                $sql->execute();
                $sql->setFetchMode(PDO::FETCH_ASSOC);
                header("HTTP/1.1 200 hay datos");
                echo json_encode($sql->fetchAll());
                exit;	
            }
            break;
        case 'POST':
            $json = file_get_contents('php://input');
            $data = json_decode($json, true);
            $sql =  $pdo->prepare("INSERT INTO persona(ci,nombre_completo,fecha_de_nacimiento,departamento,telefono) VALUES(:ci,:nombre_completo,:fecha_de_nacimiento,:departamento,:telefono)");
            $sql->bindValue(':ci', $data['ci']);
            $sql->bindValue(':nombre_completo', $data['nombre_completo']);
            $sql->bindValue(':fecha_de_nacimiento', $data['fecha_de_nacimiento']);
            $sql->bindValue(':departamento', $data['departamento']);
            $sql->bindValue(':telefono', $data['telefono']);
            if ($sql -> execute()) {
                header("HTTP/1.1 200 INSERT");
            }else{
                echo $sql->errorInfo()[2];
            }   
            exit;
        break;
        case 'PUT':
            $json = file_get_contents('php://input');
            $data = json_decode($json, true);
            $sql = $pdo->prepare("UPDATE persona set ci=:ci, nombre_completo=:nombre_completo, 
            fecha_de_nacimiento=:fecha_de_nacimiento, departamento=:departamento, telefono=:telefono  WHERE ci=:ci");
            $sql->bindValue(':ci', $data['ci']);
            $sql->bindValue(':nombre_completo', $data['nombre_completo']);
            $sql->bindValue(':fecha_de_nacimiento', $data['fecha_de_nacimiento']);
            $sql->bindValue(':departamento', $data['departamento']);
            $sql->bindValue(':telefono', $data['telefono']);
            $sql->execute();
            header("HTTP/1.1 200 UPDATE");
            exit;
        break;

        case 'DELETE':
            $sql = $pdo->prepare("DELETE FROM persona WHERE ci=:ci");
            $sql->bindValue(':ci', $_GET['ci']);
            $sql->execute();
            header("HTTP/1.1 200 DELETE");
            exit;
        break;
    }

?>