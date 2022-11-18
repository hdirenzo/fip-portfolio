const form = document.getElementById("mail-form")
const statusMessage = document.getElementById('status-message')

const errors = document.getElementById("errors")


form.addEventListener("submit", async function (event) {
    event.preventDefault()

    const data = new FormData(form)

    const response = await fetch("php/sendcontact.php", {
        method: "post",
        body: data
    })

    const jsonObj = await response.json()

    statusMessage.textContent = jsonObj.message;

    if (!response.ok) {
        errors.innerHTML = ""
        for (const error of jsonObj.errors) {
            errors.innerHTML += "<li> " + error + "</li>"
        }
    }
}
)