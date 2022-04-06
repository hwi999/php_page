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
							<img class="card-img" src="image/img3.gif" alt="뮤지컬 데스노트" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
							<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
								<div class="offcanvas-header">
									<h5 class="offcanvas-title" id="offcanvasExampleLabel">SYNOPSIS</h5>
									<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
								</div>
								<div class="offcanvas-body">
									<div>
      법과 정의에 대하여 고민하던 천재 고등학생 '야가미 라이토' 어느 날 우연히 데스노트를 줍게 된다.
'이 노트에 이름이 적힌자는 죽는다' 이 문구에 뉴스 속보로 생중계된 범죄자의 이름을 노트에 적게 되는데...
노트의 엄청난 비밀을 알게 된 '라이토'는 자신의 손으로 범죄자를 처단하여, 정의롭고 새로운 세상을 만들어 가기로
결심한다. 세계 각지의 범죄자들이 의문의 심장마비로 사망하고 사람들은 범죄자를 처단하는 존재를 '키라'라고
부르며 신봉하기 시작한다. 그러자 인터폴에서 이 사건을 수사하기 위해 천재 탐정 수사관을 경찰청으로 보낸다.
그는 바로 전 세계의 미제 사건을 해결해 온 베일에 싸인 명탐정 '엘[L]' 천재적인 추리로 수많은 데이터를 분석해
'키라'의 정체에 한발 한발 다가서는 '엘[L]'과 '키라'라고 불리며 데스노트의 힘으로 새로운 세상의 신이 되고자
하는 '라이토' 데스노트의 원래 주인인 사신 '류크'와 '렘'이 지켜보는 가운데 또 다른 데스노트를 지닌 '미사'의
등장으로 이 둘의 대결은 더욱더 예측하기 어려워지고 패배를 모르는 두 천재의 치열하고 잔인한 두뇌 게임이
시작된다. 각자의 정의를 위해 양보할 수 없는 싸움, 과연 데스노트로부터 시작된 이 게임의 승자는 누구인가?
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
