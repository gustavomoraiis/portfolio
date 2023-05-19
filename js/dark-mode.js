$(document).on("click", ".darkmode", function(){
    var body = document.getElementById("body");
    var currentClass = body.className;
    body.className = currentClass == "dark" ? 'light' : "dark";    
});
