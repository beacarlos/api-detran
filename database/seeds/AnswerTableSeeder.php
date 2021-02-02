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
            //direção defensiva
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
            
            // processo de habilitação
            ['description' => 'DENATRAN', 'correct_answer' => 0, 'categories_id' => 2, 'questions_id' => 11],
            ['description' => 'CONTRAN', 'correct_answer' => 1, 'categories_id' => 2, 'questions_id' => 11],
            ['description' => 'DETRAN', 'correct_answer' => 0, 'categories_id' => 2, 'questions_id' => 11],
            ['description' => 'CONTRANDIFE', 'correct_answer' => 0, 'categories_id' => 2, 'questions_id' => 11],

            ['description' => 'Avançar sobre o balizamento demarcado quando do estacionamento do veículo na vaga.', 'correct_answer' => 1, 'categories_id' => 2, 'questions_id' => 12],
            ['description' => 'Não usar devidamente o cinto de segurança.', 'correct_answer' => 0, 'categories_id' => 2, 'questions_id' => 12],
            ['description' => 'Usar buzina sem necessidade ou em local proibido.', 'correct_answer' => 0, 'categories_id' => 2, 'questions_id' => 12],
            ['description' => 'Tentar movimentar o veículo com a engrenagem de tração em ponto neutro.', 'correct_answer' => 0, 'categories_id' => 2, 'questions_id' => 12],

            ['description' => 'Ter no mínimo 25 anos e 1 ano na categoria "A".', 'correct_answer' => 0, 'categories_id' => 2, 'questions_id' => 13],
            ['description' => 'Ter no mínimo 20 anos e 2 anos na categoria "B".', 'correct_answer' => 0, 'categories_id' => 2, 'questions_id' => 13],
            ['description' => 'Ter no mínimo 21 anos e 2 anos na categoria "A".', 'correct_answer' => 1, 'categories_id' => 2, 'questions_id' => 13],
            ['description' => 'Ter no mínimo 18 anos e 1 ano na categoria "A".', 'correct_answer' => 0, 'categories_id' => 2, 'questions_id' => 13],

            ['description' => 'RENAVAM', 'correct_answer' => 0, 'categories_id' => 2, 'questions_id' => 14],
            ['description' => 'RENACH', 'correct_answer' => 1, 'categories_id' => 2, 'questions_id' => 14],
            ['description' => 'RENACOM', 'correct_answer' => 0, 'categories_id' => 2, 'questions_id' => 14],
            ['description' => 'CETRAN', 'correct_answer' => 0, 'categories_id' => 2, 'questions_id' => 14],

            ['description' => 'Pessoas e animais, isolados ou em grupos.', 'correct_answer' => 0, 'categories_id' => 2, 'questions_id' => 15],
            ['description' => 'Pessoas, veículos e animais, isolados ou em grupos, conduzidos ou não.', 'correct_answer' => 1, 'categories_id' => 2, 'questions_id' => 15],
            ['description' => 'Veículos conduzidos por condutores habilitados.', 'correct_answer' => 0, 'categories_id' => 2, 'questions_id' => 15],
            ['description' => 'Pessoas e veículos, conduzidos ou não.', 'correct_answer' => 0, 'categories_id' => 2, 'questions_id' => 15],
            
            ['description' => 'Departamento Nacional de Trânsito - DENATRAN.', 'correct_answer' => 0, 'categories_id' => 2, 'questions_id' => 16],
            ['description' => 'Polícia Rodoviária Federal - PRF.', 'correct_answer' => 0, 'categories_id' => 2, 'questions_id' => 16],
            ['description' => 'Junta Administrativa de Recursos de Infrações - JARI.', 'correct_answer' => 1, 'categories_id' => 2, 'questions_id' => 16],
            ['description' => 'Departamento de Trânsito - DETRAN.', 'correct_answer' => 0, 'categories_id' => 2, 'questions_id' => 16],

            ['description' => '60 dias.', 'correct_answer' => 0, 'categories_id' => 2, 'questions_id' => 17],
            ['description' => '45 dias.', 'correct_answer' => 0, 'categories_id' => 2, 'questions_id' => 17],
            ['description' => '90 dias.', 'correct_answer' => 0, 'categories_id' => 2, 'questions_id' => 17],
            ['description' => '30 dias.', 'correct_answer' => 1, 'categories_id' => 2, 'questions_id' => 17],

            ['description' => 'Autorização para conduzir ciclomotor ou Carteira Nacional de Habilitação; 01 ano.', 'correct_answer' => 0, 'categories_id' => 2, 'questions_id' => 18],
            ['description' => 'Autorização para conduzir ciclomotores ou Carteira Nacional de Habilitação; 05 anos.', 'correct_answer' => 0, 'categories_id' => 2, 'questions_id' => 18],
            ['description' => 'Autorização para conduzir qualquer veículo automotor; 01 ano.', 'correct_answer' => 0, 'categories_id' => 2, 'questions_id' => 18],
            ['description' => 'Autorização para Conduzir Ciclomotores provisória ou Permissão Para Dirigir (PPD); 01 ano.', 'correct_answer' => 1, 'categories_id' => 2, 'questions_id' => 18],

            ['description' => 'Aprovado, desde que não cometa outra falta grave.', 'correct_answer' => 0, 'categories_id' => 2, 'questions_id' => 19],
            ['description' => 'Reprovado, devendo realizar novo exame.', 'correct_answer' => 1, 'categories_id' => 2, 'questions_id' => 19],
            ['description' => 'Aprovado, desde que não cometa outra falta média.', 'correct_answer' => 0, 'categories_id' => 2, 'questions_id' => 19],
            ['description' => 'Reprovado, devendo recomeçar todo o procedimento de formação do condutor.', 'correct_answer' => 0, 'categories_id' => 2, 'questions_id' => 19],

            ['description' => 'De novo CLV.', 'correct_answer' => 0, 'categories_id' => 2, 'questions_id' => 20],
            ['description' => 'De novo CRLV.', 'correct_answer' => 0, 'categories_id' => 2, 'questions_id' => 20],
            ['description' => 'De novo CRV.', 'correct_answer' => 1, 'categories_id' => 2, 'questions_id' => 20],
            ['description' => 'De novos CRLV e CRV.', 'correct_answer' => 0, 'categories_id' => 2, 'questions_id' => 20],

            // Infrações e penalidades.
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 21],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 21],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 21],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 21],

            ['description' => '', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 22],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 22],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 22],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 22],

            ['description' => '', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 23],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 23],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 23],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 23],

            ['description' => '', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 24],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 24],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 24],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 24],

            ['description' => '', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 25],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 25],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 25],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 25],

            ['description' => '', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 26],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 26],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 26],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 26],

            ['description' => '', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 27],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 27],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 27],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 27],

            ['description' => '', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 28],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 28],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 28],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 28],

            ['description' => '', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 29],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 29],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 29],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 29],

            ['description' => '', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 30],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 30],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 30],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 30],

            // Sinalização de trânsito
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 31],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 31],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 31],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 31],

            ['description' => '', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 32],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 32],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 32],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 32],

            ['description' => '', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 33],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 33],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 33],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 33],

            ['description' => '', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 34],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 34],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 34],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 34],

            ['description' => '', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 35],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 35],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 35],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 35],

            ['description' => '', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 36],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 36],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 36],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 36],

            ['description' => '', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 37],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 37],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 37],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 37],

            ['description' => '', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 38],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 38],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 38],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 38],

            ['description' => '', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 39],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 39],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 39],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 39],

            ['description' => '', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 40],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 40],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 40],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 40],

            // Normas de circulação.
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 41],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 41],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 41],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 41],

            ['description' => '', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 42],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 42],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 42],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 42],

            ['description' => '', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 43],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 43],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 43],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 43],

            ['description' => '', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 44],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 44],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 44],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 44],

            ['description' => '', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 45],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 45],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 45],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 45],

            ['description' => '', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 46],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 46],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 46],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 46],

            ['description' => '', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 47],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 47],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 47],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 47],

            ['description' => '', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 48],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 48],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 48],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 48],

            ['description' => '', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 49],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 49],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 49],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 49],

            ['description' => '', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 50],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 50],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 50],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 50],

            // Primeiros socorros.
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 51],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 51],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 51],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 51],

            ['description' => '', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 52],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 52],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 52],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 52],

            ['description' => '', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 53],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 53],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 53],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 53],

            ['description' => '', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 54],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 54],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 54],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 54],

            ['description' => '', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 55],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 55],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 55],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 55],

            ['description' => '', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 56],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 56],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 56],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 56],

            ['description' => '', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 57],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 57],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 57],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 57],

            ['description' => '', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 58],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 58],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 58],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 58],

            ['description' => '', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 59],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 59],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 59],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 59],

            ['description' => '', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 60],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 60],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 60],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 60],

            // Meio ambiente e cidadania.
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 61],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 61],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 61],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 61],

            ['description' => '', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 62],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 62],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 62],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 62],

            ['description' => '', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 63],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 63],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 63],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 63],

            ['description' => '', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 64],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 64],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 64],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 64],

            ['description' => '', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 65],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 65],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 65],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 65],

            ['description' => '', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 66],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 66],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 66],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 66],

            ['description' => '', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 67],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 67],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 67],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 67],

            ['description' => '', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 68],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 68],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 68],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 68],

            ['description' => '', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 69],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 69],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 69],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 69],

            ['description' => '', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 70],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 70],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 70],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 70],

            // Mecânica básica de veículos
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 8, 'questions_id' => 71],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 8, 'questions_id' => 71],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 8, 'questions_id' => 71],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 8, 'questions_id' => 71],

            ['description' => '', 'correct_answer' => 0, 'categories_id' => 8, 'questions_id' => 72],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 8, 'questions_id' => 72],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 8, 'questions_id' => 72],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 8, 'questions_id' => 72],

            ['description' => '', 'correct_answer' => 0, 'categories_id' => 8, 'questions_id' => 73],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 8, 'questions_id' => 73],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 8, 'questions_id' => 73],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 8, 'questions_id' => 73],

            ['description' => '', 'correct_answer' => 0, 'categories_id' => 8, 'questions_id' => 74],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 8, 'questions_id' => 74],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 8, 'questions_id' => 74],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 8, 'questions_id' => 74],

            ['description' => '', 'correct_answer' => 0, 'categories_id' => 8, 'questions_id' => 75],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 8, 'questions_id' => 75],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 8, 'questions_id' => 75],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 8, 'questions_id' => 75],

            ['description' => '', 'correct_answer' => 0, 'categories_id' => 8, 'questions_id' => 76],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 8, 'questions_id' => 76],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 8, 'questions_id' => 76],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 8, 'questions_id' => 76],

            ['description' => '', 'correct_answer' => 0, 'categories_id' => 8, 'questions_id' => 77],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 8, 'questions_id' => 77],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 8, 'questions_id' => 77],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 8, 'questions_id' => 77],

            ['description' => '', 'correct_answer' => 0, 'categories_id' => 8, 'questions_id' => 78],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 8, 'questions_id' => 78],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 8, 'questions_id' => 78],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 8, 'questions_id' => 78],

            ['description' => '', 'correct_answer' => 0, 'categories_id' => 8, 'questions_id' => 79],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 8, 'questions_id' => 79],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 8, 'questions_id' => 79],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 8, 'questions_id' => 79],

            ['description' => '', 'correct_answer' => 0, 'categories_id' => 8, 'questions_id' => 80],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 8, 'questions_id' => 80],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 8, 'questions_id' => 80],
            ['description' => '', 'correct_answer' => 0, 'categories_id' => 8, 'questions_id' => 80]
        ];
        Answer::insert($date_answers);
    }
}
