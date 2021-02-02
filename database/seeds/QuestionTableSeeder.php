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
            ['questions_id' => '1', 'description' => 'Assinale a definição correta de drogas psicoativas:', 'categories_id' => 1], 
            ['questions_id' => '2', 'description' => 'Manter uma distância do veículo da frente é uma:', 'categories_id' => 1], 
            ['questions_id' => '3', 'description' => 'O procedimento correto em um declive acentuado é:', 'categories_id' => 1], 
            ['questions_id' => '4', 'description' => 'É correto afirmar que o condutor defensivo geralmente é:', 'categories_id' => 1], 
            ['questions_id' => '5', 'description' => 'Não constitui fundamento da direção defensiva:', 'categories_id' => 1],
            ['questions_id' => '6', 'description' => 'O condutor que, na direção do veículo, evita situações de acidentes ao trafegar com as devidas margens de segurança, está praticando uma direção defensiva:', 'categories_id' => 1],
            ['questions_id' => '7', 'description' => 'Chove forte e o limpador de para brisa de seu veículo não está sendo suficiente para manter a visibilidade. Nessa situação você:', 'categories_id' => 1],
            ['questions_id' => '8', 'description' => 'Valorizar comportamentos relacionados à segurança no trânsito é:', 'categories_id' => 1],
            ['questions_id' => '9', 'description' => 'Assinale a alternativa incorreta. O que é Direção Defensiva?', 'categories_id' => 1],
            ['questions_id' => '10', 'description' => 'Em uma via onde existir dificuldade de deslocamentos com rapidez, devido ao engarrafamento no trânsito, o condutor deverá:', 'categories_id' => 1]
        ];
        Question::insert($date_questions);
    }
}
