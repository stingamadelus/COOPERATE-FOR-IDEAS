window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("go_top").style.display = "block";
    } else {
        document.getElementById("go_top").style.display = "none";
    }
}