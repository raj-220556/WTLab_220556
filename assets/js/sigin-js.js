// Function to switch between Sign Up and Sign In
function toggleForms() {
    const signup = document.getElementById('signup-form');
    const signin = document.getElementById('signin-form');

    if (signup.style.display === "none") {
        signup.style.display = "block";
        signin.style.display = "none";
    } else {
        signup.style.display = "none";
        signin.style.display = "block";
    }
}

// Basic Validation to prevent empty submissions
document.querySelectorAll('form').forEach(form => {
    form.addEventListener('submit', function(e) {
        const inputs = this.querySelectorAll('input[required]');
        let valid = true;

        inputs.forEach(input => {
            if (input.value.trim() === "") {
                valid = false;
                input.parentElement.style.borderColor = "red";
            } else {
                input.parentElement.style.borderColor = "#ddd";
            }
        });

        if (!valid) {
            e.preventDefault();
            alert("Please fill in all fields.");
        }
    });
});