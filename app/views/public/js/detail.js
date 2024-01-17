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
    var commentList = document.getElementById("commentList");
    var newCommentElement = document.createElement("li");
    newCommentElement.textContent = newComment;
    commentList.appendChild(newCommentElement);
    document.getElementById("newComment").value = "";
}

function toggleContent(contentType) {
    document.querySelector('.mainText').style.display = (contentType === 'info') ? 'block' : 'none';
    document.querySelector('.comments').style.display = (contentType === 'comment') ? 'block' : 'none';
}