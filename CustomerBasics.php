<?php
 $CustomerName = $_POST['CustomerName'];
 $Tablenumber = $_POST['Tablenumber'];
$conn = new mysqli ('localhost','root','','customerbasic');
$sql = "Insert into customer_info(CustomerName,Tablenumber) values('$CustomerName','$Tablenumber')";
if ($conn->query($sql)===TRUE){
    if(isset($_POST['submit'])){
    header("Location: veg.html");            
    }else{
        header("Location: non-veg.html");
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>