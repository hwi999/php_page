<!doctype html>
<head>
	<meta charset="UTF-8">
	<title>예매확인</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" ></script>
	
<?php
 
$con=mysqli_connect("localhost","root","123test","testdb") or die("접속실패");
        $name = $_POST["name"];
        $mobile = $_POST["mobile"];
		$addr = $_POST["addr"];
		$ticket = $_POST["ticket"];
        $sql="INSERT INTO restbl VALUES(null, '".$name."','".$mobile."','".$addr."', '".$ticket."')";
        $ret = mysqli_query($con,$sql);
		
$fail = mysqli_error($con);

		/*
	  if($ret) {
                echo "예매완료";
		
        }
        else {
                echo "데이터 입력 실패"."<br>";
                echo "실패원인 : ".mysqli_error($con);
        }
		*/
        mysqli_close($con);

        

?>

<div class="container bcontent"><hr />
	<div class="card" style="width: 1200px;">
		<div class="row no-gutters">
			<div class="col-sm-7">
				<div class="card-body">
					<h1 class="card-title">예매완료</h1><br>
					<div class="form-floating mb-3">
						<?php
						if($ret) {
							echo "";
						}
						else {
							echo "데이터 입력 실패"."<br>";
							echo "실패원인 : ".mysqli_error($con);
						}
						?>
						<br><a class="btn btn-primary" href="index.html" role="button" >메인화면으로</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
