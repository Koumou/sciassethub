const right_click_chemical = document.getElementById('right_click_chemical');
const right_click_equipment = document.getElementById('right_click_equipment');
const menuChemical = document.getElementById('menu-chemical');
const menuEquipment = document.getElementById('menu-equipment');
const outClickChemical = document.getElementById('out-click-chemical');
const outClickEquipment = document.getElementById('out-click-equipment');

right_click_chemical.addEventListener('contextmenu', e => {
  e.preventDefault()

  menuChemical.style.top = `${e.clientY}px`
  menuChemical.style.left = `${e.clientX}px`
  menuChemical.classList.add('show')

  outClickChemical.style.display = "block"
})

outClickChemical.addEventListener('click', () => {
  menuChemical.classList.remove('show');
  outClickChemical.style.display = 'none';
});

right_click_equipment.addEventListener('contextmenu', e => {
  e.preventDefault()

  menuEquipment.style.top = `${e.clientY}px`
  menuEquipment.style.left = `${e.clientX}px`
  menuEquipment.classList.add('show')

  outClickEquipment.style.display = "block"
})

outClickEquipment.addEventListener('click', () => {
  menuEquipment.classList.remove('show');
  outClickEquipment.style.display = 'none';
});