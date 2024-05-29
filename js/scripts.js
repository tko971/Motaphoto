/*let liencontact = document.querySelector(".menu-item-75");
let modale = document.querySelector(".modale");


liencontact.addEventListener("click", toggleNav)

function toggleNav(e){
    e.preventDefault()
	modale.classList.toggle("active") 
}

//MODALE2
let liencontacte = document.querySelector(".menu-item-76");
let modalee = document.querySelector(".modale");


liencontacte.addEventListener("click", toggleNave)

function toggleNave(e){
    e.preventDefault()
	modalee.classList.toggle("active") 
}
*/
//MENU TOGGLE
let menuburger = document.querySelector(".menu-toggle");
let navhover = document.querySelector("#menu-main-menu");


menuburger.addEventListener("click", togglemenu)

function togglemenu(e){
    e.preventDefault()
	navhover.classList.toggle("active") 
}

//charger plus

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

            },
            error:function(response){

            },


        })
    })
    


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


