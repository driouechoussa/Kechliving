// cols
  const cardsLayout = document.querySelectorAll('.product-card');
  const toggleBtn = document.getElementById('btnFilter');
  toggleBtn.addEventListener('click', () => {
    document.body.classList.toggle('sidebar-open');
    if(document.body.classList.contains('sidebar-open')) {
      toggleBtn.innerHTML = "<i class='bxr  bx-x'  style='color:#6c757d'></i> <span class='text-capitalize mx-2'>fermer</span>";
      cardsLayout.forEach(card => {
        card.classList.remove('col-md-4');
        card.classList.add('col-4', 'col-5');
      });
    } else {
      toggleBtn.innerHTML = "<i class='bxr  bx-slider-alt'  ></i> <span class='text-capitalize mx-2'>filter</span>";
      cardsLayout.forEach(card => {
        card.classList.remove('col-5');
        card.classList.add('col-md-4');
      });
    }
  });