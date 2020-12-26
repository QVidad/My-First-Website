window.addEventListener('load', () => {
    
    const search = sessionStorage.getItem('SEARCH');
    document.getElementById('result-search').innerHTML = search;
})