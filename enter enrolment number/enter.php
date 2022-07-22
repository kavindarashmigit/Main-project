<html>
    <head>
        <title>enter enrolment number</title>
        <style>
            body{
                background-color:whitesmoke;
            }
            input{
                width:40%;
                height:5%;
                border:1px;
                border-radius: 05px;
                padding:8px 15px 8px 15px;
                margin:10px 0px 15px 0px;
                box-shadow:1px 1px 2px 1px grey;

            }
            </style>

    </head>
</html>
<body>
    <center>
        <h1>
            Enter the enrolment number
        </h1>
        <form action="" method="POST">
            <input type="text" name="enrolment_number" placeholder="enter enerolment number"><br/>
            <input type="submit" name="search" value="search data">
        </form>
        <?php

          $connection=mysqli_connect("localhost","root","");
          $db=mysqli_select_db($connection,'medical_center');

          if(isset($_POST['search']))
          {
            $enrolment_number=$_POST['enrolment_number'];
            $query="SELECT * FROM student_rejister where enrolment_number='$enrolment_number'";
            $query_run = mysqli_query($connection,$query);
           
            while($row = mysqli_fetch_array($query_run))
          {

          ?>
          <form action="" method="post">
            
            <input type="text" name="enrolment_number" value="<?php echo $row['enrolment_number']?>" >
            <input type="text" name="name_with_initial" value="<?php echo $row['name_with_initial']?>">
            <input type="text" name="name_in_full"value="<?php echo $row['name_in_full']?>">
            <input type="text" name="phone_number"value="<?php echo $row['phone_number']?>">
            <input type="text" name="birth_day"value="<?php echo $row['birth_day']?>">
            <input type="text" name="home_town"value="<?php echo $row['home_town']?>">
            <input type="text" name="medical_certificate"value="<?php echo $row['medical_certificate']?>">
           
          
        </form>
        <?php
          }
        }
       ?>
    </center>
</body>