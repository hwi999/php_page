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
      1888년 런던, 헨리 '지킬'은 유능한 의사이자 과학자이며 사랑하는 연인 엠마와의 결혼을 앞두고 있다.
부족한 것 없어 보이는 그에게 단 하난의 걱정은 정신질환을 앓고 있는 아버지, 지킬은 자신의 아버지를
비롯해 정신질환으로 고통받는 환자들을 위해 사람의 정신에서 선과 악을 분리할 수있는 치료제 연구를 시작한다.

사람을 대상으로 하는 임상 실험 단계에 이르렀지만 이사회의 반대로 실험은 무산되고
지킬의 친구이자 변호사인 어터슨은 낙담에 빠진 그를 위로하며 웨스트엔드의 한 클럽으로 이끈다.
술에 취한 사람들 사이에서 학대받는 루시를 발견한 지킬, 친구가 필요하면 찾아오라며 자신의 명함을 건넨다.
루시는 지금까지 자신이 만나 온 사람들과 달리 자신을 인간적으로 대해준 지킬에게 호감을 느낀다.

클럽에서 돌아온 지킬은 이 연구가 자기 자신만이 해결할 수 있는 과제임을 깨닫고 스스로가 실험 대상이
되기로 결정한다. 그의 바란대로 선과 악을 분리시키는 데 성공하지만 시간이 지날수록 악으로 가득 찬 제2의
인물 에드워드 '하이드'가 지킬을 장악하며 통제 불가능한 수준에 이른다.

실험이 진행될수록 지킬은 엠마와 점점 더 멀어지고, 그러던 어느 날 상처받은 루시가 그를 찾아온다.
그녀를 상처 입게 만든 사람이 하이드란 것을 알게 된 지클은 불안에 휩싸인다. 한편 하이드는 지킬의
실험을 반대했던 이사회 임원들을 한 명씩 살해하기 시작했고, 위험을 감지한 지킬은 다시금 치료제 주입을
통해 하이드를 잠재우는 데 성공하지만 예상치 못한 순간 다시금 하이드가 등장하게 되는데...
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
