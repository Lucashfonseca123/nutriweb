jQuery(function ($) {

    $(".sidebar-dropdown > a").click(function() {
        $(".sidebar-submenu").slideUp(200);
        if (
            $(this)
                .parent()
                .hasClass("active")
        ) {
            $(".sidebar-dropdown").removeClass("active");
            $(this)
                .parent()
                .removeClass("active");
        } else {
            $(".sidebar-dropdown").removeClass("active");
            $(this)
                .next(".sidebar-submenu")
                .slideDown(200);
            $(this)
                .parent()
                .addClass("active");
        }
    });

    $("#close-sidebar").click(function() {
        $(".page-wrapper").removeClass("toggled");
    });
    $("#show-sidebar").click(function() {
        $(".page-wrapper").addClass("toggled");
    });

});

// Adicionar novo Grupo
let alimentos = [];

let id = 0;
let geraCard = function(id, header, body, footer){

    let card = document.createElement('div');
    let cardHeader = document.createElement('div');
  //  let cardBody = document.createElement('div');
  //  let cardFooter = document.createElement('div');

    card.className = 'card ';
    cardHeader.className = 'card-header card';
  //  cardBody.className = 'card-body';
  //  cardFooter.className = 'card-footer';

    cardHeader.append(header);
 //   cardBody.append(body);
 //   cardFooter.append(footer);

    card.append(cardHeader);
 //   card.append(cardBody);
 //   card.append(cardFooter);

    card.id = id;
    return card;
}

$('#btn1').click(function(){
    let card = geraCard(id, 'Macarrao', 'corpo', 'fim');
    $('#cards').append(card);
    id++;
});

$('#btn2').click(function(){
    let card = $(this).attr("cardId");
    $('#'+(id-1)).remove();
    id--;
});

//Fim novo grupo

/*
//Auto complete

$(function() {
    var alimentos = [
        "Manga",
        "Mamão",
        "Melão",
        "Mimosa"
    ];
    var pessoas = [
        "Marcos",
        "José",
        "Antonio"
    ];

    $("#alimentos" ).autocomplete({
        source: alimentos
    });
    $("#pessoas" ).autocomplete({
        source: pessoas
    });
});
*/


document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.autocomplete');
    var instances = M.Autocomplete.init(elems, options);
});


// Or with jQuery

$(document).ready(function(){
    $('input.autocomplete').autocomplete({
        data: {
            "Apple": null,
            "Microsoft": null,
            "Google": 'https://placehold.it/250x250'
        },
    });
});



$('.escondido').hide();

$('.mostrar').click(function(){
    let alvo = $(this).attr('alvo');
    $('#' + alvo).fadeToggle("slow", "linear");
    $(this).hide();
    $('.esconder').show();
});

$('.mostrar_sempre').click(function(){
    let alvo = $(this).attr('alvo');
    $('#' + alvo).fadeToggle("slow", "linear");
    $('.esconder').show();
});

$('.esconder').click(function(){
    let alvo = $(this).attr('alvo');
    $('#' + alvo).fadeToggle("slow", "linear");
    $(this).hide();
    $('.mostrar').show();
});
