
function initanim() {
	var imgpath = cent.img
	cent.img = document.getElementById(cent.id)
	cent.img.src = imgpath
	cent.img.style.position = 'absolute'
	cent.img.style.height = cent.sizy
	cent.img.style.width = cent.sizx
	cent.img.style.left = (cent.x - (cent.sizx/2)) + 'px'
	cent.img.style.top = (cent.y - (cent.sizy/2)) + 'px'
	for (i=0; i<Astros.length; i++) {
		imgpath = Astros[i].img
		Astros[i].img = document.getElementById(Astros[i].id)
		Astros[i].img.src = imgpath
		Astros[i].img.style.position = 'absolute'; 
		Astros[i].img.style.height = Astros[i].sizy
		Astros[i].img.style.width = Astros[i].sizx
		Astros[i].img.style.left = (Astros[i].x - (Astros[i].sizx/2)) + 'px'; 
		Astros[i].img.style.top = (Astros[i].y - (Astros[i].sizy/2)) + 'px'
	}
	animate()
}