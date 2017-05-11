function toggleContent(){
	var ps = this.parentNode.querySelectorAll("p");
    
	if (ps[0].style.display == "block"){
		for(var i = 0; i < ps.length; i++){
			ps[i].style.display = "none";
		}
	}
	else {
		for(var i = 0; i < ps.length; i++){
			ps[i].style.display = "block";
		}
	}

var uls = this.parentNode.querySelectorAll("ul");
    
	if (uls[0].style.display == "block"){
		for(var i = 0; i < uls.length; i++){
			uls[i].style.display = "none";
		}
	}
	else {
		for(var i = 0; i < uls.length; i++){
			uls[i].style.display = "block";
		}
	}

var lis = this.parentNode.querySelectorAll("li");
    
	if (lis[0].style.display == "block"){
		for(var i = 0; i < lis.length; i++){
			lis[i].style.display = "none";
		}
	}
	else {
		for(var i = 0; i < lis.length; i++){
			lis[i].style.display = "block";
		}
	}

}

var h2s = document.querySelectorAll("article h2");
for(i = 0; i < h2s.length; i++){
	h2s[i].addEventListener("click", toggleContent);
}