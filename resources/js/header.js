document.addEventListener('DOMContentLoaded', function () {
  const menuButton = document.getElementById('menu-button');
  const menu = document.getElementById('menu');

  menuButton.addEventListener('click', function () {
    const isExpanded = menuButton.getAttribute('aria-expanded') === 'true';
    menuButton.setAttribute('aria-expanded', !isExpanded);
    menu.classList.toggle('opacity-0');
    menu.classList.toggle('translate-y-1');
    menu.classList.toggle('opacity-100');
    menu.classList.toggle('translate-y-0');
  });
});
