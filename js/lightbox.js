// const images = document.querySelector(".lightbox__container__photo img");
const links = document.querySelectorAll('.galerie_photos img');
const galleryimg = document.querySelector("galerie img");
let fullscreen = document.querySelectorAll('.fullscreen');
const closelightbox = document.querySelector(".lightbox__close");
const lightbox = document.querySelector(".lightbox");
const lightboxnext = document.querySelector(".lightbox__next");
const lightboxprev = document.querySelector(".lightbox__prev");




// links.forEach(function (i) {

//   i.addEventListener('click', function(event) {
//   for (let i = 0; i < links.length; i++)
//   imageUrl = event.target.src
//   images.src = imageUrl  
//   //console.log(event.target);
  
  
  
// lightbox.classList.toggle("show");
// lightboxnext.addEventListener("click" , () => {
//   for (let i = 0; i < links.length; i++)
//   imageurl = links[i].src;
//   images.src = imageurl;  
// 	//console.log(links[i]);
  
	
// }
// );
//   });
// });




closelightbox.addEventListener("click", lightboxclose);

function lightboxclose() {
  
  lightbox.classList.remove("show");


}  

// 30/05/2024

const ouvertureLightbox = document.querySelectorAll('.fullscreen');
// const lightbox=document.querySelector('.lightbox');
const lb_img = document.querySelector('#lightbox-img');
const lb_cat = document.querySelector('#lightbox-cat');
const lb_ref = document.querySelector('#lightbox-ref');

ouvertureLightbox.forEach(function(carre) {
  carre.addEventListener('click', function() {
    lightbox.classList.toggle('show');
    lb_img.setAttribute('src', carre.dataset.src);
    lb_cat.innerHTML =  carre.dataset.cat;
    lb_ref.innerHTML =  carre.dataset.ref;
  })
})

  
/* Lightbox */
function chargeListe() {
  let currentImage = 0
  const lightboxlist = []
  
  let dataImages = document.querySelectorAll(".fullscreen")
  dataImages.forEach((img)=>{
    let item = {
      src: img.dataset.src,
      ref: img.dataset.ref,
      cat: img.dataset.cat,  
    }
    lightboxlist.push(item)
    console.table(lightboxlist);  
  })
  
  lightboxnext.addEventListener('click', function() {
    currentImage++;
    if(currentImage > lightboxlist.length) {
      currentImage = 0;
    }
    lb_img.setAttribute('src', lightboxlist[currentImage].src);
    lb_cat.innerHTML =  lightboxlist[currentImage].cat;
    lb_ref.innerHTML =  lightboxlist[currentImage].ref;
  })

  lightboxprev.addEventListener('click', function() {
    currentImage--;
    if(currentImage < 0) {
      currentImage = lightboxlist.length;
    }
    lb_img.setAttribute('src', lightboxlist[currentImage].src);
    lb_cat.innerHTML =  lightboxlist[currentImage].cat;
    lb_ref.innerHTML =  lightboxlist[currentImage].ref;
  })

  console.log(lightboxlist);
}

chargeListe();