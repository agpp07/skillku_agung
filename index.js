document.getElementById("contactForm").addEventListener("submit", function(event) {

    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const subject = document.getElementById("subject").value;
    const message = document.getElementById("message").value;

    alert(
        Nama: ${name}\nEmail: ${email}\nSubject: ${subject}\nPesan: ${message}
    );
});