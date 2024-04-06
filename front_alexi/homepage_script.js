document.addEventListener('DOMContentLoaded', function() {
  // Ajoutez des gestionnaires d'événements de clic aux éléments que vous voulez copier
  document.getElementById('adresse').addEventListener('click', copyToClipboard);
  document.getElementById('telephone').addEventListener('click', copyToClipboard);
  document.getElementById('email').addEventListener('click', copyToClipboard);

  const logo = document.querySelector('.fixed-column img');
  logo.addEventListener('click', scrollToTop);
});

function copyToClipboard(event) {
  // Sélectionnez le texte à copier
  const textToCopy = event.target.innerText.split(': ')[1];
  
  // Créez un élément span pour le message "Copié!"
  const copiedMessage = document.createElement('span');
  copiedMessage.textContent = 'Copié!';
  copiedMessage.classList.add('copied-message');
  
  // Ajoutez le message "Copié!" à côté du texte sur lequel vous avez cliqué
  event.target.parentNode.appendChild(copiedMessage);
  
  // Supprimez le message après quelques secondes
  setTimeout(() => {
    event.target.parentNode.removeChild(copiedMessage);
  }, 2000);
  
  // Créez un élément temporaire de type texte pour y copier le texte
  const tempInput = document.createElement('textarea');
  tempInput.value = textToCopy;
  document.body.appendChild(tempInput);
  
  // Sélectionnez le texte dans l'élément temporaire
  tempInput.select();
  
  // Copiez le texte dans le presse-papiers
  document.execCommand('copy');
  
  // Supprimez l'élément temporaire
  document.body.removeChild(tempInput);
}

function scrollToTop() {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
}
