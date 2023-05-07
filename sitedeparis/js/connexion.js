var view=document.querySelector(".fa-eye-slash")
var abed=document.querySelector(".abed")
var input=document.querySelector("#password")
view.addEventListener("click",function () {
    if (input.getAttribute("type")=="text") {
        view.setAttribute("class","fa-solid fa-eye-slash")
       input.setAttribute("type","password") 
    }else{
        view.setAttribute("class","fa-solid fa-eye")
        input.setAttribute("type","text")
    }
})
