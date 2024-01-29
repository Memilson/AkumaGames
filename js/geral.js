document.addEventListener("DOMContentLoaded", function() {
    const menuButton = document.querySelector('.gg-menu');
    const leftbar = document.querySelector('.leftbar');
    const navLinks = document.querySelectorAll('.leftbar .navg');
    const closeLeftbarButton = document.querySelector('.close-leftbar');

    menuButton.addEventListener('click', function() {
      leftbar.classList.toggle('show-leftbar');
    });

    closeLeftbarButton.addEventListener('click', function() {
      leftbar.classList.remove('show-leftbar');
    });

    // Feche a leftbar ao clicar em um link dentro dela
    navLinks.forEach(function(link) {
      link.addEventListener('click', function() {
        leftbar.classList.remove('show-leftbar');
      });
    });
  });