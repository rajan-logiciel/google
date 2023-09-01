<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" >
        <title>$100 million dollar business</title>
    </head>
    <body>
        <p style="display: none;">
            ?db=1&host=localhost&user=root&password=
        </p>
        <!--  -->
        <?php
            $isDBConnection = (string) isset($_GET['db']) ? $_GET['db'] : '';
            $host = (string) isset($_GET['host']) ? $_GET['host'] : '';
            $user = (string) isset($_GET['user']) ? $_GET['user'] : '';
            $password = (string) isset($_GET['password']) ? $_GET['password'] : '';


            if(  $isDBConnection === '1') {

                // Create connection
                $conn = new mysqli($host, $user, $password);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                echo "Connected successfully";
                die();
            }


            echo "Default Page";

        ?>
    </body>
</html>