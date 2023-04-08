const ToDoLink = document.querySelector(".link.connection_api.btn.todo")
const RequestLink = document.querySelector(".link.connection_api.btn.request")
const SettingsLink = document.querySelector(".link.connection_api.btn.settings")

const ToDoContent = document.querySelector("main .connection_api.todo.content")
const RequestContent = document.querySelector("main .connection_api.request.content")
const SettingsContent = document.querySelector("main .connection_api.settings.content")

ToDoLink.addEventListener("click", () => {
    ToDoContent.style.display = "block"
    RequestContent.style.display = "none"
    SettingsContent.style.display = "none"
})

RequestLink.addEventListener("click", () => {
    RequestContent.style.display = "block"
    ToDoContent.style.display = "none"
    SettingsContent.style.display = "none"
})

SettingsLink.addEventListener("click", () => {
    SettingsContent.style.display = "block"
    ToDoContent.style.display = "none"
    RequestContent.style.display = "none"
})


function refactorNameLi(str){
    return str.split("<h1>")[1].split("</h1>")[0].split(" ").join('').toLowerCase();
}


