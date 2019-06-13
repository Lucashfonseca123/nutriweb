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

     let card = geraCard(id, 'macarrao', 'corpo', 'fim');
    //console.log(card);
    $('#cards').append(card);
    id++;
});

$('#btn2').click(function(card){

    delete(card.id);
    remove(card);
});

//Fim novo grupo

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