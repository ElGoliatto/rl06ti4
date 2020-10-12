<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>TEST</title>
        
    </head>
    <body>
    <form method="post">
        Imię: <input type="text" name="imie"><br>
        Nazwisko: <input type="text" name="nazwisko"><br>
        <input type="submit" value="rezerwuj" name="wys">
    </form>
    <?php
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="baza";
        $conn=new mysqli($servername,$username,$password,$dbname);
        
        if(isset($_POST['wys']))
        {
            $imie = $_POST["imie"];
            $nazwisko = $_POST["nazwisko"];
            $sql="INSERT INTO baza1(ID,IMIE,NAZWISKO) VALUES (NULL,'$imie','$nazwisko')";
            if(mysqli_query($conn,$sql)){
                echo "udalo sie dodac rekord";
            }
        }
        $conn->close();
        ?>
    </body>   
</html>