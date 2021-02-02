<?php

use Illuminate\Database\Seeder;
use App\Question;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('questions')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $date_questions = [
            //direção defensiva
            ['questions_id' => '1', 'description' => 'Assinale a definição correta de drogas psicoativas:', 'categories_id' => 1], 
            ['questions_id' => '2', 'description' => 'Manter uma distância do veículo da frente é uma:', 'categories_id' => 1], 
            ['questions_id' => '3', 'description' => 'O procedimento correto em um declive acentuado é:', 'categories_id' => 1], 
            ['questions_id' => '4', 'description' => 'É correto afirmar que o condutor defensivo geralmente é:', 'categories_id' => 1], 
            ['questions_id' => '5', 'description' => 'Não constitui fundamento da direção defensiva:', 'categories_id' => 1],
            ['questions_id' => '6', 'description' => 'O condutor que, na direção do veículo, evita situações de acidentes ao trafegar com as devidas margens de segurança, está praticando uma direção defensiva:', 'categories_id' => 1],
            ['questions_id' => '7', 'description' => 'Chove forte e o limpador de para brisa de seu veículo não está sendo suficiente para manter a visibilidade. Nessa situação você:', 'categories_id' => 1],
            ['questions_id' => '8', 'description' => 'Valorizar comportamentos relacionados à segurança no trânsito é:', 'categories_id' => 1],
            ['questions_id' => '9', 'description' => 'Assinale a alternativa incorreta. O que é Direção Defensiva?', 'categories_id' => 1],
            ['questions_id' => '10', 'description' => 'Em uma via onde existir dificuldade de deslocamentos com rapidez, devido ao engarrafamento no trânsito, o condutor deverá:', 'categories_id' => 1],

            // processo de habilitação
            ['questions_id' => '11', 'description' => 'Somente poderá transitar pelas vias terrestres o veículo cujo peso e dimensões atenderem aos limites estabelecidos pelo:', 'categories_id' => 2], 
            ['questions_id' => '12', 'description' => 'É considerada falta eliminatória durante a realização dos exames de direção veicular para as categorias “B”, “C”, “D” e “E”:', 'categories_id' => 2], 
            ['questions_id' => '13', 'description' => 'Ao moto-fretista e ao moto-taxista é exigido Curso Especializado de 30 h/a. Dentre os requisitos para a realização do curso, é necessário:', 'categories_id' => 2], 
            ['questions_id' => '14', 'description' => 'A identificação do documento de habilitação e da autoridade expedidora são registrados no:', 'categories_id' => 2], 
            ['questions_id' => '15', 'description' => 'Considera-se trânsito a utilização das vias por:', 'categories_id' => 2], 
            ['questions_id' => '16', 'description' => 'É órgão recursal:', 'categories_id' => 2], 
            ['questions_id' => '17', 'description' => 'No caso de transferência de propriedade, o CRV deverá ser apresentado ao DETRAN no prazo de:', 'categories_id' => 2], 
            ['questions_id' => '18', 'description' => 'Escolha a alternativa que completa a frase: "Será conferido ao candidato, aprovado em todos os exames exigidos à habilitação, o documento denominado ________ com validade de ________."', 'categories_id' => 2], 
            ['questions_id' => '19', 'description' => 'Um candidato à obtenção da Carteira Nacional de Habilitação, durante o exame de direção veicular para a categoria "A", derruba um cone de balizamento. Nessas condições, ele será:', 'categories_id' => 2], 
            ['questions_id' => '20', 'description' => 'Ao transferir a propriedade, mudar de município ou for alterar qualquer uma das características do veículo será obrigatória a expedição:', 'categories_id' => 2], 
            
            // Infrações e penalidades
            ['questions_id' => '21', 'description' => '', 'categories_id' => 3], 
            ['questions_id' => '22', 'description' => '', 'categories_id' => 3], 
            ['questions_id' => '23', 'description' => '', 'categories_id' => 3], 
            ['questions_id' => '24', 'description' => '', 'categories_id' => 3], 
            ['questions_id' => '25', 'description' => '', 'categories_id' => 3], 
            ['questions_id' => '26', 'description' => '', 'categories_id' => 3], 
            ['questions_id' => '27', 'description' => '', 'categories_id' => 3], 
            ['questions_id' => '28', 'description' => '', 'categories_id' => 3], 
            ['questions_id' => '29', 'description' => '', 'categories_id' => 3], 
            ['questions_id' => '30', 'description' => '', 'categories_id' => 3], 

            // Sinalização de trânsito
            ['questions_id' => '31', 'description' => '', 'categories_id' => 4], 
            ['questions_id' => '32', 'description' => '', 'categories_id' => 4], 
            ['questions_id' => '33', 'description' => '', 'categories_id' => 4], 
            ['questions_id' => '34', 'description' => '', 'categories_id' => 4], 
            ['questions_id' => '35', 'description' => '', 'categories_id' => 4], 
            ['questions_id' => '36', 'description' => '', 'categories_id' => 4], 
            ['questions_id' => '37', 'description' => '', 'categories_id' => 4], 
            ['questions_id' => '38', 'description' => '', 'categories_id' => 4], 
            ['questions_id' => '39', 'description' => '', 'categories_id' => 4], 
            ['questions_id' => '40', 'description' => '', 'categories_id' => 4], 

            // Normas de circulação
            ['questions_id' => '41', 'description' => '', 'categories_id' => 5], 
            ['questions_id' => '42', 'description' => '', 'categories_id' => 5], 
            ['questions_id' => '43', 'description' => '', 'categories_id' => 5], 
            ['questions_id' => '44', 'description' => '', 'categories_id' => 5], 
            ['questions_id' => '45', 'description' => '', 'categories_id' => 5], 
            ['questions_id' => '46', 'description' => '', 'categories_id' => 5], 
            ['questions_id' => '47', 'description' => '', 'categories_id' => 5], 
            ['questions_id' => '48', 'description' => '', 'categories_id' => 5], 
            ['questions_id' => '49', 'description' => '', 'categories_id' => 5], 
            ['questions_id' => '50', 'description' => '', 'categories_id' => 5], 

            // Primeiros socorros
            ['questions_id' => '51', 'description' => '', 'categories_id' => 6], 
            ['questions_id' => '52', 'description' => '', 'categories_id' => 6], 
            ['questions_id' => '53', 'description' => '', 'categories_id' => 6], 
            ['questions_id' => '54', 'description' => '', 'categories_id' => 6], 
            ['questions_id' => '55', 'description' => '', 'categories_id' => 6], 
            ['questions_id' => '56', 'description' => '', 'categories_id' => 6], 
            ['questions_id' => '57', 'description' => '', 'categories_id' => 6], 
            ['questions_id' => '58', 'description' => '', 'categories_id' => 6], 
            ['questions_id' => '59', 'description' => '', 'categories_id' => 6], 
            ['questions_id' => '60', 'description' => '', 'categories_id' => 6], 

            // Meio ambiente e cidadania
            ['questions_id' => '61', 'description' => '', 'categories_id' => 7], 
            ['questions_id' => '62', 'description' => '', 'categories_id' => 7], 
            ['questions_id' => '63', 'description' => '', 'categories_id' => 7], 
            ['questions_id' => '64', 'description' => '', 'categories_id' => 7], 
            ['questions_id' => '65', 'description' => '', 'categories_id' => 7], 
            ['questions_id' => '66', 'description' => '', 'categories_id' => 7], 
            ['questions_id' => '67', 'description' => '', 'categories_id' => 7], 
            ['questions_id' => '68', 'description' => '', 'categories_id' => 7], 
            ['questions_id' => '69', 'description' => '', 'categories_id' => 7], 
            ['questions_id' => '70', 'description' => '', 'categories_id' => 7], 

            // Mecânica básica de veículos
            ['questions_id' => '71', 'description' => '', 'categories_id' => 8], 
            ['questions_id' => '72', 'description' => '', 'categories_id' => 8], 
            ['questions_id' => '73', 'description' => '', 'categories_id' => 8], 
            ['questions_id' => '74', 'description' => '', 'categories_id' => 8], 
            ['questions_id' => '75', 'description' => '', 'categories_id' => 8], 
            ['questions_id' => '76', 'description' => '', 'categories_id' => 8], 
            ['questions_id' => '77', 'description' => '', 'categories_id' => 8], 
            ['questions_id' => '78', 'description' => '', 'categories_id' => 8], 
            ['questions_id' => '79', 'description' => '', 'categories_id' => 8], 
            ['questions_id' => '80', 'description' => '', 'categories_id' => 8], 

        ];
        Question::insert($date_questions);
    }
}
