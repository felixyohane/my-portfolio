  <!DOCTYPE html>
<html>
    <head>
        <title>FELIX</title>
        <link rel="stylesheet" href="MYCSS.css"/>
        <script src="Myjavascript.js" type="text/javaScript">
      
        </script>
    </head  >
    
    <body  onload="displayGreeting(),changingImage()">
         <marquee scrollamount="15" behavior="alternate"> <h1 id="greeting"></h1></marquee>
           
          <fieldset id="hed">
            <p id="name">NAME: FELIX YOHANE</p>
            <a href="Contact.html" id="contact">CONTACT</a>
            <a href="Myskills.html" id="about"> MY SKILLS</a>
          </fieldset></br></br>
           
           
        <h1 >INTRODUCTION</h1>
        <P> 
            My name is Felix Yohane and am a student of mzuzu universty doing ICT level 2. My aim is to become an expert in
            CSS, JavaScript,  Html, java programming, python, C programing and Php. As a beginer this is my first web page to develop and
            I would like to request people who are  expert in the css, JavaScript, html and Php to support me on how I can improve 
            my page so that it can become resiponsive. Since am a beginer to develop the web page, am only familier with HTML and not CSS but 
            I tried to add some CSS in this page.
            
        </P>
          
          <img src="IMG_20221124_095027_465.jpg" width="500px" height="600px"/>

          <fieldset id="pic">
             <h2>MY PROJECTS</h2>
    
        
        <p>
          The following icons represent different languages and each language icon is the link that will take you to the book of
          that language.
        </p></br>


           <img name="slideshow" width="" height="">
          
        </fieldset> 
        <?php
         $servername="localhost";
         $username="root";
         $password="";
         $db_name="my_projects";

        //connect to the server
        $conn=mysqli_connect($servername, $username, $password, $db_name);
         if(!$conn){die("connection failed".mysqli_connect_error());}
        
         echo"PROJECT DETAILS" ."<br>";

         $sql = "SELECT*FROM `projects`;";
         $results = $conn->query($sql);
         if ($results->num_rows>0) {
          while ($row = $results->fetch_assoc()) {
            echo "ID" .$row["ID"], " -Project Name" .$row["PROJECT_NAME"] ."<br>";
          }
         } else {
          echo "No results found!";
         }
         ?>

        <h3> MY SKILLS </h3>
        <ol>
          <li>Adding css to a web page</li>
          <li>Using JavaScript to validate form field</li>
          <li>Creating tables in html</li>
          
        </ol>

          <form  method="post" action="#" onsubmit=" return checkforblank()">
            <fieldset class="mycontact">

            <h2> CONTACT FORM</h2><br><br>

            <label for="firstname" >First Name</label>
            <input type="text" name="firstname" id="FirstName" placeholder="Enter First Name"><br><br>

            <label for="Surname">Surname</label>
            <input type="text" name="Surname" id="SurName" placeholder="Enter Surname"><br><br>
            GENDER :
            <label for="gender">Male</label>
            <input type="radio" name="gender" id="Malegender">

            <label for="gender1">Female</label>
            <input type="radio" name="gender" id="Femalegender">

            <label for="gender2">Others</label>
            <input type="radio" name="gender" id="othergender"><br><br>

            <label for="date">Date Of Birth</label>
            <input type="date" name="startdate" id="dateofbirth"><br><br>

            <label for="Email">Email</label>
            <input type="email" name="email" id="Myemail" placeholder="Example@gmail.com"><br><br>

            <label for="password">password</label>
            <input type="password" name="password" id="Mypassword" placeholder="Enter password"><br><br>

            <input type="submit" name="submit" id="submit">
          </fieldset>
         </form><br><br>
            
        <fieldset id="footer">
          <footer>
           <img src="19-38-15-gtss5XcuxVW7gAAAABJRU5ErkJggg==.jpg" width="50px" height="50px"> Contact : 0995414054 / 0884179173&emsp; &emsp;&emsp; &emsp;      
           <img src="19-35-00-images.jpg" width="50px" height="50px"> Email : felixyohane9@gmail.com&emsp; &emsp;&emsp;&emsp; &emsp;
           <img src="19-29-02-whatsapp-png-image-9.png" width="50px" height="50px"> Whatsapp : 0884179173
          </footer>
        </fieldset>
    </body>
</html>