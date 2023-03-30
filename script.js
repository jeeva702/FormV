const form = document.getElementById('example-form');

form.addEventListener('submit', function(event) {
  const nameField = document.getElementById('name');
  const emailField = document.getElementById('email');
  const genderField = document.getElementById('gender');

  if (!nameField.value || !emailField.value || !genderField.value) {
    event.preventDefault();
    alert('Please fill in all required fields.');
  }
});
