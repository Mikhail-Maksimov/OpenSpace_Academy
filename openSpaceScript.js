document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent default form submission
  
    // Submit the form data using AJAX/Fetch API
    fetch('openSpaceMessages.php', {
      method: 'POST',
      body: new FormData(document.getElementById('contactForm'))
    })
    .then(response => response.json()) // Assuming server responds with JSON
    .then(data => {

      // Process server response (if needed)
      console.log(data); // Log server response
  
      // Show popup message
      alert('Thank you for messaging us!');

      // Reset the form
      document.getElementById('contactForm').reset();

    })
    .catch(error => console.error('Error:', error));

    // Prevent form submission if validation fails
    if (!validateForm()) {
        event.preventDefault();
    }

  });
  
  function validateForm() {
    let name = document.getElementById('name').value.trim();
    let email = document.getElementById('email').value.trim();
    let message = document.getElementById('message').value.trim();
  
    // Basic validation for name, email, and message
    if (name === '') {
      alert('Please enter your name');
      return false;
    }
  
    if (email === '') {
      alert('Please enter your email address');
      return false;
    }
  
    if (message === '') {
      alert('Please enter your message');
      return false;
    }
  
    // Additional validation for email format
    let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
      alert('Please enter a valid email address');
      return false;
    }
  
    return true; // Form is valid
  }