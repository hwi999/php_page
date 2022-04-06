<!DOCTYPE html>
<html>
	<head>
		<title> 신청인정보입력</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/joinstyle.css"> 
		
	</head>
	<body>
		
		
		<form method="post" action="join_result.php">
			<div class="media">
				<div class="img">
					<img src="image/img1.jpg" alt="Placeholder">
				</div>
				<h2 class="title">신청인 정보 입력</h2>
				<div class="content">
					<label for="name"><b>이름</b></label>
					<input type="text" name="name" placeholder="name" id="name" required><br>
					<label for="floatingInput"><b>전화번호</b></label>
					<input type="text" name="mobile" placeholder="mobile" id="mobile" required><br>
					<label for="floatingInput"><b>주소</b></label>
					<input type="text" name="addr" placeholder="addr" id="addr">
					<input type="hidden"  name="ticket" VALUE="a"><br>
					<input type="submit" class="btn btn-primary" VALUE="제출">
				</div>
			</div>
		</form>



	</body>
</html>
</p>
			</div>
			
		</div>
<!--
		
		
		
		<form method="post" action="join_result.php">
			<div class="container bcontent"><hr />
				<div class="card" style="width: 1200px;">
					<div class="row no-gutters">
						<div class="col-sm-5">
							<img class="card-img" src="img1.jpg" alt="a티켓">
						</div>
						<div class="col-sm-7">
							<div class="card-body">
								<h1 class="card-title">신청인 정보 입력</h1><br>
									<input type="text" class="form-control" name="name" placeholder="name">
									<label for="floatingInput">이름</label><br>
									<div class="form-floating mb-3">
										<input type="text" class="form-control" name="mobile" placeholder="mobile">
										<label for="floatingInput">전화번호</label><br>
										<div class="form-floating mb-3">
											<input type="text" class="form-control" name="addr" placeholder="addr">
											<label for="floatingInput">주소</label><br>
											<input type="hidden"  name="ticket" VALUE="a">lass="form-floating mb-3">
								
										</div>
										<input type="submit" class="btn btn-primary" VALUE="제출">
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>

	</body>
</html>
-->