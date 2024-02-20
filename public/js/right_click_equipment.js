const right_click_equipment = document.getElementById('right_click_equipment')
const menu = document.getElementById('menu')
const outClick = document.getElementById('out-click');

right_click_equipment.addEventListener('contextmenu', e => {
  e.preventDefault()

  menu.style.top = `${e.clientY}px`
  menu.style.left = `${e.clientX}px`
  menu.classList.add('show')

  outClick.style.display = "block"
})

outClick.addEventListener('click', () => {
  menu.classList.remove('show');
  outClick.style.display = 'none';
});