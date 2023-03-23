const lis = document.querySelectorAll(".link");
let select = document.querySelector(".connection_api.request");


lis.forEach((element) => {
    element.addEventListener("click", () => {
        if(select !== null ) select.style.display = "none"
        let selectElement = document.querySelector('.connection_api.'+refactorNameLi(element.innerHTML))
        selectElement.style.display ="block"
        select = selectElement;
    })
})



function refactorNameLi(str){
    return str.split("<h1>")[1].split("</h1>")[0].split(" ").join('').toLowerCase();
}


