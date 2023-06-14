<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT</title>

    <link rel="stylesheet" href="MYCSS.css">
  
</head>
<body>
    <fieldset ><a href="index.html">HOME</a></fieldset><br><br>

    <form  class="mycontact">
      <fieldset > <label for="reciever">TO :</label>
        <input type="text" name="reciever"><br><br>

        <label for="sender">FROM :</label>
        <input type="text" name="sender" id=""><br><br>
        <label for="Subject">SUBJECT :</label><br><br>
        <textarea name="" id="" cols="30" rows="10"></textarea><br><br>
        <input type="submit" name="submit" id="sbmitbutton"> 
        
    </fieldset>
      <?php
         $servername="localhost";
         $username="root";
         $password="";
         $db_name="my_contact";

        //connect to the server
        $conn=mysqli_connect($servername, $username, $password, $db_name);
         if(!$conn){die("connection failed".mysqli_connect_error());}
        
         echo"CONTACT DETAILS" ."<br>";

         $sql = "SELECT*FROM `CONTACT`;";
         $results = $conn->query($sql);
         if ($results->num_rows>0) {
          while ($row = $results->fetch_assoc()) {
            echo "ID" .$row["ID"], " -Firstname" .$row["FIRST_NAME"], "  |Surname" .$row["SUR_NAME"],
             "  |Gender" .$row["GENDER"], "  |Date of birth" .$row["DATE_OF_BIRTH"],
              "  |Email" .$row["EMAIL"], "  |Password" .$row["PASSWORD"] ."<br>";
          }
         } else {
          echo "No results found!";
         }
         


?>
    </form>
</body>
</html>