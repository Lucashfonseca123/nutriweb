async function buscaCardapio(id){
    let retorno = undefined;

    $.ajax({
        url: `/busca_cardapio/${id}`,
        method: 'GET',
        async: false,
        success: function(response) {
            retorno = response.data.paciente_cardapio;
        }
    });

    if (typeof retorno !== "undefined") {
        return retorno;
    } else {
        console.log("Não foi possível buscar o cardápio do paciente");
        return null;
    }
}


$(".busca_paciente_cardapio").click(async function() {
    let paciente = $(this).attr('alvo');
    console.log(paciente);
    let cardapio  = await buscaCardapio(paciente);

    let times = [];

    let i = 0;

    cardapio.cardapios[0].itemcardapios.forEach(function (item) {
        times[i] = item;
        i++;
    });

    times.forEach(function(c) {
        let pos = times.indexOf(c) + 1;
        console.log(`#time${pos}: ${c.HorarioItemCardapio} : ${typeof c.HorarioItemCardapio}`);

        c.HorarioItemCardapio = c.HorarioItemCardapio === null ? '' : c.HorarioItemCardapio;

        $(`.time${pos}`).val(c.HorarioItemCardapio);
            // .html(
            // "<input type=`time` name='time["+pos+ "]' value='"+ c.HorarioItemCardapio +"' class='form-control col-md-10'>"
        // );
    });

    // console.log(times);
});