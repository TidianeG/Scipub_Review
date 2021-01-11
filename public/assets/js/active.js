$(document).ready(function () {
    var url = window.location.search;
    $('ul.navbar-nav a[href="http://localhost:8000'+ url +'"]').parent().addClass('active');  
});
