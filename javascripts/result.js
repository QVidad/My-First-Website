window.addEventListener('load', () => {
	const search = sessionStorage.getItem('SEARCH');
	document.getElementById('result-search').innerHTML = search;

	if (search == 'Apayao'||search == 'apayao'||search == 'Road'||search == 'road'){
		document.getElementById('Apayao').style.visibility='visible';
    	}
	if (search == 'Aw-asen'||search == 'aw-asen'||search == 'Falls'||search == 'falls'){
		document.getElementById('Aw-asen').style.visibility='visible';
    	}
	if (search == 'Kaparkan'||search == 'kaparkan'||search == 'Falls'||search == 'falls'){
		document.getElementById('Kaparkan').style.visibility='visible';
    	}
	if (search == 'Pasaleng'||search == 'pasaleng'||search == 'Bay'||search == 'bay'){
		document.getElementById('Pasaleng').style.visibility='visible';
    	}
})
