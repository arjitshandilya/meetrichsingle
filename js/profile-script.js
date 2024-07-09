document.addEventListener('DOMContentLoaded', function() {
    const profilePicContainer = document.getElementById('profile-pic-container');
    const imageUpload = document.getElementById('image-upload');
    const saveProfileBtn = document.getElementById('save-profile-btn');

    profilePicContainer.addEventListener('click', function() {
        imageUpload.click();
    });

    imageUpload.addEventListener('change', function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(event) {
                profilePicContainer.style.backgroundImage = `url(${event.target.result})`;
                profilePicContainer.style.backgroundSize = 'cover';
                profilePicContainer.style.backgroundPosition = 'center';
                profilePicContainer.style.border = 'none';
            }
            reader.readAsDataURL(file);
        }
    });

    saveProfileBtn.addEventListener('click', function() {
        const firstName = document.getElementById('first-name').value;
        const lastName = document.getElementById('last-name').value;
        const phoneNumber = document.getElementById('phone-number').value;
        const socialMedia = document.getElementById('social-media').value;
        const bio = document.getElementById('bio').value;

        if (!firstName || !lastName || !bio || !phoneNumber) {
            alert('Please fill in all the required fields.');
            return;
        }

        if (!/^\d{10}$/.test(phoneNumber)) {
            alert('Please enter a valid 10-digit Indian mobile number.');
            return;
        }

        navigateToPage('landing.php'); // Replace with the actual landing page URL
    });
});

function navigateToPage(pageUrl) {
    const container = document.querySelector('.container');
    container.classList.add('fadeOut');

    setTimeout(function() {
        window.location.href = pageUrl;
    }, 500); // Adjust timing as needed based on your animation duration
}
