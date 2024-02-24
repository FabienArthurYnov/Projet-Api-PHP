import { checkCookie } from './cookie.js';

// Vérifiez si le cookie existe
if (checkCookie('userCookie')) {
  // Le cookie existe, masquez la section
  document.getElementById('form').style.display = 'none';
  document.getElementById('login').style.display = 'block';
} else {
  // Le cookie n'existe pas, affichez la section
  document.getElementById('form').style.display = 'block';
  document.getElementById('login').style.display = 'none';
}
