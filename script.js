const form = document.querySelector('form');
const loginBtn = document.getElementById('login-btn');
const usernameInput = document.getElementById('username');
const passwordInput = document.getElementById('password');
const errorMessage = document.createElement('p');

function handleFormSubmit(event) {
  event.preventDefault();

  // Hier können Sie den Code hinzufügen, um Benutzername und Passwort zu überprüfen.
  // Für diese Beispiel habe ich einfach einen harten Code verwendet, um eine Demo zu erstellen.

  if (usernameInput.value === 'benutzername' && passwordInput.value === 'passwort') {
    alert('Anmeldung erfolgreich!');
  } else {
    errorMessage.textContent = 'Ungültiger Benutzername oder Passwort';
    form.appendChild(errorMessage);
  }
}

function handleInputChange() {
  if (errorMessage.parentNode) {
    form.removeChild(errorMessage);
  }
}

form.addEventListener('submit', handleFormSubmit);
usernameInput.addEventListener('input', handleInputChange);
passwordInput.addEventListener('input', handleInputChange);
