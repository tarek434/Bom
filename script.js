document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector("form");
    const messageDiv = document.getElementById("message");

    form.addEventListener("submit", function(event) {
        event.preventDefault();
        const formData = new FormData(form);
        const name = formData.get("name");

        messageDiv.innerHTML = `<p>Thanks for submitting, <strong>${name}</strong>!</p>`;
    });
});
