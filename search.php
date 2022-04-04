<!DOCTYPE html>
<html>
	<head>
		<title> 신청인정보입력</title>
		<meta charset="UTF-8">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" ></script>

<html>
	<body>	
	<meta charset="UTF-8">
		
		<script>
      //체크 함수 생성
      function check() {
       //myfrom 이름 설정
        var f = document.myform;
 
		  if (f.name.value == "") {
            alert("이름을 입력해주세요");
            f.name.focus();
            return false;
        }

		  if (f.mobile.value == "") {
            alert("전화번호를 입력해주세요");
            f.mobile.focus();
            return false;
        }
}
		</script>
		<form action="search_result.php" method="get" name="myform" onsubmit="return check()">
			<div class="container bcontent"><hr />
				<div class="card" style="width: 1200px;">
					<div class="row no-gutters">
						<div class="col-sm-7">
							<div class="card-body">
								<h1 class="card-title">검색하기</h1><br>
								<div class="form-floating mb-3">
									<input type="text" class="form-control" name="name" placeholder="name" >
									<label for="floatingInput">이름</label><br>
									<div class="form-floating mb-3">
										<input type="text" class="form-control" name="mobile" placeholder="mobile" >
										<label for="floatingInput">전화번호</label><br>
										<input type="submit" class="btn btn-primary" VALUE="검색하기">
								
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

