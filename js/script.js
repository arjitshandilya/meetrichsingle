document.addEventListener('DOMContentLoaded', function() {
    // Add event listeners to handle page transitions
    const loginLink = document.getElementById('login-link');
    const signupLink = document.getElementById('signup-link');
    const genderLink = document.getElementById('gender-link');
    const interestedGenderLink = document.getElementById('interested-gender-link');
    const confirmBtn = document.getElementById('confirm-btn');
    const confirmLocationBtn = document.getElementById('confirm-location-btn');
    const landLink= document.getElementById('landing-link');
    const logOut=document.getElementById('logOut-link');
    const DOBlink=document.getElementById('DOB-link');
    const Locationlink=document.getElementById('loc-link');
    


    if (logOut){
        logOut.addEventListener('click', function(event) {
            event.preventDefault();
            navigateToPage('login.php');
        });
    }
    if (DOBlink){
        DOBlink.addEventListener('click', function(event) {
            event.preventDefault();
            navigateToPage('dob.php');
        });
    }

    if (Locationlink){
        Locationlink.addEventListener('click', function(event) {
            event.preventDefault();
            navigateToPage('location.php');
        });
    }

    if(landLink){
        landLink.addEventListener('click', function(event) {
            event.preventDefault();
            navigateToPage('landing.php');
        });

    }

    if (loginLink) {
        loginLink.addEventListener('click', function(event) {
            event.preventDefault();
            navigateToPage('login.php');
        });
    }

    if (signupLink) {
        signupLink.addEventListener('click', function(event) {
            event.preventDefault();
            navigateToPage('signup.php');
        });
    }

    if (genderLink) {
        genderLink.addEventListener('click', function(event) {
            event.preventDefault();
            navigateToPage('gender.php');
        });
    }

    if (interestedGenderLink) {
        interestedGenderLink.addEventListener('click', function(event) {
            event.preventDefault();
            navigateToPage('interested_gender.php');
        });
    }

    if (confirmBtn) {
        confirmBtn.addEventListener('click', function() {
            validateDob();
        });
    }

    if (confirmLocationBtn) {
        confirmLocationBtn.addEventListener('click', function() {
            validateLocation();
        });
    }
});

function navigateToPage(pageUrl) {
    // Add your animation classes here for transition effects
    const container = document.querySelector('.container');

    // Fade out animation
    container.classList.add('fadeOut');

    setTimeout(function() {
        // Navigate to the new page after animation completes
        window.location.href = pageUrl;
    }, 500); // Adjust timing as needed based on your animation duration
}

function validateDob() {
    const date = document.getElementById('date').value;
    const month = document.getElementById('month').value;
    const year = document.getElementById('year').value;
    const errorMessage = document.getElementById('error-message');

    if (!date || !month || !year) {
        errorMessage.textContent = 'Please select your complete date of birth.';
        return;
    }

    const dob = new Date(`${year}-${month}-${date}`);
    const today = new Date();
    const age = today.getFullYear() - dob.getFullYear();
    const m = today.getMonth() - dob.getMonth();

    if (m < 0 || (m === 0 && today.getDate() < dob.getDate())) {
        age--;
    }

    if (age < 18) {
        errorMessage.textContent = 'Sorry, you must be at least 18 years old to use this site.';
    } else {
        errorMessage.textContent = '';
        navigateToPage('location.php'); // Replace with the actual next page URL
    }
}

function validateLocation() {
    const zipcode = document.getElementById('zipcode').value;
    const errorMessage = document.getElementById('error-message');

    const zipcodePattern = /^\d{6}$/; // Pattern for a 5-digit ZIP code
    if (!zipcodePattern.test(zipcode)) {
        errorMessage.textContent = 'Please enter a valid 6-digit ZIP code.';
        return;
    }

    errorMessage.textContent = '';
    navigateToPage('profile_details.php'); // Replace with the actual next page URL
}
