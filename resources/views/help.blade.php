@extends('layouts.pop_up')
@section('content')
   <div class="container">
      <div class="card">
         <div class="card-header text-center">
            <img src="\img\logo.png" style="width: 50px; float: right">
               <h3>Ajuda sistema Nutriweb</h3>
            <br>
         <div class="" id="1">
            <h3>Inscrição paciente</h3>
            <h5>Essa página é composta por 7 menus, destinada para fazer a avaliação completa do paciente, para iniciar a avaliação clique em cima do menu proposto. Os itens com * são obrigatórios.</h5>
            <br>
            <h6>Menu 1 - Inscrição paciente:</h6>
            <p>Esse menu é destinado para iniciar a avaliação do paciente, com dados básicos como Nome, Email, Telefone etc.</p>
            <h6>Menu 2 - Inscrição endereço paciente:</h6>
            <p>Esse menu é para cadastrar a localização do paciente, sendo necessário somentte o CEP e o número da casa/apartamento.</p>
            <h6>Menu 3 - Rotina e objetivo</h6>
            <p>Esse menu se caracteriza pelas informações de rotina do paciente e os objetivos que o paciente tem para a consulta. </p>
            <h6>Menu 4 - Dados clínicos</h6>
            <p>Esse menu refere-se a problemas já diagnosticados pelo paciente, juntamente com alguns hábitos diários.</p>
            <h6>Menu 5 - Avaliação antropométrica</h6>
            <p>Esse menu refere-se aos dados coletados pela nutricionista juntamente com o paciente consultado. Considerando que só números serão aceitos.</p>
            <h6>Menu 6 - Hábitos alimentares e sociais</h6>
            <p>Esse menu refere-se sobre os hábitos alimentares do paciente, alergias, preferências e comportamentos sociais.</p>
            <h6>Menu 7 - Inquérito Dietético</h6>
            <p>O último menu refere-se ao comportamento alimento do paciente nas últimas 24 horas, considerando 6 refeições. E é nesse menu que a consulta é finalizada. </p>
         </div>
            ______________________________________________________________________________

         <div class="" id="2"><br>
            <h3>Reconsulta paciente</h3>
            <h5>Esse página é destinada para após a primeira consulta do paciente.</h5>
            <p>Faça a busca do paciente no campo "Digite aqui...", irá retornar todos os paciente
               com nomes iguais ou parecidos com o pesquisado. Selecione o paciente a ser reconsultado
               e uma página com os campos de reconsulta será aberta, inclua valores nesses campos e
               selecione Salvar.</p>
         </div>
            ______________________________________________________________________________
         <div id="div3"></div>
         <div class="div3" ><br>
            <h3>Relatório paciente</h3>
            <h5>Destinado a gerar gráficos para melhor visualização do desenvolvimento do paciente.</h5>
            <p>Faça a busca do paciente no campo "Selecione paciente...", irá retornar todos os paciente
               com nomes iguais ou parecidos com o pesquisado. Após isso, selecione o paciente desejado, e irá ser retornado gráficos com as últimas consulas do paciente. </p>
         </div>
            ______________________________________________________________________________
         <div class="" id="4"><br>
            <h3>Cardápio paciente</h3>
            <h5>Destinado a gerar Cardápios para os paciente selecionados</h5>
            <p>Faça a busca do paciente no campo "Digite aqui...", irá retornar todos os paciente
               com nomes iguais ou parecidos com o pesquisado. Selecione o paciente a ser feito a dieta,
               e irá abrir os campos para a seleção de grupos e adição de horários, complete de acordo
               com sua preferência e clique em Salvar cardápio.</p>
         </div>
            ______________________________________________________________________________
         <div class="" id="5"><br>
            <h3>Grupo alimentares</h3>
            <h5>Destinado para a criação de grupos, de forma que fique mais fácil montar um cardápio.</h5>
            <p>Selecione Novo Grupo, irá abrir uma tela com 3 campos, adicione os alimentos e
               quantidade clicando no botão em verde de acordo com o modelo de grupo desejado,
               selecione quantos alimentos forem necessários. Após finalizado clique em Salvar grupo.</p>
         </div>
            ______________________________________________________________________________
         <div class="" id="6"><br>
            <h3>Editar cardápio</h3>
            <h5>Destinado para edições em cardápios já finalizados.</h5>
               <p>Faça a busca do paciente no campo "Digite aqui...", irá retornar todos os paciente
               com nomes iguais ou parecidos com o pesquisado. O paciente será retornado com o cardápio
               carregado, faça as alterações necessárias e clique em Salvar cardápio.</p>
         </div>
            ______________________________________________________________________________
         <div class="" id="7"><br>
            <h3>Editar grupo</h3>
            <h5>Destinado para edições em grupos já finzalidos.</h5>
            <p>Selecione o grupo desejado clicando em cima do campo.
               Após selecionado, irá abrir uma tela para editar ou remover esse grupo,
               caso clique em editar, irá abrir uma tela com o grupo antigo desabilitado,
               e o novo grupo habilitado para fazer mudanças necessárias. Após editado
               clique em salvar.</p>
         </div>
            ______________________________________________________________________________
         <div class="" id="8"><br>
            <h3>Adicionar alimento</h3>
            <h5>Destinado para fazer a adição de alimentos não inscritos na tabela taco.</h5>
            <p>A tela se inicia com os campos necessários para inscrever outro alimento na tabela
               taco, lembrando que no menu esquerdo é possível fazer uma busca em todos os alimentos
               da tabela taco, clicando em "Buscar Alimento"</p>
         </div>
            ______________________________________________________________________________
         <div class="" id="9"><br>
            <h3>Editar informação paciente</h3>
            <h5>Destinado para edições de paciente, já cadastrados.</h5>
            <p>Faça a busca do paciente no campo "Digite aqui...", irá retornar todos os paciente
               com nomes iguais ou parecidos com o pesquisado. Selecione a opção editar, e irá
               abrir uma tela de edição com todos os dados do paciente já cadastrado, altere como
               necessário e clique em salvar. Ou caso não queira editar, é possível excluir o
               paciente, clicando no botão "Excluir".</p>
         </div>
            ______________________________________________________________________________
         <div class="" id="10"><br>
            <h3>Cardápio pendentes</h3>
            <h5>Essa é a tela inicial no programa, destinada a verificar cardápios ainda não formulados.</h5>
            <p>A tela inicia-se com os pacientes com cadastro pendente, ou caso você queira procurar por um caso específico,
               faça a busca do paciente no campo "Digite aqui...", irá retornar todos os paciente
               com nomes iguais ou parecidos com o pesquisado. E caso queira, é possível montar o cardápio do Paciente seleionado,
               clicando em "Montar cardápio".</p>
         </div>
            ______________________________________________________________________________
         <div class="" id="11"><br>
            <h3>Histórico de consultas</h3>
            <h5>Destinado para verificar as consultas do paciente selecionado.</h5>
            <p>Faça a busca do paciente no campo "Digite aqui...", irá retornar todos os paciente
               com nomes iguais ou parecidos com o pesquisado. Selecione o paciente desejado, e irá
               abrir uma página com os dados antropométricos do paciente. Caso o paciente tenha mais
               que 1 consulta, é possível navegar por tela sobre cada consulta.</p>
         </div>
            ______________________________________________________________________________
            <div class="" id="12"><br>
               <h3>Reativar paciente</h3>
               <h5>Destinado para reativar pacientes após excluidos.</h5>
               <p>Faça a busca do paciente no campo "Digite aqui...", irá retornar todos os paciente
                  com nomes iguais ou parecidos com o pesquisado. Selecione o paciente desejado, e selecione
                  o botão "Ativar" para reativar o paciente desejado.
                  .</p>
            </div>
      </div>
      </div>
   </div>
@endsection




