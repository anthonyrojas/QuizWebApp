window.onload = function(){
	var image = document.getElementById("home-parallax");
	var i = 1;
	var images = ["media/images/quiz_home_banner.jpeg", "media/images/quiz_home_banner2.jpg", "media/images/quiz_home_banner3.jpg"];
	function changePicture(){
		if(++i >= images.length){
			i=0;
		}
		image.style.opacity = 0;
		image.style.transition = "opacity 5s";
		image.style.backgroundImage = "url(" + images[i] + ")";
		image.style.opacity = 1;
	}
	setInterval(changePicture, 5000);
}