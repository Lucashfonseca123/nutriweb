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
/*
// Adicionando novo alimento

$(document).ready(function(){
    $("#btn1").click(function(){
        $('.test').append('1sada');
    });

    $("#btn2").click(function(){
        $("ol").append("<li>Appended item</li>");
    });
});
*/

//Fim novo Alimento

// Adicionar novo Grupo

let id = 0;
let geraCard = function(id, header, body, footer){

    let card = document.createElement('div');
    let cardHeader = document.createElement('div');
    let cardBody = document.createElement('div');
    let cardFooter = document.createElement('div');

    card.className = 'card col-md-4';
    cardHeader.className = 'card-header';
    cardBody.className = 'card-body';
    cardFooter.className = 'card-footer';

    cardHeader.append(header);
    cardBody.append(body);
    cardFooter.append(footer);

    card.append(cardHeader);
    card.append(cardBody);
    card.append(cardFooter);

    card.id = id;
    return card;
}

$('#btn1').click(function(){

     let card = geraCard(id, 'titulo', 'corpo', 'fim');
    console.log(card);
    $('#cards').append(card);
    id++;
});

//Fim novo grupo