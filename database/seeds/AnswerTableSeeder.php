<?php

use Illuminate\Database\Seeder;
use App\Answer;

class AnswerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('answers')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $date_answers = [
            ['description' => 'Substâncias que alteram o sistema neuropsicomotor.', 'categories_id' => 1, 'questions_id' => 1, 'correct_answer' => 1], 
            ['description' => 'Bebida com alto teor alcoólico.', 'categories_id' => 1, 'questions_id' => 1, 'correct_answer' => 0], 
            ['description' => 'Substância que provocam sonolência.', 'categories_id' => 1, 'questions_id' => 1, 'correct_answer' => 0], 
            ['description' => 'Bebidas alcoólicas misturadas.', 'categories_id' => 1, 'questions_id' => 1, 'correct_answer' => 0],

            ['description' => 'Condição segura para que o condutor tenha tempo de reagir e acionar os freios bruscamente, diante de situação de emergência.', 'categories_id' => 1, 'questions_id' => 2, 'correct_answer' => 0],
            ['description' => 'Conduta desnecessária para a segurança no trânsito.', 'categories_id' => 1, 'questions_id' => 2, 'correct_answer' => 0],
            ['description' => 'Condição segura para que o condutor tenha tempo de reagir e acionar os freios diante de situação de emergência.', 'categories_id' => 1, 'questions_id' => 2, 'correct_answer' => 1],
            ['description' => ' Conduta que contraria as normas de direção defensiva.', 'categories_id' => 1, 'questions_id' => 2, 'correct_answer' => 0],

            ['description' => 'Utilizar o "ponto morto".', 'categories_id' => 1, 'questions_id' => 3, 'correct_answer' => 0],
            ['description' => 'Utilizar a mesma marcha que seria necessária no caso de um aclive acentuado.', 'categories_id' => 1, 'questions_id' => 3, 'correct_answer' => 1],
            ['description' => 'Testar o acelerador e desengrenar o veículo.', 'categories_id' => 1, 'questions_id' => 3, 'correct_answer' => 0],
            ['description' => 'Desligar o motor do veículo.', 'categories_id' => 1, 'questions_id' => 3, 'correct_answer' => 0],

            ['description' => 'Um motorista profissional.', 'categories_id' => 1, 'questions_id' => 4, 'correct_answer' => 0],
            ['description' => 'Um motorista corretivo.', 'categories_id' => 1, 'questions_id' => 4, 'correct_answer' => 0],
            ['description' => 'Um especialista em trânsito.', 'categories_id' => 1, 'questions_id' => 4, 'correct_answer' => 0],
            ['description' => 'Um bom cidadão.', 'categories_id' => 1, 'questions_id' => 4, 'correct_answer' => 1],

            ['description' => 'Decisão', 'categories_id' => 1, 'questions_id' => 5, 'correct_answer' => 0],
            ['description' => 'Interação', 'categories_id' => 1, 'questions_id' => 5, 'correct_answer' => 1],
            ['description' => 'Conhecimento', 'categories_id' => 1, 'questions_id' => 5, 'correct_answer' => 0],
            ['description' => 'Atenção', 'categories_id' => 1, 'questions_id' => 5, 'correct_answer' => 0],

            ['description' => 'Corretiva', 'categories_id' => 1, 'questions_id' => 6, 'correct_answer' => 0],
            ['description' => 'Avaliativa', 'categories_id' => 1, 'questions_id' => 6, 'correct_answer' => 0],
            ['description' => 'Participativa', 'categories_id' => 1, 'questions_id' => 6, 'correct_answer' => 0],
            ['description' => 'Preventiva', 'categories_id' => 1, 'questions_id' => 6, 'correct_answer' => 1],

            ['description' => 'Abre as janelas e prossegue o trajeto.', 'categories_id' => 1, 'questions_id' => 7, 'correct_answer' => 0],
            ['description' => 'Acelera mais para dissipar os pingos de chuva.', 'categories_id' => 1, 'questions_id' => 7, 'correct_answer' => 0],
            ['description' => 'Para o veículo em local seguro e aguarda.', 'categories_id' => 1, 'questions_id' => 7, 'correct_answer' => 1],
            ['description' => 'Liga os faróis altos.', 'categories_id' => 1, 'questions_id' => 7, 'correct_answer' => 0],

            ['description' => 'Desnecessário, pois não contribui para a diminuição dos acidentes.', 'categories_id' => 1, 'questions_id' => 8, 'correct_answer' => 0],
            ['description' => 'Dever do Estado e não dos condutores.', 'categories_id' => 1, 'questions_id' => 8, 'correct_answer' => 0],
            ['description' => 'Uma demonstração de respeito à pessoa humana.', 'categories_id' => 1, 'questions_id' => 8, 'correct_answer' => 1],
            ['description' => 'Necessário às diferenças individuais.', 'categories_id' => 1, 'questions_id' => 8, 'correct_answer' => 0],

            ['description' => 'Fazer valer seu direito, exigindo-o.', 'categories_id' => 1, 'questions_id' => 9, 'correct_answer' => 1],
            ['description' => 'Realizar uma viagem, sem infrações de trânsito.', 'categories_id' => 1, 'questions_id' => 9, 'correct_answer' => 0],
            ['description' => 'Realizar uma viagem sem faltar com a cortesia devida no trânsito.', 'categories_id' => 1, 'questions_id' => 9, 'correct_answer' => 0],
            ['description' => 'É uma maneira de encarar a tarefa de dirigir para reduzir a possibilidade de ser envolvido em acidentes.', 'categories_id' => 1, 'questions_id' => 9, 'correct_answer' => 0],

            ['description' => 'Mudar de faixa de rolamento.', 'categories_id' => 1, 'questions_id' => 10, 'correct_answer' => 0],
            ['description' => 'Manter-se calmo.', 'categories_id' => 1, 'questions_id' => 10, 'correct_answer' => 1],
            ['description' => 'Desligar o veículo.', 'categories_id' => 1, 'questions_id' => 10, 'correct_answer' => 0],
            ['description' => 'Buzinar sem parar.', 'categories_id' => 1, 'questions_id' => 10, 'correct_answer' => 0],
        ];
        Answer::insert($date_answers);
    }
}
