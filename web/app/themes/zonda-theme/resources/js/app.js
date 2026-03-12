import.meta.glob([
  '../images/**',
  '../fonts/**',
]);

document.addEventListener('DOMContentLoaded', () => {
  const header = document.querySelector('.site-header');
  const menuToggle = document.querySelector('.menu-toggle');

  if (menuToggle && header) {
    menuToggle.addEventListener('click', () => {
      header.classList.toggle('nav-open');
      document.body.classList.toggle('no-scroll');
    });
  }
});
