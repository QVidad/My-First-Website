window.addEventListener('load', () => {
	const search = sessionStorage.getItem('SEARCH');
	document.getElementById('result-search').innerHTML = search;
	const a = "No results of your search";
	const b = "Please scroll down to see results of your search";
	var result = false;

	if (search == 'Apayao'||search == 'apayao'||search == 'Road'||search == 'road'){
		document.getElementById('Apayao').style.visibility='visible';
		result = true;
    	}
	if (search == 'Aw-asen'||search == 'aw-asen'||search == 'Falls'||search == 'falls'){
		document.getElementById('Aw-asen').style.visibility='visible';
		result = true;
    	}
	if (search == 'Kaparkan'||search == 'kaparkan'||search == 'Falls'||search == 'falls'){
		document.getElementById('Kaparkan').style.visibility='visible';
    	}
	if (search == 'Pasaleng'||search == 'pasaleng'||search == 'Bay'||search == 'bay'){
		document.getElementById('Pasaleng').style.visibility='visible';
    	}

	if (result == false) {
		document.getElementById('message').innerHTML = a;
	}
	else {
		document.getElementById('message').innerHTML = b;
	}	
})
