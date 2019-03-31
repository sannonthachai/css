<?php require("mysql/config.php")?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="th">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" charset="utf-8"/>
        <title>EMPLOYEE SYSTEM</title>
    </head>
    <body>
        <?php
        $id=$_GET['id'];

        $sql="DELETE FROM employee1 WHERE id = '$eid'";
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
            alert("การลบข้อมูลเสร็จสิ้น");
            window.location.replace("");
        }
        else{
            alert("การลบข้อมูลผิดพลาด");
            window.history.back();
        }
        </script>
    </body>
</html>