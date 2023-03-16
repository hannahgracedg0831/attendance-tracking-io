<html>
    <head>
        <!-- SweetAlert -->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script type="text/javascript" src="../js/sweetalert2/sweetalert2.js"></script>
        <link rel="stylesheet" href="../css/sweetalert2/sweetalert2.css">
    </head>
<body>

<?php
session_start();
require_once "../connection.php";

if (isset($_POST['login']))
{
	$g_username		= $_POST['username'];
	$g_password	= $_POST['password'];
  // $pass= password_verify($password,$_POST['password']);

	$sql = "SELECT * FROM tbl_user WHERE username='$g_username'";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result);
  
     
        if (mysqli_num_rows($result) > 0) {
            $id = $row['user_id'];
            $sqls = "SELECT * FROM tbl_staff WHERE staff_id='$id'";
            $results = mysqli_query($con,$sqls);
            $rows = mysqli_fetch_array($results);
            //if(password_verify($u_password, $row["u_password"]))  { 
                if($rows['position']== 'Guard'){
                if (mysqli_num_rows($results) > 0) {
              if (password_verify($g_password,$row["password"]))
              {
                  
              $charat = substr($rows['mname'], 0, 1);
              $name = $rows['fname'] . ' ' . $charat . '. ' . $rows['lname'];
            
                $_SESSION['guard_name'] = $name;
                $_SESSION['guard_id'] = $rows['staff_id'];
                date_default_timezone_set("Singapore");
                $date = date('Y-m-d');
                $staffId=$rows['staff_id'];
                $time = date('h:i:sa');
                $dates=[
                        $rows['staff_id']=> [
                            'date'=>$date
                        ]

                        ];
                $datas =[
                    $rows['staff_id'] => [
                        'TimeIn'=> $time,
                        "GuardIn"=>$rows['staff_id'],
                        "TimeOut"=> "",
                        "GuardOut"=>"",
                        "Date"=> $date,
                        "type"=>$rows['position']
                    ]
                ];
                $data = file_get_contents('../jsonLogs/'.$date.'.json');
                $datelogs = file_get_contents('../jsonLogs/date-logs.json');
                $TF=0;
                $logdate = json_decode($datelogs, true);
                $json_arr = json_decode($data, true);
                foreach ($logdate as $key => $value) {
                    foreach ($value as $k => $v) {
  
                  if ($v['date']==$date) {
                        
                        $TF = false;
                       
                    }else{
                        $TF = true;
                    }
                  }
                }
                if($TF){
                    $logdate[] = $dates;
                }
              
                $json_arr[] = $datas;
                $jsonData = json_encode($json_arr,JSON_PRETTY_PRINT);
               
                $jsonDates = json_encode($logdate,JSON_PRETTY_PRINT);
                // encode json and save to file
                file_put_contents('../jsonLogs/'.$date.'.json',$jsonData);
                file_put_contents('../jsonLogs/date-logs.json',$jsonDates);
                if($row["status"]=='default'){
                                echo "<script>
                                Swal.fire({
                                        position: 'top',
                                        icon: 'success',
                                        title: 'Login Successfully!',
                                        showConfirmButton: false,
                                        timer: 1000
                                        });
                                </script>";
                                echo "
                                    <script>
                                        setTimeout( async() => {
                                            window.location='../sample.php';
                                        }, 1000)
                                    </script>";
              }
              else if($row["status"]=='active'){
                
                                echo "<script>
                                    Swal.fire({
                                            position: 'top',
                                            icon: 'success',
                                            title: 'Login Successfully!',
                                            showConfirmButton: false,
                                            timer: 1000
                                            });
                                    </script>";

                                echo "
                                    <script>
                                        setTimeout( async() => {
                                            window.location='../guard/index.php';
                                        }, 1000)
                                    </script>";
                                
              }
              else if($row["status"]=='disabled'){
                
                            echo "<script>
                                Swal.fire({
                                        position: 'top',
                                        icon: 'error',
                                        title: 'This account is disabled!',
                                        showConfirmButton: false,
                                        timer: 1000
                                        });
                                </script>";

                            echo "
                                <script>
                                    setTimeout( async() => {
                                        window.location='../index.php';
                                    }, 1000)
                                </script>";
              }
            else{
                        echo "<script>
                            Swal.fire({
                                    position: 'top',
                                    icon: 'error',
                                    title: 'Login Failed!',
                                    showConfirmButton: false,
                                    timer: 1000
                                    });
                            </script>";

                        echo "
                            <script>
                                setTimeout( async() => {
                                    window.location='../index.php';
                                }, 1000)
                            </script>
                        ";
            } 
        }
            else{
                echo "<script>
                    Swal.fire({
                            position: 'top',
                            icon: 'error',
                            title: 'Login Failed!',
                            showConfirmButton: false,
                            timer: 1000
                            });
                    </script>";

                echo "
                    <script>
                        setTimeout( async() => {
                            window.location='../index.php';
                        }, 1000)
                    </script>
                ";
            
            } 
       
    }else{
        echo "<script>
        Swal.fire({
                position: 'top',
                icon: 'error',
                title: 'Login Failed!',
                showConfirmButton: false,
                timer: 1000
                });
        </script>";

    echo "
        <script>
            setTimeout( async() => {
                window.location='../index.php';
            }, 1000)
        </script>
    ";
    }
} else if($rows['position']== 'Admin'){
    if (mysqli_num_rows($results) > 0) {
        if (password_verify($g_password,$row["password"]))
        {
            
        $charat = substr($rows['mname'], 0, 1);
        $name = $rows['fname'] . ' ' . $charat . '. ' . $rows['lname'];
      
          $_SESSION['admin_name'] = $name;
          $_SESSION['admin_id'] = $id;
          echo "<script>
          Swal.fire({
                  position: 'top',
                  icon: 'success',
                  title: 'Login Successfully!',
                  showConfirmButton: false,
                  timer: 1000
                  });
          </script>";

      echo "
          <script>
              setTimeout( async() => {
                  window.location='../admin/index.php';
              }, 1000)
          </script>";
        }
      else{
                  echo "<script>
                      Swal.fire({
                              position: 'top',
                              icon: 'error',
                              title: 'Login Failed!',
                              showConfirmButton: false,
                              timer: 1000
                              });
                      </script>";

                  echo "
                      <script>
                          setTimeout( async() => {
                              window.location='../index.php';
                          }, 1000)
                      </script>
                  ";
      } 
  }
      else{
          echo "<script>
              Swal.fire({
                      position: 'top',
                      icon: 'error',
                      title: 'Login Failed!',
                      showConfirmButton: false,
                      timer: 1000
                      });
              </script>";

          echo "
              <script>
                  setTimeout( async() => {
                      window.location='../index.php';
                  }, 1000)
              </script>
          ";
      
      } 
}
}else{
    echo "<script>
    Swal.fire({
            position: 'top',
            icon: 'error',
            title: 'Login Failed!',
            showConfirmButton: false,
            timer: 1000
            });
    </script>";

echo "
    <script>
        setTimeout( async() => {
            window.location='../index.php';
        }, 1000)
    </script>
";
} 


}
  ?>

</body>
</html>