function animate() {
	for (i=0; i<Astros.length; i++) {
		Astros[i].x = Astros[i].hyp * Math.sin(Astros[i].ang) + cent.x
		Astros[i].y = Astros[i].hyp * Math.cos(Astros[i].ang) + cent.y
		Astros[i].ang = Astros[i].ang - Astros[i].rot
		Astros[i].img.style.left = (Astros[i].x - Astros[i].sizx/2) + 'px'; 
		Astros[i].img.style.top = (Astros[i].y - Astros[i].sizy/2) + 'px'
	}
	setTimeout(animate, 100)
}