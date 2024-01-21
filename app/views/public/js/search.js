function validateSearchForm() {
    var searchInput = document.getElementById('searchInput').value;

    if (searchInput.trim() === '') {
        alert('Vui lòng nhập thông tin tìm kiếm.');
        return false;
    }

    return true;
}