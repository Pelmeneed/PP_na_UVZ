const socialSection = document.querySelector('.social');

socialSection.addEventListener('mouseenter', () => {
  socialSection.style.opacity = '1';
  socialSection.style.transition = 'opacity 0.3s ease';
});

socialSection.addEventListener('mouseleave', () => {
  socialSection.style.opacity = '0.95';
});
