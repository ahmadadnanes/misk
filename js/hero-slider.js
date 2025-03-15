let i = 0;
const images = [
    '../theme/images/hero.png',
    '../theme/images/footer.png',
    '../theme/images/image-4.png'
];
const bull = document.getElementsByClassName("bullet");
const land = document.getElementById("hero");
const time = 6000;
let autoForwardTimer = null;

function updateBullets(index) {
    for(let j = 0; j < bull.length; j++) {
        bull[j].classList.remove("active");
    }
    bull[index].classList.add("active");
}

function updateImage() {
    land.style.backgroundImage = `url(${images[i]})`;
    updateBullets(i);
}

function autoForward() {
    i = (i + 1) % images.length;
    updateImage();
    updateBullets(i);
    autoForwardTimer = setTimeout(autoForward, time);
}

function stopAutoForward() {
    if (autoForwardTimer) {
        clearTimeout(autoForwardTimer);
        autoForwardTimer = null;
    }
}

for(let j = 0; j < bull.length; j++) {
    bull[j].addEventListener('click', () => {
        i = j;
        updateImage();
        
        if (isDesktop.matches) {
            stopAutoForward();
            autoForwardTimer = setTimeout(autoForward, time);
        }
    });
}

const isDesktop = window.matchMedia('(min-width: 1210px)');

function handleLayoutChange(mediaQuery) {
    stopAutoForward();
    
    if(mediaQuery.matches) {
        autoForward(); 
    }
}

handleLayoutChange(isDesktop);
isDesktop.addEventListener('change', handleLayoutChange);
updateImage();