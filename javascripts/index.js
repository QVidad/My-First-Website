function handleSubmit () {
    const search = document.getElementById('search').value;
    sessionStorage.setItem("SEARCH", search);

    return;
}