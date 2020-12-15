    const input = document.getElementById("searchInput");
	const searchBtn = document.getElementById("searchBtn");

	const expand = () => {
		searchBtn.classList.toggle("close");
		input.classList.toggle("square");
	};

	searchBtn.addEventListener("click", expand); 