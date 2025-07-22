
 
 const carousel = document.getElementById('imageCarousel');
 const nextBtn = document.getElementById('nextBtn');
 const prevBtn = document.getElementById('prevBtn');

 nextBtn.addEventListener('click', () => {
   carousel.scrollBy({ left: carousel.clientWidth, behavior: 'smooth' });
 });

 prevBtn.addEventListener('click', () => {
   carousel.scrollBy({ left: -carousel.clientWidth, behavior: 'smooth' });
 });


