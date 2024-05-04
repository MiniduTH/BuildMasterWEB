document.addEventListener('DOMContentLoaded', function() {
    const responsiveImage = document.getElementById('responsiveImage1');
    const message = document.getElementById('message');
    let messageVisible = false;

    responsiveImage.addEventListener('click', function() {
        if (messageVisible) {
            message.style.display = 'none';
            messageVisible = false;
        } else {
            message.style.display = 'block';
            messageVisible = true;
        }
    });
});

