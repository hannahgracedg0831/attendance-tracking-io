
<?php
    // fetch in Dbase Student Table Exp array
    require_once "../connection.php";
    include  '../function.php';
    session_start();
    if(empty($_SESSION['guard_id'])){
        header("location: ../index.php");
        exit;
     }
   
    $guard_id = $_SESSION['guard_id'];
        // $guard_id = 'Mark';
    if(isset($_GET['qrcode'])
    ) {
        
      
        date_default_timezone_set("Singapore");
        $qrCode =$_GET['qrcode'];
        $date = date('Y-m-d');
		$time = date('h:i:sa');
       $position = getPosition($qrCode);
    
    //   $Id='';
if($position =='student'){
        $sql = "SELECT * FROM tbl_students WHERE barcode='$qrCode'";
        $result = mysqli_query($con,$sql);
        if (mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result);
        if(
            $row['status'] == '1'
        ){
            echo json_encode(array(

                    
                "message" => 'Suspended',
                "status"  => 'suspended'
            ));
die();
        }
        $Id =$row['student_no'];
        $student = array(
            "Id" => $row['student_no'],
            "fname"     => $row['first_name'],
            "lname"     => $row['last_name'],
            "mname"     => $row['middle_name'],
            "course"    => $row['course']
        );
  
        // echo "<script>alert($row)</script>";
        $type = $position;
        $datas = [
                $Id => [
                    'TimeIn' => $time,
                    'GuardIn' => $guard_id,
                    'TimeOut' => '',
                    'GuardOut' => '',
                    'Date'=>$date,
                    'type' => $type
                ]
            ];
        }
        $data = file_get_contents('../jsonLogs/'.$date.'.json');
        $Logs = json_decode($data, true);
        $TF=0;
        foreach ($Logs as $key => $value) {
            if (array_key_exists($Id, $value) && empty($value[$Id]['TimeOut'])) {
                $Logs[$key][$Id]['TimeOut'] = $time;
                $Logs[$key][$Id]['GuardOut'] = $guard_id;
                $TF = false;
                
                echo json_encode(array(

                    
                    "message" => $student,
                    "status"  => 'logout'
                ));
                break;
            }else{
                $TF = true;
            }
        }
        if($TF){
            $Logs[] = $datas;
            echo json_encode(array(
                "message" => $student,
                "status"  => 'success'
            ));
        }
        

        $jsonData = json_encode($Logs,JSON_PRETTY_PRINT);
        // encode json and save to file
        file_put_contents('../jsonLogs/'.$date.'.json',$jsonData);
    }
    else if($position =='staff'){
        $sql1 = "SELECT * FROM tbl_staff WHERE staff_id='$qrCode'";
        $result = mysqli_query($con,$sql1);
        if (mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result);
        $Id =$row['staff_id'];
        $staff = array(
            "sId" => $row['staff_id'],
            "sfname"     => $row['fname'],
            "slname"     => $row['lname'],
            "smname"     => $row['mname'],
            "position"    => $row['position']
        );
  
        // echo "<script>alert($row)</script>";
        $type =  $row['position'];
        $datas = [
                $Id => [
                    'TimeIn' => $time,
                    'GuardIn' => $guard_id,
                    'TimeOut' => '',
                    'GuardOut' => '',
                    'Date'=>$date,
                    'type' => $type
                ]
            ];
        }
          $data = file_get_contents('../jsonLogs/'.$date.'.json');
        $Logs = json_decode($data, true);
        $TF=0;
        foreach ($Logs as $key => $value) {
            if (array_key_exists($Id, $value) && empty($value[$Id]['TimeOut'])) {
                $Logs[$key][$Id]['TimeOut'] = $time;
                $Logs[$key][$Id]['GuardOut'] = $guard_id;
                $TF = false;
                
                echo json_encode(array(

                    
                    "message" => $staff,
                    "status"  => 'slogout'
                ));
                break;
            }else{
                $TF = true;
            }
        }
        if($TF){
            $Logs[] = $datas;
            echo json_encode(array(
                "message" => $staff,
                "status"  => 'staff'
            ));
        }
        $jsonData = json_encode($Logs,JSON_PRETTY_PRINT);
        // encode json and save to file
        file_put_contents('../jsonLogs/'.$date.'.json',$jsonData);
    }

    else if($position =='visitor'){
        $sql = "SELECT * FROM tbl_visitor WHERE visitor_id='$qrCode'";
        $result = mysqli_query($con,$sql);
        if (mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result);
        $Id =$row['visitor_id'];
        $visitor = array(
            
            "vId" => $row['visitor_id'],
            "facility" => $row['facility']
       
        );
  
        // echo "<script>alert($row)</script>";
        $type = $position;
        $datas = [
                $Id => [
                    'TimeIn' => $time,
                    'GuardIn' => $guard_id,
                    'TimeOut' => '',
                    'GuardOut' => '',
                    'Date'=>$date,
                    'type' => $type
                ]
            ];
        }
  
        $data = file_get_contents('../jsonLogs/'.$date.'.json');
        $Logs = json_decode($data, true);
        $TF=0;
        foreach ($Logs as $key => $value) {
            if (array_key_exists($Id, $value) && empty($value[$Id]['TimeOut'])) {
                $Logs[$key][$Id]['TimeOut'] = $time;
                $Logs[$key][$Id]['GuardOut'] = $guard_id;
                $TF = false;
                echo json_encode(array(

                    "message" => $visitor,
                    "status"  => 'vlogout'
                ));
                break;
            }else{
                $TF = true;
            }
        }
        if($TF){
            $Logs[] = $datas;
            echo json_encode(array(
                "message" => $visitor,
                "status"  => 'visitor'
            ));
        }
        $jsonData = json_encode($Logs,JSON_PRETTY_PRINT);
        // encode json and save to file
        file_put_contents('../jsonLogs/'.$date.'.json',$jsonData);
    } 
    else{
        echo json_encode(array(
            "message" => 'Please Enter Library QR Code!',
            "status"  => 'error'
        ));  
    }
      
        
    } 
     else{
        echo json_encode(array(
            "message" => 'Undefined QR Code!',
            "status"  => 'errors'
        ));  
    }

?>