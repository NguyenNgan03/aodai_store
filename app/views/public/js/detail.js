function currentDiv(n) {
    showDivs(slideIndex = n);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    if (n > x.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = x.length }
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
    }
    x[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " w3-opacity-off";
}

function addComment() {
    var newComment = document.getElementById("newComment").value;

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "?controller=comment&action=create", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var commentList = document.getElementById("commentList");
            commentList.innerHTML = xhr.responseText;
        }
    };

    xhr.send("content=" + newComment);
}


function toggleContent(contentType) {
    document.querySelector('.mainText').style.display = (contentType === 'info') ? 'block' : 'none';
    document.querySelector('.comments').style.display = (contentType === 'comment') ? 'block' : 'none';
}