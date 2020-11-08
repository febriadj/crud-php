const add_icon = document.getElementById('tambah-icon-open');
const add      = document.getElementById('add');
add_icon.addEventListener('click', function() {
  add.classList.toggle('openAdd');
})