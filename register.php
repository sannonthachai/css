<?php require("mysql/config.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="th">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
        <meta name="language" content="th" />
        <title>TAKO TOUR | Register</title>
        <meta name="description" content="Register" />
        <meta name="Author" content="Tako Tour, sannonthachai@gmail.com" />
        <meta name="robots" content="index,follow" />
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="AutoProvince.js"></script>
        <link rel="stylesheet" href="css/style-register.css" type="text/css" media="all" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    </head>
    <body>
    <?php if(isset($_GET['nname'])){
        $nname=$_GET['nname'];
        require("emp_select.php");
        $action="emp_update.php";
    }else{
        $nname="";
        $sex="";
        $age="";
        $pnumber="";
        $email="";
        $id="";
        $pass="";
        $action="emp_insert.php";
    }
    ?>
        <div class="logo-detail">
            <img src="picture/logo.jpg" />
        </div>
        <div>
        <i class='fas fa-address-card' style='font-size:36px'></i>
        <h3>กรุณากรอกข้อมูลดังนี้</h3>
        <form action="<?php echo($action);?>" method="POST" target="_self">
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name.." maxlength="20">
            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Your last name.." maxlength="20">
            <label for="nname">Nick Name</label>
            <input type="text" id="nname" name="nickname" placeholder="Your nickname.." maxlength="10" value="<?php echo($nname)?>">
            <label for="sex">Sex</label>
            <select id="sex" name="sex">
                <option value="null"></option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
            <label for="age">Age</label>
            <input class="age-d" type="text" id="age" name="age" placeholder="Your age.." maxlength="2">
            <label class="div" for="pnumber">Phone Number</label>
            <input type="text" id="pnumber" name="phonenumber" placeholder="Your phone number.." maxlength="10">
            <label for="email">E-Mail</label>
            <input type="text" id="email" name="email" placeholder="E-Mail" maxlength="35">
            <label for="address">Address</label>
            <input type="text" id="address" name="address" placeholder="Your address" maxlength="35">
            <label class="div" for="province">Province</label>
            <select id="province" name="province">
                <option>- Province -</option>
            </select>      
            <label class="div" for="amphur">Amphur</label>
            <select id="amphur" name="amphur">
                <option>- Amphur -</option>
            </select>  
            <label class="div" for="district">District</label>
            <select id="district" name="district">
                <option>- District -</option>
            </select> 
            <label class="div" for="postcode">Postcode</label> 
            <input class="age-d" type="text" id="postcode" name="postcode" placeholder="Postcode" readonly="readonly">
            <label class="div" for="id">ID</label>
            <input type="text" id="id" name="ID" placeholder="ID" maxlength="15">
            <label for="pass">Password</label>
            <input type="password" id="pass" name="password" placeholder="Password" maxlength="15">
            <label for="re-pass">Confirm Password</label>
            <input type="password" id="re-pass" name="re-password" placeholder="Password" maxlength="15">
            <div class="sub-d">
                <input type="submit" value="Submit">
            </div>
        </form>
        </div>   
    <script type="text/javascript">
    document.getElementById('sex').value="<?php echo($sex);?>";
    </script>
    <script src="js/jquery.js" type="text/javascript"></script>
    </body>
</html>