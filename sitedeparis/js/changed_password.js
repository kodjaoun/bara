var view=document.querySelector(".fa-eye-slash")
var input1=document.querySelector("#password1")
var input2=document.querySelector("#password2")
view.addEventListener("click",function () {
    if (input1.getAttribute("type")=="text"&&input2.getAttribute("type")=="text") {
        view.setAttribute("class","fa-solid fa-eye-slash")
       input1.setAttribute("type","password") 
       input2.setAttribute("type","password")
    }else{
        view.setAttribute("class","fa-solid fa-eye")
        input1.setAttribute("type","text")
        input2.setAttribute("type","text")
    }
})