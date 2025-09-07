document.addEventListener('DOMContentLoaded', () => {
  const links = document.querySelectorAll('.nav a');
  links.forEach(a => {
    a.addEventListener('click', () => {
      a.style.transform = 'scale(0.98)';
      setTimeout(() => (a.style.transform = ''), 120);
    });
  });
});
