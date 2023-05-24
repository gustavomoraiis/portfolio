!localStorage.getItem("theme") ? localStorage.setItem("theme", "dark") : '';
$(document).on("click", ".darkmode", function(){
    var theme = localStorage.getItem("theme");
    theme == "dark" ? localStorage.setItem("theme", "light") : localStorage.setItem("theme", "dark");  

    var body = document.getElementById("body");
    //var currentClass = body.className;
   
    body.className = theme == "dark" ? 'light' : "dark";    
   
});
