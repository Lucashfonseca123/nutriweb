<?php

use Illuminate\Database\Seeder;

class Cliente extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paciente')->insert([
            "NomePaciente" => "Bruno",
            "TelefonePaciente" => "42 99999-3233",
            "EmailPaciente" => "bruno@email.com",
            "SexoPaciente" => "M",
            "DataDeNascimentoPaciente" => "1998-03-10",
            "ProfissaoPaciente" => "Estudante",
            "IntoleranciaAlimentarPaciente" => "Toddy",
            "MastigacaoPaciente" => "Normal",
            "PrefAlimentaresPaciente" => "Macarrão",
            "AversaoAlimentarPaciente" => "Bucho",
            "TabagistaPaciente" => "N",
            "ConsumoAguaPaciente" => '2',
            "UsouSuplemPaciente" => "Creatina",
            "CozinhaCasaPaciente" => "Mãe do paciente",
            "Tempo_parouPaciente" => "0",
            "Cidade_idCidade" => '12',
            "Estado_idEstado" => '12',
            "Endereco_idEndereco" => '12',
            "TrabalhaHoraDiaPaciente" => '4',
            "ConsumoMedioPaciente" => '1',
            "Cigar_diaPaciente" => "0",
            "EtilistaPaciente" => "2",
            "DesjejumPaciente" => 'Água',
            "Lanche1Paciente" => 'Sanduíche',
            "AlmocoPaciente" => "Arroz, feijão,salada e frango",
            "Lanche2Paciente" => "Banana com iogurte",
            "JantarPaciente" => "Arroz, feijão, carne bovina e pepino",
            "CeiaPaciente" => "Cereais",
            "RotinaPaciente" => "Trabalho das 09 as 16, durmo pouco",
            "ExcluidoPaciente" => "0"
        ]);

        DB::table('consulta')

    }
}
