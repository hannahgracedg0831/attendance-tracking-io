<html>
    <head>
        <!-- SweetAlert -->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script type="text/javascript" src="../js/sweetalert2/sweetalert2.js"></script>
        <link rel="stylesheet" href="../css/sweetalert2/sweetalert2.css">
    </head>
<body>

<?php
$conn = mysqli_connect('localhost','root','','attendancetrackingdb');

$restore =$_GET['restore'];
$filename = 'file/'.$restore;
$handle = fopen($filename,"r+");
$contents = fread($handle,filesize($filename));
$sql = explode(';',$contents);

foreach($sql as $query){
  // $result = mysqli_query($conn,$query);
  if(mysqli_query($conn,$query)){
      // echo '<tr><td><br></td></tr>';
      // echo '<tr><td>'.$query.' <b>SUCCESS</b></td></tr>';
      // echo '<tr><td><br></td></tr>';  
echo "<script>
    Swal.fire({
    position: 'top',
    icon: 'success',
    title: 'Imported Successfully!',
    showConfirmButton: false,
    timer: 1000
    });
    </script>";

echo "<script>
    setTimeout( async() => {
    window.location='main-backupRestore.php';
    }, 1000)
    </script>";  

  }
}
fclose($handle);
?>

</body>
</html>