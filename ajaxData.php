<?php
//Include database configuration file
include('include/db_connect.php');

if(isset($_POST["region_id"]) && !empty($_POST["region_id"])){
    //Get all state data
    $query = $mysqli->query("SELECT * FROM region WHERE region_id = ".$_POST['region_id']." AND status = 1 ORDER BY region_name ASC");

    //Count total number of rows
    $rowCount = $query->num_rows;

    //Display states list
    if($rowCount > 0){
        echo '<option value="">Select state</option>';
        while($row = $query->fetch_assoc()){
            echo '<option value="'.$row['region_id'].'">'.$row['region_name'].'</option>';
        }
    }else{
        echo '<option value="">Region not available</option>';
    }
}

if(isset($_POST["region_id"]) && !empty($_POST["region_id"])){
    //Get all city data
    $query = $mysqli->query("SELECT * FROM district WHERE region_id = ".$_POST['region_id']." AND status = 1 ORDER BY dname ASC");

    //Count total number of rows
    $rowCount = $query->num_rows;

    //Display cities list
    if($rowCount > 0){
        while($row = $query->fetch_assoc()){
            echo '<option value="'.$row['district_id'].'">'.$row['dname'].'</option>';
        }
    }else{
        echo '<option value="">District not available</option>';
    }
}




?>
