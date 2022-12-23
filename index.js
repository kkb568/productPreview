function moveElement(current, next) {
    var current = document.getElementById(current);
    var next = document.getElementById(next);
    current.style.opacity = "0";
    current.style.zIndex = "-1"
    next.style.opacity = "1";
    next.style.zIndex  = "1";
}

function openModal(modal,content) {
    var Modal = document.getElementById(modal);
    var Content = document.getElementById(content);
    Modal.style.display = 'block';
    Content.style.display = 'block';
}

function closeModal(modal,content) {
    var Modal = document.getElementById(modal);
    var Content = document.getElementById(content);
    Modal.style.display = 'none';
    Content.style.display = 'none';
}

function toTop() {
    window.scrollTo(0,0);
}