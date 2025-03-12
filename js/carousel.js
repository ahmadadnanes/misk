let currentIndex = 1;
const items = document.querySelectorAll('.news-item');
const totalItems = items.length;

function isMobile() {
  return window.innerWidth < 768;
}

function updateItems() {
  const mobile = isMobile();
  
  items.forEach((item) => {
    item.classList.remove('col-6', 'col-3', 'active', 'd-none');
    
    if (mobile) {
      item.classList.add('d-none', 'col-12');
    } else {
      item.classList.add('col-3');
    }
  });

  if (mobile) {
    items[currentIndex].classList.remove('d-none');
    items[currentIndex].classList.add('active', 'col-12');
  } else {
    items[currentIndex].classList.add('col-6', 'active');
    
    const offset = Math.floor(totalItems / 2);
    for (let i = 0; i < totalItems; i++) {
      const position = (i - currentIndex + offset + totalItems) % totalItems;
      items[i].style.order = position;
    }
  }
  
}

updateItems();

window.addEventListener('resize', updateItems);

document.querySelector('.next').addEventListener('click', () => {
  currentIndex = (currentIndex + 1) % totalItems;
  updateItems();
});

document.querySelector('.prev').addEventListener('click', () => {
  currentIndex = (currentIndex - 1 + totalItems) % totalItems;
  updateItems();
});