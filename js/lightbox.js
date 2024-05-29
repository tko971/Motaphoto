const images = document.querySelector(".lightbox__container__photo img");
const links = document.querySelectorAll('.galerie_photos img');
const galleryimg = document.querySelector("galerie img");
let fullscreen = document.querySelectorAll('.fullscreen');
const closelightbox = document.querySelector(".lightbox__close");
const lightbox = document.querySelector(".lightbox");
const lightboxnext = document.querySelector(".lightbox__next");




links.forEach(function (i) {

  i.addEventListener('click', function(event) {
  for (let i = 0; i < links.length; i++)
  imageUrl = event.target.src
  images.src = imageUrl  
  //console.log(event.target);
  
  
  
lightbox.classList.toggle("show");
lightboxnext.addEventListener("click" , () => {
  for (let i = 0; i < links.length; i++)
  imageurl = links[i].src;
  images.src = imageurl;  
	//console.log(links[i]);
  
	
}
);
  });
});




closelightbox.addEventListener("click", lightboxclose);

function lightboxclose() {
  
  lightbox.classList.remove("show");


}  



  