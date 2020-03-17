<?php
    $conn = mysqli_connect("localhost","USER_NAME","PASSWORD","DATABASE_NAME");
    
    $data = $_POST['text_field'];
    $data = implode(",",$data);
    
    $query = "INSERT INTO `test`(`data`) VALUES ('$data')";
    if(mysqli_query($conn,$query)){
        echo "Success: Data successfully inserted";
    }else{
        echo "Error: Could not insert data into table";
    }
?>
