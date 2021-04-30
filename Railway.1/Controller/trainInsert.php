<?php  

session_start();
require_once '../model/model.php';

 $message = '';  
 $error = '';  
 $insert = 1;
 if(isset($_POST["submit"]))  
 {  
      
      if(empty($_POST["trno"]))  
      {  
           $error = "<label class='text-danger'>Enter Train No</label>";  
      }

      else if(empty($_POST["trname"]))  
      {  
           $error = "<label class='text-danger'>Enter Train name</label>";  
      }  

      else if(empty($_POST["stpoint"]))  
      {  
           $error = "<label class='text-danger'>Enter Starting Point Name</label>";  
      }  

      else if(empty($_POST["artime"]))  
      {  
           $error = "<label class='text-danger'>Enter Arrival Time</label>";  
      } 


      else if(empty($_POST["dspoint"]))  
      {  
           $error = "<label class='text-danger'>Enter Destination Point Name</label>";  
      } 

      else if(empty($_POST["detime"]))  
      {  
           $error = "<label class='text-danger'>Enter Departure Time</label>";  
      }  

      else if(empty($_POST["date"]))  
      {  
           $error = "<label class='text-danger'>Enter a Date</label>";  
      }  
      
      else  
      {  
          if ($insert == 1) {
            $data['trno'] = $_POST['trno'];
            $data['trname'] = $_POST['trname'];
            $data['stpoint'] = $_POST['stpoint'];
            $data['artime'] = $_POST['artime'];
            $data['dspoint'] = $_POST['dspoint'];
            $data['detime'] = $_POST['detime'];
            $data['date'] = $_POST['date'];
        
                if (insertTrain($data)) {
                   $message = 'Successfully added!!';
                   $insert = 0;
                }     
          } 
      }  
 }  

 function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 ?>  