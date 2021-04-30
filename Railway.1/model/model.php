<?php 

require_once 'db_connect.php';

function userLogin($uname, $password){
	$conn = db_conn();
	$selectQuery = "SELECT COUNT(*) FROM admin_list where Uname = '$uname' and Password = '$password'";
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetchColumn();

    return $row;
}

function insertData($data){
	$conn = db_conn();
    $selectQuery = "INSERT into admin_list (FullName, Phone, Email, DateOfBirth, Gender, Uname, Password)
VALUES (:fname, :phone, :email, :dob, :gender, :uname, :password)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':fname' => $data['fname'],
        	':phone' => $data['phone'],
        	':email' => $data['email'],
        	':dob' => $data['dob'],
            ':gender' => $data['gender'],
        	':uname' => $data['uname'],
            ':password' => $data['password'],
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function insertTrain($data){
    $conn = db_conn();
    $selectQuery = "INSERT into train_info (TrainNo, TrainName, StartingPoint, ArrivalTime, Destinationpoint, DepartureTime, Date)
VALUES (:trno, :trname, :stpoint, :artime, :dspoint, :detime, :date)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':trno' => $data['trno'],
            ':trname' => $data['trname'],
            ':stpoint' => $data['stpoint'],
            ':artime' => $data['artime'],
            ':dspoint' => $data['dspoint'],
            ':detime' => $data['detime'],
            ':date' => $data['date'],

        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function getTableData(){
    $conn = db_conn();
    $selectQuery = "SELECT TrainNo, TrainName, StartingPoint, ArrivalTime, Destinationpoint, DepartureTime, Date from train_info WHERE DATE > (SELECT NOW())";
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function delete($id){
    $conn = db_conn();
    $selectQuery = "DELETE FROM `train_info` WHERE TrainNo = '$id'";
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;
    return true;
}

