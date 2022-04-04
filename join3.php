<!DOCTYPE html>
<html>
	<head>
		<title> 신청인정보입력</title>
		<meta charset="UTF-8">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<form method="post" action="join_result.php">
			<div class="container bcontent"><hr />
				<div class="card" style="width: 1200px;">
					<div class="row no-gutters">
						<div class="col-sm-5">
							<img class="card-img" src="img3.png" alt="c티켓">
						</div>
						<div class="col-sm-7">
							<div class="card-body">
								<h1 class="card-title">신청인 정보 입력</h1><br>
								<div class="form-floating mb-3">
									<input type="text" class="form-control" name="name" placeholder="name">
									<label for="floatingInput">이름</label><br>
									<div class="form-floating mb-3">
										<input type="text" class="form-control" name="mobile" placeholder="mobile">
										<label for="floatingInput">전화번호</label><br>
										<div class="form-floating mb-3">
											<input type="text" class="form-control" name="addr" placeholder="addr">
											<label for="floatingInput">주소</label><br>
											<input type="hidden"  name="ticket" VALUE="c">
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
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" ></script>
	</body>
</html>
