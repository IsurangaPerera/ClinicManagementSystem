function openHidden(){
	var mainId = document.getElementById('lst');
	var secId = document.getElementById('slst');
	
	if(mainId.className === "treeview"){
		mainId.className += " active";
		secId.className += " menu-open";
		secId.style['display'] = 'block';
	}
	else if(mainId.className === "treeview active"){
		mainId.className = "treeview";
		secId.className = "treeview-menu";
		secId.style['display'] = 'none';
	}
}

function openBar(){
	var mainId = document.getElementById('headc');

	if(mainId.className === "dropdown user user-menu")
		mainId.className += " open";
	else
		mainId.className = "dropdown user user-menu";
}