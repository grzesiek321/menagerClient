<?php
  header('Content-Type: application/json');
 
  
  $host ="localhost";
  $user= "root";
  $password="123456";
  $dbname="baza_klientow";
  $dsn = "mysql:host=" . $host . ";dbname=" . $dbname;
  $pdo = new PDO($dsn, $user, $password); 


  $dataJs = json_decode(file_get_contents('php://input'), true);
  
   
  function createTable($pdo){
    $query = " SELECT * FROM pacjenci ";
    $statement = $pdo->query($query);
    $data = $statement->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode( $data);
  }

  function delateRow($pdo,$nameid){
    $query = " SELECT * FROM pacjenci WHERE name= :nameid";
    $statement = $pdo->prepare($query);
    $statement->execute(["nameid"=>$nameid]);
    $data = $statement->fetch(PDO::FETCH_ASSOC);
    echo json_encode( $data);
  }

  function resendData ($pdo,$nameid){
    $query = " SELECT * FROM pacjenci WHERE name= :nameid";
    $statement = $pdo->prepare($query);
    $statement->execute(["nameid"=>$nameid]);
    $data = $statement->fetch(PDO::FETCH_ASSOC);
    echo json_encode( $data);
  }
  

  if (isset($dataJs)) {
   
    $name = $dataJs["name"];
    $birthdate = $dataJs["birthdate"];
    $address = $dataJs["address"];
    $phone_number = $dataJs["phone_number"];
    $action= $dataJs["action"];
  
   switch ($action) {
      case "add" :
         $updateQuery= "INSERT INTO pacjenci(  name ,birthdate , address, phone_number) VALUES ( :name ,:birthdate , :address, :phone_number)";
         $stmtUp=$pdo->prepare($updateQuery);
         $stmtUp->execute(["name" => $name , "birthdate" => $birthdate , "address" =>$address , "phone_number" => $phone_number ]);
         resendData($pdo,$name);
        break;
      case "delate" :
          resendData($pdo,$name);
         $updateQuery= "DELETE FROM  pacjenci WHERE name = :name ";
         $stmtUp=$pdo->prepare($updateQuery);
         $stmtUp->execute(["name" => $name ]);
        break;
   }
  }
  else{
    createTable($pdo);
  }


?>