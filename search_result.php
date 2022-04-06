<!doctype html>
<head>
	<meta charset="UTF-8">
	<title>예매확인</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" ></script>
	
	<div id="board_area">   
		<?php
		
		$search_name=$_GET['name'];
		$search_mobile=$_GET['mobile'];
		$conn = mysqli_connect("localhost","root","123test","testdb");
	
		$sql = "SELECT * FROM restbl where name='$search_name' && mobile='$search_mobile";
		$sql_a = "SELECT  name,mobile,ticket FROM restbl where name='$search_name' and mobile='$search_mobile' and ticket='a'";
		$sql_b = "SELECT  name,mobile,ticket FROM restbl where name='$search_name' and mobile='$search_mobile' and ticket='b'";
		$sql_c = "SELECT  name,mobile,ticket FROM restbl where name='$search_name' and mobile='$search_mobile' and ticket='c'";
		
		$result = mysqli_query($conn, $sql);
		$result_a = mysqli_query($conn, $sql_a);
		$result_b = mysqli_query($conn, $sql_b);
		$result_c = mysqli_query($conn, $sql_c);
   
		//$row = mysqli_fetch_assoc($result);
		$row_a = mysqli_fetch_assoc($result_a);
		$row_b = mysqli_fetch_assoc($result_b);
		$row_c = mysqli_fetch_assoc($result_c);


		//$count = mysqli_num_rows($result);
		$count_a = mysqli_num_rows($result_a);
		$count_b = mysqli_num_rows($result_b);
		$count_c = mysqli_num_rows($result_c);
	
		$row_a1=$row_a["name"];
		$row_a2=$row_a["mobile"];
		$row_a3=$row_a["ticket"];
		
		$row_b1=$row_b["name"];
		$row_b2=$row_b["mobile"];
		$row_b3=$row_b["ticket"];
		
		$row_c1=$row_c["name"];
		$row_c2=$row_c["mobile"];
		$row_c3=$row_c["ticket"];
		
		/*if ($count_a != 0 ) { 
			  
			echo "이름: " . $row_a["name"] . " , 핸드폰 번호: " . $row_a["mobile"] . " 님은  " . $row_a["ticket"] . " 을  $count_a 장 예매하셨습니다.<br>";
			
		}
		
	
		if ($count_b != 0 ) {
			echo "이름: " . $row_b["name"] . " , 핸드폰 번호: " . $row_b["mobile"] . " 님은  " . $row_b["ticket"] . " 을  $count_b 장 예매하셨습니다.<br>";
		
		}
	
		if ($count_c != 0 ) {
			
			echo "이름: " . $row_c["name"] . " , 핸드폰 번호: " . $row_c["mobile"] . " 님은  " . $row_c["ticket"] . " 을  $count_c 장 예매하셨습니다.<br>";
			
		}
		
		if (($count_a == 0) and ($count_b == 0) and ($count_c == 0) ) {
			echo '검색결과없음';
			
		}
		echo "<br><a href='search.php'>[검색으로 이동]</a>";
		
		
		*/
		mysqli_close($conn);
		?>
		
	
	</div>
	<div class="container bcontent"><hr />
		<div class="card" style="width: 1230px;">
			<div class="row no-gutters">
				<div class="col-sm-7">
					<div class="card-body">
						<h1 class="card-title">예매자 정보</h1><br>
						<div class="form-floating mb-3">
							<?php
							if ($count_a != 0 )
							{
								echo "이름: <b>" . $row_a["name"] . "</b> , 핸드폰 번호: <b>" . $row_a["mobile"] . "</b> 님은 <b>뮤지컬 지킬앤하이드</b> 를  <b>".$count_a."</b>장 예매하셨습니다.<br>";
							}
							if ($count_b != 0 )
							{
								echo "이름: <b>". $row_b["name"] . "</b> , 핸드폰 번호: <b>" . $row_b["mobile"] . "</b> 님은 <b>뮤지컬 라이온 킹</b> 을   <b>".$count_b."</b>장 예매하셨습니다.<br>";
							}
							if ($count_c != 0 )
							{
								echo "이름: <b>" . $row_c["name"] . "</b> , 핸드폰 번호: <b>" . $row_c["mobile"] . "</b> 님은 <b>뮤지컬 데스노트</b> 를 <b>".$count_c."</b>장 예매하셨습니다.<br>";
							}
							if (($count_a == 0) and ($count_b == 0) and ($count_c == 0) )
							{
								echo '예매자 정보를 다시 확인해 주세요.';
							}
							?>
							
								
							
							<p><br><a class="btn btn-primary" href="search.php" role="button" >검색하기</a>
							<a class="btn btn-primary" href="index.html" role="button" >메인화면으로</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>	