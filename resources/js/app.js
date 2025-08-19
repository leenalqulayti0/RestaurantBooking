// ===== Toggle between Sign In / Sign Up =====
window.addEventListener('DOMContentLoaded', () => {
  const container = document.getElementById('container');
  if (!container) return;

  // دوال التبديل
  const goSignUp = () => container.classList.add('right-panel-active');
  const goSignIn = () => container.classList.remove('right-panel-active');

  // ربط الأزرار/الروابط الموجودة في HTML
  document.getElementById('toSignUp')?.addEventListener('click', goSignUp);
  document.getElementById('toSignIn')?.addEventListener('click', goSignIn);
  document.getElementById('switchToSignup')?.addEventListener('click', (e) => { e.preventDefault(); goSignUp(); });
  document.getElementById('switchToLogin')?.addEventListener('click', (e) => { e.preventDefault(); goSignIn(); });
});
