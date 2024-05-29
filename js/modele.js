
/*Lightbox
let currentimage = 0
const lightboxlist = []
let images = document.querySelectorAll(".galerie a")
images.forEach((img)=>{
  let item = {
    src: img.src,
    ref: img.dataset.ref,
    cat: img.dataset.cat,  
  }
  lightboxlist.push(item)
  console.table(lightboxlist);
  
})

/*
const gallery = document.querySelectorAll(".galerie "),
lightbox = document.querySelector(".lightbox"),
closelightbox = document.querySelector(".lightbox__close"),
previewimg = document.querySelector(".galerie img");

window.onload = ()=>{
  for (let i = 0; i < gallery.length; i++){
      gallery[i].onclick = ()=>{
        //console.log(i);
        function preview(){
          let selectedImgUrl = gallery[i].querySelector("img").src;
          previewimg.src = selectedImgUrl["img"];
          console.log(selectedImgUrl);
        }
        preview();
        lightbox.classList.add("show");
        event.preventDefault();
        

        closelightbox.onclick = ()=>{
        lightbox.classList.remove("show");

        }  
        
      }
        
  }
}

SLIDER galerie

let left_arrow = document.querySelector(".lightbox__next");
let right_arrow = document.querySelector(".lightbox__next");
let slides = document.querySelector('.galerie img');
let titres = document.querySelector('.galerie p');
let liens = document.querySelectorAll(".galerie [href='href_value']");
let i = 0;

right_arrow.addEventListener("click" , () => {

	i++
	i = i % slides.length
	//if(i >= slides.length ){ i = 0 }
	//console.log(slides[i])
	

}
);

left_arrow.addEventListener("click" , () => {

	i--
	if(i < 0 ){ i = slides.length - 1 }
	console.log(slides[i])
		
	
} );

*/





	

