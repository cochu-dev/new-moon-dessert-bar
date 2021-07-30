<?php
function connectMysql()
{
    $servername = "testhost";
    $username = "myadmin"; // your username
    $password = "myadmin"; //your password
    $database = "cpsc2030_project";
    $conn = new mysqli($servername, $username, $password, $database);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    return $conn;

}


function getAllProducts($conn){
    $query = "select * from products ORDER BY Product_ID";
    $result = $conn->query($query);
    
    $allProducts=[];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()){
            $allProducts[]=$row;
        }
    } else {
        return null;
    }
    return $allProducts;
}

function getProducts($P_ID,$conn){
    $query = "select * from products where Product_ID='$P_ID'";
    $result = $conn->query($query);

    $products=[];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()){
            $products[]=$row;
        }
    } else {
        return null;
    }
    return $products;
}






?>