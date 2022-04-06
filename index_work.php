<!DOCTYPE html>
<html>
<head>
<meta charset="UTF=8">
<title>Insert title here</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/indexstyle.css">
</head>
<body>

	
	<div class="wrapper">
		<header class="header">
		<div class="slideshow-container">

<div class="mySlides fade">
  <img src="image/img1_1.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="image/img2_1.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="image/img3_1.jpg" style="width:100%">
</div>

</div>


<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>


		</header>
		<div class="panel">
			<div class="card">
				<img src="/image/img1.jpg" alt="img1" style="width:100%">
				<div class="container">
					<h4><b>Jane Doe</b></h4> 
					<p>Interior Designer</p> 
					<button onclick="location.href='join1.php'" class="button">예매하기</button>
				</div>
			</div>
		</div>
		<div class="panel">
			<div class="card">
				<img src="image/img2.jpg" alt="img2" style="width:100%">
				<div class="container">
					<h4><b>Jane Doe</b></h4> 
					<p>Interior Designer</p> 
					<button onclick="location.href='join2.php'" class="button">예매하기</button>
				</div>
			</div>
		</div>
		<div class="panel">
			<div class="card">
				<img src="image/img3.gif" alt="img3" style="width:100%">
				<div class="container">
					<h4><b>Jane Doe</b></h4> 
					<p>Interior Designer</p>
					<button onclick="location.href='join3.php'" class="button">예매하기</button>
				</div>
			</div>
		</div>
		<footer class="footer">My footer
			<br>
			<a href="search.php" button class="btn btn-primary" type="button">예매확인</a>
			<br>
		</footer>
	</div>
	
	<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
	</script>
	</body>
</html>