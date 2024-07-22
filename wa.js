document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;

    const whatsappNumber = '+6283845882743';
    const whatsappMessage = `Nama: ${name}%0AEmail: ${email}%0APesan: ${message}`;
    const whatsappURL = `https://wa.me/${whatsappNumber}?text=${whatsappMessage}`;

    window.open(whatsappURL, '_blank');
});