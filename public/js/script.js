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
    let card = geraCard(id, 'Macarrão, 1550', 1);
    $('#cards').append(card);
    id++;
});

/*
$('#btn1').click(function(){
    let card = geraCard2(id, '2 colheres', 1);
    $('#cards2').append(card);
    id++;
});
*/

function adicionaElemento() {
    var x = document.getElementById("adicionarElemento");
    var option = document.createElement("option");
    option.text = "Kiwi";
    x.add(option);
  }

/*
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
*/


//Fim novo grupo


$('.escondido').hide();

$('.mostrar').click(function(){
    let alvo = $(this).attr('alvo');
    $('#' + alvo).fadeToggle("slow", "linear");
   // $(this).hide();
    $('.esconder').show();
});

$('.mostrar_esconder').click(function(){
    let alvo = $(this).attr('alvo');
    $('#' + alvo).fadeToggle("slow", "linear");
    $(this).hide();
    $('.menu').hide();
    $('.esconder').show();
});

/*
$('.mostrar2').click(function(){
    let alvo = $(this).attr('alvo');
    $('#' + alvo).fadeToggle("slow", "linear");
});
*/

/*
$('.mostrar_sempre').click(function(){
    let alvo = $(this).attr('alvo');
    $('#' + alvo).fadeToggle("slow", "linear");
    $('.esconder').show();
});
*/

$('.esconder').click(function(){
    let alvo = $(this).attr('alvo');
    $('#' + alvo).fadeToggle("slow", "linear");
    $(this).hide();
    $('.mostrar').show();
});

$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});

$(document).ready(function() {
    $("#somar").click(function() {
    		var lastField = $("#buildyourform div:last");
        var intId = (lastField && lastField.length && lastField.data("idx") + 1) || 1;
        var fieldWrapper = $("<div class=\"fieldwrapper\" id=\"field" + intId + "\"/>");
        fieldWrapper.data("idx", intId);
        var fName = $("<input type=\"text\" class=\"fieldname\" />");
        var fType = $("<select class=\"fieldtype\"><option value=\"checkbox\">Checked</option><option value=\"textbox\">Text</option><option value=\"textarea\">Paragraph</option></select>");
        var removeButton = $("<input type=\"button\" class=\"remove\" value=\"-\" />");
        removeButton.click(function() {
            $(this).parent().remove();
        });
        fieldWrapper.append(fName);
        fieldWrapper.append(fType);
        fieldWrapper.append(removeButton);
        $("#buildyourform").append(fieldWrapper);
    });

    $("#preview").click(function() {
        $("#yourform").remove();
        var fieldSet = $("<fieldset id=\"yourform\"><legend>Your Form</legend></fieldset>");
        $("#buildyourform div").each(function() {
            var id = "input" + $(this).attr("id").replace("field","");
            var label = $("<label for=\"" + id + "\">" + $(this).find("input.fieldname").first().val() + "</label>");
            var input;
            switch ($(this).find("select.fieldtype").first().val()) {
                case "checkbox":
                    input = $("<input type=\"checkbox\" id=\"" + id + "\" name=\"" + id + "\" />");
                    break;
                case "textbox":
                    input = $("<input type=\"text\" id=\"" + id + "\" name=\"" + id + "\" />");
                    break;
                case "textarea":
                    input = $("<textarea id=\"" + id + "\" name=\"" + id + "\" ></textarea>");
                    break;
            }
            fieldSet.append(label);
            fieldSet.append(input);
        });
        $("body").append(fieldSet);
    });
});

let contadorGrupo = 0;

$(document).ready(function() {

    $(".add-more").click(function(){
        // var html = $(".copy").html();
        // $(".after-add-more").after(html);
        var alimento = $("#alimentoTaco").val();
        var nomeAlimento = $(`#${alimento}`).html();
        var quantiAlimento = $("#quantidadeAli").val();
        var divAlimento = `<div id="div-${alimento}">
             <label for="">
                <input type="hidden" name="id_alimento[${contadorGrupo}]" style="width: 180px" class="form-control" value="${alimento}" readonly>
                <input type="text"  style="width: 180px" class="form-control" value="${nomeAlimento}" disabled>
             </label>  
             &ensp;
             <label for="">
                <input type="text" style="width: 114px" name="quantidadeAlimento[${contadorGrupo}]" class="form-control" value="${quantiAlimento}" readonly>
             </label>  
             &ensp;
             <label for="">
                <div class="remove btn btn-danger" target="#div-${alimento}" id="remove-${alimento}">-</div>
            </label>
            </div>`;

        contadorGrupo++;
        $(".copy").append(divAlimento);
        chamaRemove();
    });

    // $(".removeAppend").remove(alimento);

    //id="alimentoTaco" id="quantidadeAli"
    $("body").on("click",".remove",function(){
        $(this).parents(".control-group").remove();
    });

    // $(".removes").remove();

});

function chamaRemove(){
    $(".remove").click(function(){
        $($(this).attr('target')).remove();
    });
}

// var serialize = function (form) {
//     var data = form.serializeArray();
//     var json = {};
//     data.forEach(function (item) {
//         if (!json[item.name]) {
//             json[item.name] = item.value;
//             return;
//         }
//         if (!Array.isArray(json[item.name]))
//             json[item.name] = [json[item.name]];
//         json[item.name].push(item.value);
//     });
//     return json;
// }
//
// var form = $("form");
// var enviar = $("#enviado");
// enviar.on("click", function (event) {
//     event.preventDefault();
//     var json = serialize(form);
//     console.log(json);
// });