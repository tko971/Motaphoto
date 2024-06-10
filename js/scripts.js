
let liencontact = document.querySelectorAll(".btn-contact");
let modale = document.querySelector(".modale");


liencontact.forEach(function(e){
    e.addEventListener("click", toggleNav)

function toggleNav(e){
    e.preventDefault()
	modale.classList.toggle("active")
    modale.addEventListener("click" , toggleNav) 
}})

//MENU TOGGLE
let menuburger = document.querySelector(".menu-toggle");
let navhover = document.querySelector("#menu-main-menu");


menuburger.addEventListener("click", togglemenu)

function togglemenu(e){
    e.preventDefault()
	navhover.classList.toggle("active");
    menuburger.classList.toggle("active");
    navhover.addEventListener("click" , togglemenu) 
}

//CHARGER PLUS

var page = 4;

jQuery(function($) {
    $('body').on('click', '.loadmore', function() {
        $.ajax({
            type:'POST',
            url:ajax_data.ajaxurl,
            data:{
                action:"load_posts",
                
                
            },
            success:function(response){
                console.log(response)
                $('.galerie').append(response);//append ajoute les elements en plus des autres
                $('.loadmore').hide()
                // ajouter les événements sur le "carré"
                const ouvertureLightbox = document.querySelectorAll('.fullscreen.more');
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
                // recalculer le tableau 
                chargeListe();

            },
            error:function(response){

            },


        })
    })
    

    //FILTRES PHOTO

    $('#listecategories').on('change',function(event){
            $.ajax({
            type:'POST',
            url:ajax_data.ajaxurl,
            data:{
                action:"filtrephoto",
                categorie:$('#listecategories').val(),
                format:$('#listeformats').val(),
                ordre:$('#ordre').val(),
            },
            success:function(response){
                console.log(response)
                $('.galerie') .html (response);

            },
            error:function(response){

            },


        })
    })

    $('#listeformats').on('change',function(event){
        $.ajax({
        type:'POST',
        url:ajax_data.ajaxurl,
        data:{
            action:"filtrephoto",
            categorie:$('#listecategories').val(),
            format:$('#listeformats').val(),
            ordre:$('#ordre').val(),
        },
        success:function(response){
            console.log(response)
            $('.galerie') .html (response);

        },
        error:function(response){

        },


    })
})

$('#ordre').on('change',function(event){
    $.ajax({
    type:'POST',
    url:ajax_data.ajaxurl,
    data:{
        action:"filtrephoto",
        categorie:$('#listecategories').val(),
        format:$('#listeformats').val(),
        ordre:$('#ordre').val(),
    },
    success:function(response){
        console.log(response)
        $('.galerie') .html (response);

    },
    error:function(response){

    },


})
})

});



