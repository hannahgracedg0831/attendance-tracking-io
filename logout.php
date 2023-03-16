<html>
    <head>
        <!-- SweetAlert -->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script type="text/javascript" src="js/sweetalert2/sweetalert2.js"></script>
        <link rel="stylesheet" href="css/sweetalert2/sweetalert2.css">
    </head>
<body>

    <?php   

        session_start();
        $guard_id = $_SESSION['guard_id'];

        // echo "$guard_id";
        $date = date('Y-m-d');
		$time = date('h:i:sa');

        $data = file_get_contents('jsonLogs/'.$date.'.json');
        $Logs = json_decode($data, true);
        foreach ($Logs as $key => $value) {
            if (array_key_exists($guard_id, $value) && empty($value[$guard_id]['TimeOut'])) {
                $Logs[$key][$guard_id]['TimeOut'] = $time;
                $Logs[$key][$guard_id]['GuardOut'] = $guard_id;
            
                // echo json_encode(array(

                //     "message" => $guard_id,
                //     "status"  => 'logout'
                // ));
              
            }
        }
        $jsonData = json_encode($Logs,JSON_PRETTY_PRINT);
        file_put_contents('jsonLogs/'.$date.'.json',$jsonData);
       
        unset($_SESSION["guard_id"]);
        unset($_SESSION["guard_name"]);

        echo "<script>
                Swal.fire({
                        position: 'top',
                        icon: 'success',
                        title: 'Logout Successfully!',
                        showConfirmButton: false,
                        timer: 1000
                        });
                </script>";

        echo "
            <script>
                setTimeout( async() => {
                    window.location='index.php';
                }, 1000)
            </script>
        ";
        exit();
    ?>

</body>
</html>