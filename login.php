
 <?php

    include "db_con.php";

    if (isset($_POST['email']) && isset($_POST['psw'])) {
        function validate($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $emai = validate($_POST['email']);
        $psw = validate($_POST['psw']);

        if (empty($emai)) {
            header("location: index.php?error = User name is required");
            exit();
        } else if (empty($psw)) {
            header("location: index.php?error = Password is required");
            exit();
        } else {
            $sql = "SELECT * FROM users WHERE email = '$emai' AND passwd = '$psw'";

            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result)) {
                header("location:home.php");
                exit();
            }
        }
    }
    header("location: index.php?error = Wrong data");




    ?>