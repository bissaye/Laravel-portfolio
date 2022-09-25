//Start Animation on scroll
let ratio = .4
let options = {
  root: null,
  rootMargin: '0px',
  threshold: ratio
}

const handleIntersect = function (entries, observer){
  entries.forEach(element => {
    if(element.intersectionRatio > ratio){
      element.target.classList.add('reveal-visible');
      element.target.classList.remove('reveal');
    }else{
      element.target.classList.remove('reveal-visible');
      element.target.classList.add('reveal');
    }
  });
}

let observer = new IntersectionObserver(handleIntersect, options);
let listElement = document.querySelectorAll('.reveal');
listElement.forEach(element=>{
  observer.observe(element);
})
//End Animation on scroll


//Animation link scroll
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
      e.preventDefault();

      document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
      });
  });
});
//End Animation link scroll
