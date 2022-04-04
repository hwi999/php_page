<?php
 
$con=mysqli_connect("localhost","root","123test","testdb") or die("접속실패");
        $name = $_POST["name"];
        $mobile = $_POST["mobile"];
		$addr = $_POST["addr"];
		$ticket = $_POST["ticket"];
        $sql="INSERT INTO restbl VALUES(null, '".$name."','".$mobile."','".$addr."', '".$ticket."')";
        $ret = mysqli_query($con,$sql);

        if($ret) {
                echo "예매완료";
		
        }
        else {
                echo "데이터 입력 실패"."<br>";
                echo "실패원인 : ".mysqli_error($con);
        }
        mysqli_close($con);

        echo "<br><a href='index.php'>[메인으로 이동]</a>";

?>