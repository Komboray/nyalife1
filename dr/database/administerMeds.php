<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administer medicine</title>
    <link rel="icon" type="image/x-icon" href="nya-logo.jpg">
</head>
<body>
    <?php
        include("connect.php");
        $sql = "SELECT * 
                FROM `patients`";
        $res = mysqli_query($sql, $conn);
        if($res){
            $num = mysqli_num_rows($res);
            if($num>0){
                while($row = mysqli_fetch_assoc($res)){
                    echo $row["id"];
                    echo $row["name"];
                    echo $row["email"];
                }
            }
        }
    ?>
</body>
</html>