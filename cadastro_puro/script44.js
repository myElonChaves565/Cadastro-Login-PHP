const corpo_inscreveInBtn = document.querySelector('.corpo_inscreveInBtn-link');
const corpo_inscreveUpBtn = document.querySelector('.corpo_inscreveUpBtn-link');
const governarall = document.querySelector('.governarall');

corpo_inscreveUpBtn.addEventListener('click',() => {
  governarall.classList.toggle('active');


});

corpo_inscreveInBtn.addEventListener('click',() => {
  governarall.classList.toggle('active');


});