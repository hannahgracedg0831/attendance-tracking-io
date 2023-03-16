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
    unset($_SESSION["admin_id"]);
    unset($_SESSION["admin_name"]);

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
                    window.location='../index.php';
                }, 1000)
            </script>
        ";
        exit();
    ?>

</body>
</html>