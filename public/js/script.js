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
let btn3 = 0;
let geraCard = function(id, header, btn){

    if(id == 1 & btn != 0){
        header = 'Peixe';
    }
    else if(btn == 0 & id ==1) {
        header = 'Cetogênica';
    }
    if(id == 2 & btn != 0){
        header = 'Feijão';
    }
    else if(btn == 0 & id ==2) {
        header = 'High Carb';
    }

    let card = document.createElement('div');
    let cardHeader = document.createElement('div');

    card.className = 'card ';
    cardHeader.className = 'card-header card';

    cardHeader.append(header);

    card.append(cardHeader);

    card.id = id;
    return card;
}

let geraCard2 = function(id, header, btn){

    let card2 = document.createElement('div');
    let cardHeader2 = document.createElement('div');

    card2.className = 'card ';
    cardHeader2.className = 'card-header card';

    cardHeader2.append(header);

    card2.append(cardHeader2);

    card2.id = id;
    return card2;
}


$('#btn1').click(function(){
    let card = geraCard(id, 'Macarrão', 1);
    $('#cards').append(card);
    id++;
});

$('#btn1').click(function(){
    let card = geraCard2(id, '4 unidades', 1);
    $('#cards2').append(card);
    id++;
});

$('#btn2').click(function(){
    let card = $(this).attr("cardId");
    $('#'+(id-1)).remove();
    id--;
});

$('#btn2').click(function(){
    let card2 = $(this).attr("cardId");
    $('#'+(id-1)).remove();
    id--;
});

$('#btn3').click(function(){
    let card = geraCard(id, 'Low Carb', btn3);
    $('#cards').append(card);
    id++;
});

//Fim novo grupo

//Auto complete

$(function() {
    var alimentos = [
        "Macarrão",
        "Mamão",
        "Melão",
        "Mimosa"
    ];
    var pessoas = [
        "André",
        "José",
        "Antonio",
        "Jessé"
    ];
    var grupo = [
        "Low Carb",
        "High Carb",
        "Cetogênica"
    ];

    $("#alimentos" ).autocomplete({
        source: alimentos
    });
    $("#pessoas" ).autocomplete({
        source: pessoas
    });
    $("#grupo" ).autocomplete({
        source: grupo
    });
});

$('.escondido').hide();

$('.mostrar').click(function(){
    let alvo = $(this).attr('alvo');
    $('#' + alvo).fadeToggle("slow", "linear");
    $(this).hide();
    $('.esconder').show();
});

$('.mostrar2').click(function(){
    let alvo = $(this).attr('alvo');
    $('#' + alvo).fadeToggle("slow", "linear");
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
