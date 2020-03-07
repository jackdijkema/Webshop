$(function Code () {
    
    document.getElementById("Login").addEventListener("click", function(){
        document.querySelector(".PopUp").style.display = "flex";
    })
    
    document.querySelector(".close_login").addEventListener("click", function(){
        document.querySelector(".PopUp").style.display = "none";
    })
})
