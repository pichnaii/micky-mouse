document.querySelector("#show_login").addEventListener("Click",function(){
    document.querySelector(".popup").classList.add("active");
});
document.querySelector(".popup .close_btn").addEventListener("Click",function(){
    document.querySelector(".popup").classList.remove("active");
});