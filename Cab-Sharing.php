<?php

include 'connection.php';


if(isset($_POST['mySubmit'])){
    $name = $_POST['myName'];
    $date = $_POST['myDate'];
    $time = $_POST['myTime'];
    $email = $_POST['myEmail'];
    $phone = $_POST['myNumber'];
    $starting = $_POST['location'];
    $ending = $_POST['destination'];

    $sql = "insert into `cab-form` (`Name`,`Date`,`Time`,`Email_Id`,`Contact-No`,`Starting point`,`Ending point`) 
    values('$name','$date','$time','$email','$phone','$starting','$ending')";
    $result=mysqli_query($con,$sql);
    if($result){
      echo "Data inserted successfully";
    }else{
      die(mysqli_error($con));
    }
    // echo $sql;


}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IITH Cab-Sharing</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="taxi.png" type="image/x-icon">
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,300&family=Oswald:wght@200&display=swap"
        rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }
        h1 {
            font-family: 'Merriweather', serif;
        }
        body {
            background-image: url("https://wpshopmart.com/html/demo/car-website-template/img/bg.png");
            background-size: 100%;
            background-repeat: no-repeat;
        }

        .head {
            /* background-color: #ffa938; */
            margin: 5px 0px;
            border: 2px solid black;
            border-radius: 8px;
            border: none;
            position: absolute;
            color: white;
            margin: 50px;
            font-size: 25px;
            text-align: left;
            
        }

        header {
            /* background-color: aqua; */
            display: block;
            text-align: center;
           
        }
        h1 span{
    color: #d43242;
}

        form {
            text-align: center;
            margin-top: 40px;
        }

        .form {
            color: #ffa938;
            font-family: 'Merriweather', serif;
            font-size: 20px;
        }

        input {
            width: 100%;
            padding: 5px 10px;
            margin: 8px 0;
            border: 2px solid black;
            border-radius: 4px;
        }

        input[type=submit] {
            width: 5%;
        }

        input:hover {
            background-color: lightgrey;
            color: blue;
        }

        .divClass {
            display: inline-block;
            height: 350px;
            width: 350px;
            text-align: left;
        }

        input[type=submit] {
            width:30%;
            background-color: #d43242;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }
    </style>
</head>

<body>
    <header class="head">
        <h1 class="content">  IITH <br> Cab-<span>Sharing</span> <br> <u> Form </u> </h1>
    </header>
    <form  method = "post" autocomplete="on">
        <div class="divClass">
            <div class="form">
                Name: <input type="text" name="myName" placeholder="Enter your name" required>
            </div>
            <br>
            <div class="form">
                Date: <input type="date" name="myDate" required>
            </div>
            <br>
            <div class="form">
                Time: <input type="time" name="myTime" required>
            </div>
            <br>
            <div class="form">
                Email_Id: <input type="email" name="myEmail" placeholder="Enter your IITH Mail_ID" required>
            </div>
            <br>
            <div class="form">
                Contact-No: <input type="number" name="myNumber" placeholder="Enter your mobile number" required>
            </div>
            <br>
            <div class="form">
                Startin Point: <input type="text" name="location" placeholder="Enter your Starting point" required>
            </div>
            <br>
            <div class="form">
                Ending point: <input type="text" name="destination" placeholder="Enter your Droping point" required>
            </div>
            <br>
            <div class="row">
                <button type ="submit" name="mySubmit">Submit
            </div>
        </div>


    </form>

</body>

</html>