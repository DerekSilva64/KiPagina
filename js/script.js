const register_link = document.querySelector(".links.register")
const login_link = document.querySelector(".links.login")
const form_side = document.querySelector(".side-form")
const register_side = document.querySelector(".side-register")
const inputs = document.querySelectorAll("input")

register_link.addEventListener('click', () => {
    form_side.classList.add("hide-login")
    register_side.classList.add("appear-register")

    inputs.forEach(element => {
        element.value = ""
    });
    
})

login_link.addEventListener('click', () => {
    register_side.classList.remove("appear-register")
    form_side.classList.remove("hide-login")

    inputs.forEach(element => {
        element.value = ""
    });

})