// start: Sidebar
const sidebarToggle = document.querySelector('.sidebar-toggle');
const sidebarOverlay = document.querySelector('.sidebar-overlay');
const sidebarMenu = document.querySelector('.sidebar-menu');
const main = document.querySelector('.main');
const selectedOptionItem = document.querySelector('.active');

sidebarToggle.addEventListener('click', function (e) {
  e.preventDefault();
  main.classList.toggle('active');
  sidebarOverlay.classList.toggle('hidden');
  sidebarMenu.classList.toggle('hidden');
  sidebarMenu.classList.toggle('-translate-x-full');
});

sidebarOverlay.addEventListener('click', function (e) {
  e.preventDefault();
  main.classList.add('active');
  sidebarOverlay.classList.add('hidden');
  sidebarMenu.classList.toggle('hidden');
  sidebarMenu.classList.add('-translate-x-full');
});

selectedOptionItem.addEventListener('click', function (e) {
  e.preventDefault();
  sidebarMenu.classList.toggle('hidden');
  sidebarMenu.classList.add('-translate-x-full');
  sidebarOverlay.classList.add('hidden');
});
