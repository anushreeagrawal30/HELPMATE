// JavaScript to handle form submission
document.getElementById("referForm").addEventListener("submit", function(event) {
    // Prevent the default form submission behavior
    event.preventDefault();
    
    // Display an alert message
    alert("Your information has been successfully submitted. We will get back to you shortly.");
    
    // Reset the form values
    document.getElementById("referForm").reset();
});