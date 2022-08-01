// $(document).ready(function(){
// 	$('div#loading').removeAttr('id');
// });
var preloader = document.getElementById("preloader");
// window.addEventListener('load', function() {
//     preloader.style.display = 'none';
// })

function preLoader() {
    preloader.style.display = 'none';
};

setInterval(function() {
    preLoader();
}, 3000)