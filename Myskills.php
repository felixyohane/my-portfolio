<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY SKILLS</title>
    <a href="index.html">HOME</a>
</head>
<body>
    <h1>STUDENT TABLE</h1>
    <table border="1">
        <tr>
            <th>FirstName</th>
            <th>SurName</th>
            <th>ID NUMBER</th>
            <th>STUDENT ID</th>
            <th>REG NUMBER</th>
        </tr>

        <tr>
            <td>Felix</td>
            <td>Yohane</td>
            <td>OONJODR2</td>
            <td>BEDICT3021</td>
            <td>BEDICT3021</td>
        </tr>
    </table>
    <?php
         $servername="localhost";
         $username="root";
         $password="";
         $db_name="myskills";

        //connect to the server
        $conn=mysqli_connect($servername, $username, $password, $db_name);
         if(!$conn){die("connection failed".mysqli_connect_error());}
        
         echo"SKILLS DETAILS" ."<br>";

         $sql = "SELECT*FROM `skills`;";
         $results = $conn->query($sql);
         if ($results->num_rows>0) {
          while ($row = $results->fetch_assoc()) {
            echo "ID" .$row["ID"], " -Skills details" .$row["SKILLS_DETAILS"]."<br>";
          }
         } else {
          echo "No results found!";
         }
         ?>
</body>
</html>