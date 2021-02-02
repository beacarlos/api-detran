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
            ['questions_id' => '21', 'description' => 'Após uma forte chuva você está trafegando por uma avenida e passa sobre uma poça d’água molhando alguns pedestres na calçada. Essa atitude é considerada pelas autoridades como:', 'categories_id' => 3], 
            ['questions_id' => '22', 'description' => 'Estacionar na pista de rolamento de estradas, rodovias, vias de trânsito rápido e vias dotadas de acostamento, é uma infração gravíssima. Qual a medida administrativa adotada para esta infração?', 'categories_id' => 3], 
            ['questions_id' => '23', 'description' => 'A penalidade de advertência por escrito poderá ser aplicada pela autoridade, quando entender esta providência como mais educativa, em infrações de natureza:', 'categories_id' => 3], 
            ['questions_id' => '24', 'description' => 'Usar qualquer veículo para, deliberadamente, interromper, restringir ou perturbar a circulação na via sem autorização do órgão ou entidade de trânsito com circunscrição sobre ela, é infração _________, com as penalidades de multa, no valor de R$ ________, e ___________ e medida administrativa de ________. Assinale a alternativa que completa a afirmativa:', 'categories_id' => 3], 
            ['questions_id' => '25', 'description' => 'Conduzir bicicleta em passeios onde não seja permitida a circulação desta, constitui infração de natureza:', 'categories_id' => 3], 
            ['questions_id' => '26', 'description' => 'Estacionar o veículo em desacordo com a regulamentação estabelecida pela autoridade de trânsito, acarretará:', 'categories_id' => 3], 
            ['questions_id' => '27', 'description' => 'Roberto foi surpreendido em 01/08/07 promovendo na via pública competição esportiva, sem permissão da autoridade de trânsito com circunscrição sobre a via. Se ele cometer a mesma infração em 01/07/08 lhe serão aplicadas as seguintes penalidades:', 'categories_id' => 3], 
            ['questions_id' => '28', 'description' => 'Assinale a infração gravíssima:', 'categories_id' => 3], 
            ['questions_id' => '29', 'description' => 'É infração gravíssima para o condutor de motocicleta, motoneta ou ciclomotor:', 'categories_id' => 3], 
            ['questions_id' => '30', 'description' => 'O condutor habilitado na categoria “B” que dirigir uma motocicleta será punido com:', 'categories_id' => 3], 

            // Sinalização de trânsito
            ['questions_id' => '31', 'description' => 'A sinalização de trânsito vertical utiliza qual meio para estabelecer o processo de comunicação?', 'categories_id' => 4], 
            ['questions_id' => '32', 'description' => 'Na sinalização horizontal a cor utilizada para a regulação de fluxos de sentidos opostos é:', 'categories_id' => 4], 
            ['questions_id' => '33', 'description' => 'A finalidade da utilização, na via pública, de cones de cores branca refletiva e laranja é:', 'categories_id' => 4], 
            ['questions_id' => '34', 'description' => 'Em uma via, a inscrição no pavimento “Cruz de Santo André” indica a existência adiante de um cruzamento com:', 'categories_id' => 4], 
            ['questions_id' => '35', 'description' => 'Com exceção das placas “Cruz de Santo André”, “Sentido único” e “Sentido duplo”, as demais placas que têm formato quadrado, fundo na cor amarela e símbolo preto, são placas de:', 'categories_id' => 4], 
            ['questions_id' => '36', 'description' => 'Dispositivo de reflexão e refração da luz utilizado na sinalização de vias e veículos denomina-se:', 'categories_id' => 4], 
            ['questions_id' => '37', 'description' => 'As indicações que prevalecem sobre as demais são:', 'categories_id' => 4], 
            ['questions_id' => '38', 'description' => 'As placas indicativas de serviços auxiliares tornam-se mais necessárias nas vias:', 'categories_id' => 4], 
            ['questions_id' => '39', 'description' => 'As placas que indicam o sentido de circulação da via, na qual o condutor pretende entrar ou cruzar, são placas:', 'categories_id' => 4], 
            ['questions_id' => '40', 'description' => 'Mensagens adicionais podem ser incorporadas às placas de sinalização de regulamentação e de advertência. Estas mensagens são denominadas:', 'categories_id' => 4], 

            // Normas de circulação
            ['questions_id' => '41', 'description' => 'A circulação de bicicletas nos passeios somente será permitida, desde que devidamente sinalizado, autorizada pelo:', 'categories_id' => 5], 
            ['questions_id' => '42', 'description' => 'Assinale a alternativa que corresponda à questão: Os veículos de tração animal serão conduzidos pela _______ da pista, junto à guia da calçada (meio-fio) ou _______, sempre que não houver faixa especial a eles destinada.', 'categories_id' => 5], 
            ['questions_id' => '43', 'description' => 'Nas vias urbanas, a operação de retorno deverá ser feita:', 'categories_id' => 5], 
            ['questions_id' => '44', 'description' => 'O condutor manterá acesas pelo menos as luzes de posição do veículo quando:', 'categories_id' => 5], 
            ['questions_id' => '45', 'description' => 'Ao se aproximar de qualquer tipo de cruzamento, sinalizado ou não, o condutor deve:', 'categories_id' => 5], 
            ['questions_id' => '46', 'description' => 'É conduta inadequada do condutor:', 'categories_id' => 5], 
            ['questions_id' => '47', 'description' => 'Dirigindo um veículo na via pública, antes de entrar em outra via, todo condutor deverá:', 'categories_id' => 5], 
            ['questions_id' => '48', 'description' => 'Realizando uma mudança de faixa, você como condutor, dirá que a preferência é:', 'categories_id' => 5], 
            ['questions_id' => '49', 'description' => 'Em relação à circulação de veículos automotores nas vias terrestres, podemos afirmar que:', 'categories_id' => 5], 
            ['questions_id' => '50', 'description' => 'Dar passagem pela esquerda, quando solicitado, é:', 'categories_id' => 5], 

            // Primeiros socorros
            ['questions_id' => '51', 'description' => 'O pulso representa a regularidade da contração do coração. Assinale a opção incorreta: ', 'categories_id' => 6], 
            ['questions_id' => '52', 'description' => 'Indique abaixo uma das técnicas que podem ser adotadas para conter uma hemorragia externa quando não for possível a presença do resgate:', 'categories_id' => 6], 
            ['questions_id' => '53', 'description' => 'Orientar quanto ao local, a gravidade do caso, o número de veículos envolvidos e, se possível, o estado das vítimas é atitude que corresponde:', 'categories_id' => 6], 
            ['questions_id' => '54', 'description' => 'Ao transportar uma vítima é incorreto:', 'categories_id' => 6], 
            ['questions_id' => '55', 'description' => 'O sinal vital que não varia com a idade é:', 'categories_id' => 6], 
            ['questions_id' => '56', 'description' => 'O trabalho de remoção de um acidentado deve ser feito por pessoal especializado, com equipamentos apropriados. Mas se numa emergência, esse transporte precisar ser feito por você, qual procedimento pode ser considerado inadequado?', 'categories_id' => 6], 
            ['questions_id' => '57', 'description' => 'Nas hemorragias externas devemos:', 'categories_id' => 6], 
            ['questions_id' => '58', 'description' => 'Indica incapacidade de movimentar pernas e braços após um acidente:', 'categories_id' => 6], 
            ['questions_id' => '59', 'description' => 'Ao observar uma pessoa tendo convulsões deve-se:', 'categories_id' => 6], 
            ['questions_id' => '60', 'description' => 'A hemorragia nasal é muito frequente em acidentes de trânsito e pode indicar:', 'categories_id' => 6], 

            // Meio ambiente e cidadania
            ['questions_id' => '61', 'description' => 'Para melhorar o convívio e a qualidade de vida, existem alguns princípios que devem ser a base das nossas relações no trânsito. Indique abaixo qual princípio pode melhorar a nossa convivência no trânsito.', 'categories_id' => 7], 
            ['questions_id' => '62', 'description' => 'O excesso de anúncios afixados em pontos estratégicos é uma poluição:', 'categories_id' => 7], 
            ['questions_id' => '63', 'description' => 'Os gases emitidos pelos veículos são perigosos para a saúde do homem porque podem:', 'categories_id' => 7], 
            ['questions_id' => '64', 'description' => 'A educação para o trânsito é um direito de todos e tem por finalidade primordial:', 'categories_id' => 7], 
            ['questions_id' => '65', 'description' => 'A segurança no trânsito é um direito:', 'categories_id' => 7], 
            ['questions_id' => '66', 'description' => 'É o gás incolor, sem cheiro ou gosto, resultante da queima incompleta de combustíveis:', 'categories_id' => 7], 
            ['questions_id' => '67', 'description' => 'Alguns cuidados que devemos ter com os veículos para reduzir a poluição do meio ambiente:', 'categories_id' => 7], 
            ['questions_id' => '68', 'description' => 'A chuva ácida provoca:', 'categories_id' => 7], 
            ['questions_id' => '69', 'description' => 'Para ajudar a manter as vias de trânsito limpas e em condições de uso devemos:', 'categories_id' => 7], 
            ['questions_id' => '70', 'description' => 'O meio ambiente engloba em seus estudos gerais:', 'categories_id' => 7], 

            // Mecânica básica de veículos
            ['questions_id' => '71', 'description' => 'O tempo do motor no qual a mistura se inflama, chama-se:', 'categories_id' => 8], 
            ['questions_id' => '72', 'description' => 'Classificação SAE e API estão relacionadas a qual fluido utilizado no veículo?', 'categories_id' => 8], 
            ['questions_id' => '73', 'description' => 'A válvula termostática fica localizada entre o radiador e o motor, ajudando a controlar o calor produzido pela queima da mistura ar-combustível. Esta peça é componente do sistema de:', 'categories_id' => 8], 
            ['questions_id' => '74', 'description' => 'A baixa calibragem dos pneus:', 'categories_id' => 8], 
            ['questions_id' => '75', 'description' => 'Atualmente são adotados no Brasil três tipos de cinto de segurança. Qual deles oferece maior proteção?', 'categories_id' => 8], 
            ['questions_id' => '76', 'description' => 'As motocicletas, em sua maioria, são equipadas com espelhos convexos. Se você olhar um veículo através de um espelho convexo, a posição correta deste veículo é:', 'categories_id' => 8], 
            ['questions_id' => '77', 'description' => 'Mesmo sabendo ser uma infração, muitas pessoas cortam as molas do veículo para deixá-lo mais baixo. Esse procedimento prejudica diretamente:', 'categories_id' => 8], 
            ['questions_id' => '78', 'description' => 'Fazem parte da embreagem:', 'categories_id' => 8], 
            ['questions_id' => '79', 'description' => 'O sistema que tem como finalidade diminuir a velocidade ou parar o veículo chama-se:', 'categories_id' => 8], 
            ['questions_id' => '80', 'description' => 'O freio de estacionamento tem atuação:', 'categories_id' => 8], 

        ];
        Question::insert($date_questions);
    }
}
