<?php require("mysql/config.php")?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="th">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" charset="utf-8"/>
        <title>EMPLOYEE SYSTEM</title>
    </head>
    <body>
        <?php
        $nname=$_POST['nname'];
        $sex=$_POST['sex'];
        $age=$_POST['age'];
        $pnumber=$_POST['pnumber'];
        $email=$_POST['email'];
        $id=$_POST['id'];
        $pass=$_POST['pass'];

        $sql="INSERT INTO employee1(nname,sex,age,pnumber,email,id,pass) VALUES ('$nname','$sex','$age','$pnumber','$email','$id','$pass')";
        require("mysql/connect.php");
        $result=mysqli_query($conn,$sql);

        if($result==1){
            $v1=1;
        }
        else{
            $v1=0;
        }

        require("mysql/unconn.php");
        ?>

        <script type="text/javascript">
        var v1=<?php echo($v1);?>;
        if(v1==1){
            alert("การบันทึกข้อมูลเสร็จสิ้น");
            window.location.replace("?nname=<?php echo($nname);?>");
        }
        else{
            alert("การบันทึกข้อมูลผิดพลาด");
            window.history.back();
        }
        </script>
    </body>
</html>