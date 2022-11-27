function moveElement(current, next) {
    var current = document.getElementById(current);
    var next = document.getElementById(next);
    current.style.opacity = "0";
    current.style.zIndex = "-1"
    next.style.opacity = "1";
    next.style.zIndex  = "1";
}