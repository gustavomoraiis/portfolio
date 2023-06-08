!localStorage.getItem("theme") ? localStorage.setItem("theme", "dark") : '';
const checkbox = document.getElementById("dark-checkbox");

if(localStorage.getItem("theme") == "dark"){
    document.getElementById("body").className = 'dark'
    checkbox.checked = false
}else{
    document.getElementById("body").className = 'light'
    checkbox.checked = true
}

$(document).on("click", ".darkmode", function(){
    var theme = localStorage.getItem("theme");
    theme == "dark" ? localStorage.setItem("theme", "light") : localStorage.setItem("theme", "dark");  
    document.getElementById("body").className = theme == "dark" ? 'light' : "dark";    
});
