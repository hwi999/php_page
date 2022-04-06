<!DOCTYPE html>
<html>
	<head>
		<title> 신청인정보입력</title>
		<meta charset="UTF-8">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
		
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
		
	</head>
	<body>
		<form method="post" action="join_result.php">
			<div class="container bcontent"><hr />
				<div class="card" style="width: 1200px;">
					<div class="row no-gutters">
						<div class="col-sm-5">
							<img class="card-img" src="image/img2.jpg" alt="뮤지컬 라이온 킹" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
							<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
								<div class="offcanvas-header">
									<h5 class="offcanvas-title" id="offcanvasExampleLabel">SYNOPSIS</h5>
									<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
								</div>
								<div class="offcanvas-body">
									<div>
아프리카의 평화로운 왕국 프라이드랜드. 이곳을 다스리는 사자 무파사의 아들 심바가 태어난다.
심바는 친구 날라와 어울리며 하루 빨리 아버지 같은 왕이 되고 싶어 한다. 한편 왕의 동생 스카는 자신이
왕위를 차지하기 위해 하이에나들과 결탁하여 무파사를 죽이고 심바에게 죄를 뒤집어 씌워 멀리 내쫓는다.
간신히 목숨을 건진 심바는 유쾌한 미어캣 티몬과 멧돼지 품바와 함께 생활하며 어른이 된다. 그러던 어느 날 심바는
옛친구 날라를 만나 프라이드랜드가 파괴되고 있다는 소식을 듣게 된다. 하지만 자신이 저지른 실수 때문에 고향으로
돌아가기를 거부하는 심바. 결국 아버지의 가르침과 자신의 운명을 깨달은 심바는 스카와 하이에나들을 물리치고
평화를 되찾기 위해 왕국으로 돌아가는데...
									</div>
									<div class="dropdown mt-3">
									</div>
								</div>
							</div>
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
											<input type="hidden"  name="ticket" VALUE="b">
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
