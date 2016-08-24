/**
 * Created by shidan on 8/23/16.
 */

//enable selected buttom display
function openTab (evt, TabName) {
    var i, x, tablinks;
    x = document.getElementsByClassName("tab");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < x.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" navbar-nav-active", "");
    }
    document.getElementById(TabName).style.display = "block";
    evt.currentTarget.className += " navbar-nav-active";
}