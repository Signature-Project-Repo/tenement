<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <?php
    session_start();
    require("../../connect.php");
    if (isset($_POST['reset'])) {
        $e = $_POST["email"];
        $sql = "SELECT * FROM user_register WHERE email='$e'";
        $to = $e;
        $subject = 'Reset Password';
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: joelshibu100@gmail.com' . "\r\n";
        $message = file_get_contents("../Forget/temp.php");
        $message = str_replace("{Token}", $e, $message); // Load the HTML template
        if (mail($to, $subject, $message, $headers)) {
    ?>
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Email send Successfully!',
                }).then((result) => {
                    window.location.replace('../../loginpage/Login_v16/loginpage.html');
                });
            </script>
        <?php
        } else {
        ?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Email Sent Failed',
                }).then((result) => {
                    window.location.replace('../../loginpage/Login_v16/loginpage.html');
                });
            </script>
        <?php

        }
    } else {
        ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Account doesn\'t exsist!',
            }).then((result) => {
                window.location.replace('../../loginpage/Login_v16/loginpage.html');
            });
        </script>
    <?php

    }

    ?>
</body>

</html>