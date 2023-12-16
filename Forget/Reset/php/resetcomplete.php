<html>
 <head>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 </head>   
<body>
    <?php
    require('../../connect.php');
    session_start();
    if (isset($_POST ['update'])) {
        $id = $_POST['email'];
        $pass=$_POST["password"];
        $pass1=$_POST["cpassword"];
        $sql = "SELECT * FROM user_register WHERE email ='$id'";
        if (num($sql) != 0) {
            $res = sel($sql);
            $row = mysqli_fetch_assoc($res);
            $ssid = $row['email'];
            if ($pass == $pass1){
        $sql2 = "UPDATE registration SET password='$pass',cpassword='$pass1' where email ='$id'";
        if(update($sql2)){

        $sql3 ="UPDATE loginpage SET password='$pass' where email='$ssid'";
        if(update($sql3)){

        
            
    ?>
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Updated Successfully!',
                }).then((result) => {
                    window.location.replace('../../index.html');
                })
            </script>
        <?php
        } else {
        ?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Updation Denied!',
                }).then((result) => {
                    window.location.replace('../../index.html');
                })
            </script>
            <?php
        }
                }
    
            } else {
                ?>
                    <script>
                        Swal.fire({
                            icon: 'error',
                            title: 'Password Mismatch!',
                        }).then((result) => {
                            window.location.replace('../../index.html');
                        })
                    </script>
                    <?php
                }
        }
    }
    ?>
</body>

</html>