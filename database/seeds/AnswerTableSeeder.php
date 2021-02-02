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
            ['description' => 'Uma brincadeira de mau gosto.', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 21],
            ['description' => 'Um grande desrespeito pelos pedestres.', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 21],
            ['description' => 'Uma infração média com penalidade de multa.', 'correct_answer' => 1, 'categories_id' => 3, 'questions_id' => 21],
            ['description' => 'Uma infração leve sujeito somente a uma advertência verbal.', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 21],

            ['description' => 'Retenção do veículo.', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 22],
            ['description' => 'Apreensão do veículo.', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 22],
            ['description' => 'Recolhimento do documento de habilitação.', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 22],
            ['description' => 'Remoção do veículo.', 'correct_answer' => 1, 'categories_id' => 3, 'questions_id' => 22],

            ['description' => 'Grave ou gravíssima', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 23],
            ['description' => 'Leve ou média.', 'correct_answer' => 1, 'categories_id' => 3, 'questions_id' => 23],
            ['description' => 'Leve ou gravíssima.', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 23],
            ['description' => 'Em nenhuma hipótese.', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 23],

            ['description' => 'Gravíssima; R$ 5.869,40; suspensão do direito de dirigir; remoção do veículo.', 'correct_answer' => 1, 'categories_id' => 3, 'questions_id' => 24],
            ['description' => 'Grave; R$ 195,23; frequência obrigatória em curso de reciclagem; retenção do veículo.', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 24],
            ['description' => 'Gravíssima; R$ 293,47; cassação da CNH; remoção do veículo.', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 24],
            ['description' => 'Gravíssima; R$ 880,41; advertência por escrito; recolhimento do documento de habilitação.', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 24],

            ['description' => 'Média.', 'correct_answer' => 1, 'categories_id' => 3, 'questions_id' => 25],
            ['description' => 'Grave.', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 25],
            ['description' => 'Leve.', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 25],
            ['description' => 'Gravíssima.', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 25],

            ['description' => 'Multa e retenção da CNH.', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 26],
            ['description' => 'Retenção do veículo e da Carteira de Habilitação.', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 26],
            ['description' => 'Multa e remoção do veículo.', 'correct_answer' => 1, 'categories_id' => 3, 'questions_id' => 26],
            ['description' => 'Multa e retenção do veículo.', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 26],

            ['description' => 'Multa, suspensão do direito de dirigir e apreensão do veículo.', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 27],
            ['description' => 'Multa, suspensão do direito de dirigir e retenção do veículo.', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 27],
            ['description' => 'Multa (10x), em dobro.', 'correct_answer' => 1, 'categories_id' => 3, 'questions_id' => 27],
            ['description' => 'Multa, cassação do documento de habilitação e retenção do veículo.', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 27],

            ['description' => 'Deixar de dar preferência de passagem a pedestre e a veículo não motorizado que não haja concluído a travessia mesmo que ocorra sinal verde para o veículo.', 'correct_answer' => 1, 'categories_id' => 3, 'questions_id' => 28],
            ['description' => 'Deixar de dar preferência de passagem nas interseções com sinalização de regulamentação de "Dê a preferência".', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 28],
            ['description' => 'Deixar de dar preferência de passagem em interseção não sinaliza a veículo que estiver circulando por rodovia ou rotatória.', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 28],
            ['description' => 'Deixar de dar preferência de passagem em interseção não sinalizada a veículo que vier da direita.', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 28],

            ['description' => 'Conduzir sem segurar o guidom com ambas as mãos, salvo eventualmente para indicação de manobras.', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 29],
            ['description' => 'Transportar criança menor de sete anos ou que não tenha, nas circunstâncias, condições de cuidar de sua própria segurança.', 'correct_answer' => 1, 'categories_id' => 3, 'questions_id' => 29],
            ['description' => 'Conduzir transportando carga incompatível com suas especificações.', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 29],
            ['description' => 'Conduzir rebocando outro veículo.', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 29],

            ['description' => 'Multa e advertência pelo Diretor Geral do DETRAN.', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 30],
            ['description' => 'Multa e cassação da Carteira Nacional de Habilitação.', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 30],
            ['description' => 'Multa e prisão.', 'correct_answer' => 0, 'categories_id' => 3, 'questions_id' => 30],
            ['description' => 'Multa gravíssima x2 e retenção do veículo até a apresentação de condutor habilitado.', 'correct_answer' => 1, 'categories_id' => 3, 'questions_id' => 30],

            // Sinalização de trânsito
            ['description' => 'Marcas', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 31],
            ['description' => 'Gestos', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 31],
            ['description' => 'Placas', 'correct_answer' => 1, 'categories_id' => 4, 'questions_id' => 31],
            ['description' => 'Sons', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 31],

            ['description' => 'Branca', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 32],
            ['description' => 'Azul', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 32],
            ['description' => 'Amarela', 'correct_answer' => 1, 'categories_id' => 4, 'questions_id' => 32],
            ['description' => 'Preta', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 32],

            ['description' => 'Alertar os condutores para situações de emergência ou perigo.', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 33],
            ['description' => 'Bloquear e/ou canalizar o trânsito.', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 33],
            ['description' => 'Proteger pedestres, trabalhadores de obras e equipamentos.', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 33],
            ['description' => 'Todas as afirmativas estão corretas.', 'correct_answer' => 1, 'categories_id' => 4, 'questions_id' => 33],

            ['description' => 'Via preferencial.', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 34],
            ['description' => 'Ciclovia', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 34],
            ['description' => 'Via de pedestre.', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 34],
            ['description' => 'Ferrovia', 'correct_answer' => 1, 'categories_id' => 4, 'questions_id' => 34],

            ['description' => 'Advertência', 'correct_answer' => 1, 'categories_id' => 4, 'questions_id' => 35],
            ['description' => 'Indicação', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 35],
            ['description' => 'Regulamentação', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 35],
            ['description' => 'Sentido obrigatório', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 35],

            ['description' => 'Olho de Gato', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 36],
            ['description' => 'Catadióptrico', 'correct_answer' => 1, 'categories_id' => 4, 'questions_id' => 36],
            ['description' => 'Indicadores luminosos.', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 36],
            ['description' => 'Tachão de asfalto.', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 36],

            ['description' => 'As pinturas viárias.', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 37],
            ['description' => 'Os sinais luminosos.', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 37],
            ['description' => 'As placas de trânsito.', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 37],
            ['description' => 'As ordens dos agentes de trânsito.', 'correct_answer' => 1, 'categories_id' => 4, 'questions_id' => 37],

            ['description' => 'Rurais, onde os serviços forem escassos.', 'correct_answer' => 1, 'categories_id' => 4, 'questions_id' => 38],
            ['description' => 'Urbanas, devido ao excesso destes serviços.', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 38],
            ['description' => 'Rurais e urbanas, obrigatoriamente, sem distinção.', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 38],
            ['description' => 'De trânsito rápido, onde não houver acessos especiais.', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 38],

            ['description' => 'Educativas.', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 39],
            ['description' => 'De serviços auxiliares.', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 39],
            ['description' => 'De regulamentação.', 'correct_answer' => 1, 'categories_id' => 4, 'questions_id' => 39],
            ['description' => 'De advertência.', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 39],

            ['description' => 'Informações complementares.', 'correct_answer' => 1, 'categories_id' => 4, 'questions_id' => 40],
            ['description' => 'Informações especializadas.', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 40],
            ['description' => 'Mensagens avulsas.', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 40],
            ['description' => 'Comunicados extras.', 'correct_answer' => 0, 'categories_id' => 4, 'questions_id' => 40],

            // Normas de circulação.
            ['description' => 'Órgão máximo normativo de trânsito.', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 41],
            ['description' => 'Conselho Estadual de Trânsito.', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 41],
            ['description' => 'Órgão ou entidade com circunscrição sobre a via.', 'correct_answer' => 1, 'categories_id' => 5, 'questions_id' => 41],
            ['description' => 'Órgão máximo executivo de trânsito da união.', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 41],

            ['description' => 'Esquerda; acostamento.', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 42],
            ['description' => 'Direita; esquerda.', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 42],
            ['description' => 'Direita; acostamento.', 'correct_answer' => 1, 'categories_id' => 5, 'questions_id' => 42],
            ['description' => 'Direita; meio-fio.', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 42],

            ['description' => 'Nos locais determinados ou que ofereçam condições de segurança e fluidez.', 'correct_answer' => 1, 'categories_id' => 5, 'questions_id' => 43],
            ['description' => 'Nas passagens de nível.', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 43],
            ['description' => 'Nas pontes.', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 43],
            ['description' => 'Utilizando-se do acostamento.', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 43],

            ['description' => 'A regulamentação da via assim o determinar.', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 44],
            ['description' => 'À noite, em vias não iluminadas.', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 44],
            ['description' => 'Sob chuva forte, neblina ou cerração.', 'correct_answer' => 1, 'categories_id' => 5, 'questions_id' => 44],
            ['description' => 'Trafegar, de dia, nas rodovias.', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 44],

            ['description' => 'Ter domínio do veículo e parar sempre.', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 45],
            ['description' => 'Ser prudente e reduzir a velocidade.', 'correct_answer' => 1, 'categories_id' => 5, 'questions_id' => 45],
            ['description' => 'Ter segurança e acelerar rapidamente.', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 45],
            ['description' => 'Parar obrigatoriamente.', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 45],

            ['description' => 'Atirar do veículo ou abandonar objetos ou substâncias nas vias.', 'correct_answer' => 1, 'categories_id' => 5, 'questions_id' => 46],
            ['description' => 'Dirigir com atenção difusa.', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 46],
            ['description' => 'Prestar socorro à vítima de acidentes de trânsito.', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 46],
            ['description' => 'Respeitar o pedestre.', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 46],

            ['description' => 'Dar um toque breve na buzina e converter.', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 47],
            ['description' => 'Diminuir a velocidade, buzinar e converter.', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 47],
            ['description' => 'Certificar-se de que pode realizar a manobra sem perigo para os demais usuários da via.', 'correct_answer' => 1, 'categories_id' => 5, 'questions_id' => 47],
            ['description' => 'Somente ligar a seta e converter.', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 47],

            ['description' => 'Dos veículos que estão circulando na faixa em que você vai entrar.', 'correct_answer' => 1, 'categories_id' => 5, 'questions_id' => 48],
            ['description' => 'Do seu veículo, porque você está fazendo a mudança de faixa e sinalizou comunicando a sua intenção.', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 48],
            ['description' => 'Dos veículos que estiverem transportando passageiros.', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 48],
            ['description' => 'Dos veículos que vierem da direita.', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 48],

            ['description' => 'Os veículos que se deslocam sobre trilhos terão preferência de passagem sobre os demais, respeitadas as normas de circulação.', 'correct_answer' => 1, 'categories_id' => 5, 'questions_id' => 49],
            ['description' => 'A prioridade de passagem na via e no cruzamento não deverá ser reduzida, pois acarreta perigo aos veículos que transitam à retaguarda.', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 49],
            ['description' => 'A preferência de passagem será, sempre, do veículo que vier à direita do outro.', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 49],
            ['description' => 'O condutor poderá livremente frear de modo brusco seu veículo nas vias urbanas.', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 49],

            ['description' => 'Apenas uma questão de cortesia.', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 50],
            ['description' => 'Dever do condutor.', 'correct_answer' => 1, 'categories_id' => 5, 'questions_id' => 50],
            ['description' => 'Apenas uma regra para prevenir acidentes.', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 50],
            ['description' => 'Proibido a todo motorista.', 'correct_answer' => 0, 'categories_id' => 5, 'questions_id' => 50],

            // Primeiros socorros.
            ['description' => 'Sua frequência varia com a idade.', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 51],
            ['description' => 'Um ritmo irregular pode ser patológico.', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 51],
            ['description' => 'Com um pulso fraco pode estar ocorrendo uma hemorragia.', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 51],
            ['description' => 'Ao verificar um pulso usamos os dedos polegar e indicador sobre a artéria.', 'correct_answer' => 1, 'categories_id' => 6, 'questions_id' => 51],

            ['description' => 'Fazer compressão no ferimento, utilizando gaze ou pano limpo.', 'correct_answer' => 1, 'categories_id' => 6, 'questions_id' => 52],
            ['description' => 'Aplicar torniquete.', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 52],
            ['description' => 'Fazer compressão utilizando as mãos diretamente no ferimento.', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 52],
            ['description' => 'Movimentar a vítima imediatamente.', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 52],

            ['description' => 'Às ações realizadas por agentes qualificados.', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 53],
            ['description' => 'Ao acionamento de recursos.', 'correct_answer' => 1, 'categories_id' => 6, 'questions_id' => 53],
            ['description' => 'À primeira opção do socorrista.', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 53],
            ['description' => 'À atitude dos auxiliares.', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 53],

            ['description' => 'Manter a vítima em jejum.', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 54],
            ['description' => 'Transportar a vítima imobilizada.', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 54],
            ['description' => 'Manter, a qualquer custo, a vítima acordada.', 'correct_answer' => 1, 'categories_id' => 6, 'questions_id' => 54],
            ['description' => 'Manter as vias aéreas livres, desobstruídas.', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 54],

            ['description' => 'Temperatura', 'correct_answer' => 1, 'categories_id' => 6, 'questions_id' => 55],
            ['description' => 'Pulso', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 55],
            ['description' => 'Respiração', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 55],
            ['description' => 'Pressão arterial', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 55],

            ['description' => 'Verificar se há deformações na coluna vertebral.', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 56],
            ['description' => 'Improvisar uma marca para transporte do acidentado.', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 56],
            ['description' => 'Remover a vítima do local de maneira mais rápida possível, pois esta necessita de atendimento urgente.', 'correct_answer' => 1, 'categories_id' => 6, 'questions_id' => 56],
            ['description' => 'Evitar freadas bruscas e excesso de velocidade que podem agravar o estado da vítima.', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 56],

            ['description' => 'Fazer torniquete para conter o sangramento.', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 57],
            ['description' => 'Dar líquido para a vítima ingerir, caso ela peça.', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 57],
            ['description' => 'Evitar contato direto com o sangue da vítima.', 'correct_answer' => 1, 'categories_id' => 6, 'questions_id' => 57],
            ['description' => 'Movimentar a vítima.', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 57],

            ['description' => 'Traumatismo craniano', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 58],
            ['description' => 'Politraumatismo', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 58],
            ['description' => 'Lesão na coluna', 'correct_answer' => 1, 'categories_id' => 6, 'questions_id' => 58],
            ['description' => 'Lesão na cabeça', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 58],

            ['description' => 'Não intervir, porque isto passa espontaneamente.', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 59],
            ['description' => 'Abrir a boca da vítima, colocar um pano entre os dentes para evitar que ela morda a língua.', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 59],
            ['description' => 'Pedir ajuda de outras pessoas, tentar imobilizá-la, segurando-a firmemente, contra o chão.', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 59],
            ['description' => 'Proteger a cabeça da pessoa contra traumas e virá-la de lado em caso de vômitos.', 'correct_answer' => 1, 'categories_id' => 6, 'questions_id' => 59],

            ['description' => 'Parada respiratória.', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 60],
            ['description' => 'Traumatismo craniano.', 'correct_answer' => 1, 'categories_id' => 6, 'questions_id' => 60],
            ['description' => 'Estado de choque.', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 60],
            ['description' => 'Lesões na medula.', 'correct_answer' => 0, 'categories_id' => 6, 'questions_id' => 60],

            // Meio ambiente e cidadania.
            ['description' => 'Corresponsabilidade pela vida social: valorizar comportamentos necessários à segurança no trânsito e à efetivação do direito de mobilidade a todos os cidadãos.', 'correct_answer' => 1, 'categories_id' => 7, 'questions_id' => 61],
            ['description' => 'Dignidade da pessoa humana: Princípio que não valoriza os direitos humanos e as atitudes fundamentais.', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 61],
            ['description' => 'Igualdade de direitos: visa garantir a igualdade e não se preocupa com a solidariedade.', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 61],
            ['description' => 'Participação: mobilização das pessoas onde os problemas de trânsito não são de fundamental importância.', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 61],

            ['description' => 'Dispersiva', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 62],
            ['description' => 'Visual', 'correct_answer' => 1, 'categories_id' => 7, 'questions_id' => 62],
            ['description' => 'Provocativa', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 62],
            ['description' => 'Deficiente', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 62],

            ['description' => 'Causar irritação nos olhos e garganta.', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 63],
            ['description' => 'Agravar moléstias respiratórias como asma e bronquite.', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 63],
            ['description' => 'Provocar dores de cabeça e enjoo.', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 63],
            ['description' => 'Todas as alternativas estão corretas.', 'correct_answer' => 1, 'categories_id' => 7, 'questions_id' => 63],

            ['description' => 'A formação dos infratores contumazes.', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 64],
            ['description' => 'Reciclar os trabalhadores da área de trânsito.', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 64],
            ['description' => 'Educar o comportamento dos condutores e pedestres para que haja respeito e cidadania no trânsito.', 'correct_answer' => 1, 'categories_id' => 7, 'questions_id' => 64],
            ['description' => 'Treinar candidatos à obtenção da CNH.', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 64],

            ['description' => 'Dos ciclistas apenas.', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 65],
            ['description' => 'Dos motoristas de ônibus apenas.', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 65],
            ['description' => 'Dos motociclistas apenas.', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 65],
            ['description' => 'De todo cidadão.', 'correct_answer' => 1, 'categories_id' => 7, 'questions_id' => 65],

            ['description' => 'O monóxido de carbono.', 'correct_answer' => 1, 'categories_id' => 7, 'questions_id' => 66],
            ['description' => 'Os hidrocarbonetos.', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 66],
            ['description' => 'Os óxidos de nitrogênio', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 66],
            ['description' => 'O gás de ozônio.', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 66],

            ['description' => 'Regular o carburador ou sistema de injeção eletrônica.', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 67],
            ['description' => 'Manter em bom estado de funcionamento bobina, ignição eletrônica, distribuidor e vela.', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 67],
            ['description' => 'Verificar e revisar qualquer ruído estranho no escapamento.', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 67],
            ['description' => 'Todas as alternativas estão corretas.', 'correct_answer' => 1, 'categories_id' => 7, 'questions_id' => 67],

            ['description' => 'Crescimento das florestas.', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 68],
            ['description' => 'Derretimento das calotas polares.', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 68],
            ['description' => 'Desertificação.', 'correct_answer' => 1, 'categories_id' => 7, 'questions_id' => 68],
            ['description' => 'Conservação das estruturas de metálicas.', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 68],

            ['description' => 'Aumentar o número de lixeiras públicas.', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 69],
            ['description' => 'Distribuir saco de lixo para todos os motoristas.', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 69],
            ['description' => 'Organizar um mutirão para consertar a via.', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 69],
            ['description' => 'Não jogar lixo ou qualquer objeto pela janela do veículo.', 'correct_answer' => 1, 'categories_id' => 7, 'questions_id' => 69],

            ['description' => 'O homem, a natureza e os catalisadores.', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 70],
            ['description' => 'O homem, a natureza e os poluentes.', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 70],
            ['description' => 'O homem, as perspectivas teóricas e as mutações da fauna.', 'correct_answer' => 0, 'categories_id' => 7, 'questions_id' => 70],
            ['description' => 'O homem, a natureza e seus elementos.', 'correct_answer' => 1, 'categories_id' => 7, 'questions_id' => 70],

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
