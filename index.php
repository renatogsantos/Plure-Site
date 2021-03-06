<?php
//Template Name: Home
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <?php wp_head(); ?>
  <!-- Required meta tags -->

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Plure - Registros e Assessoria Empresarial" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="<?php  echo get_theme_root_uri(); ?>/Plure-Site/style.css" />
  <link rel="shortcut icon" href="<?php  echo get_theme_root_uri(); ?>/Plure-Site/assets/favicon.png"
    type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://unpkg.com/phosphor-icons"></script>
  <title>Plure</title>
</head>

<body>
  <div class="mouse-icon">
    <div class="mouse-icon__wheel"></div>
  </div>
  <header>
    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container">
        <a class="navbar-brand" href="<?php echo get_site_url(); ?>/"><img src="<?php  echo get_theme_root_uri(); ?>/Plure-Site/assets/plureLogo.svg" height="60px" alt="Logo da PLURE"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <i class="ph-list-bold"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active d-flex align-items-center" aria-current="page" href="<?php echo get_site_url(); ?>/#home"><i class="ph-house me-2"></i> Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active d-flex align-items-center" href="<?php echo get_site_url(); ?>/#about"><i class="ph-users-three me-2"></i> Sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active d-flex align-items-center" href="<?php echo get_site_url(); ?>/#blog"><i class="ph-newspaper me-2"></i> Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active d-flex align-items-center" href="<?php echo get_site_url(); ?>/#staticBackdrop" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="ph-question me-2"></i>FAQ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active d-flex align-items-center" href="<?php echo get_site_url(); ?>/#contact"><i class="ph-paper-plane-tilt me-2"></i>Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <section id="home">
    <!--typed by youself-->
    <div>
      <div id="typed-strings">
        <p>Proteja sua criatividade!</p>
        <p>Garanta sua marca!</p>
        <p>Protegemos sua Marca!</p>
        <p>Cuide do que ?? seu!</p>
      </div>
    </div>
    <!--typed by youself-->
    <div class="container hero">
      <div>
        <h4 id="top1" class="show-titles">ASSESSORIA JUR??DICA</h4>
        <h4 id="top2" class="show-titles">IDENTIDADE VISUAL</h4>
        <h4 id="top3" class="show-titles">REGISTRO DE MARCAS</h4>
        <h4 id="top4" class="show-titles">DEP??SITO DE PATENTES</h4>

        <h1><span id="typed"></span></h1>

        <p id="bottom1" class="show-titles">Advogados especializados na ??rea de Propriedade Intelectual</p>
        <p id="bottom2" class="show-titles">Cria????o de Identidade Visual e logotipo para fortalecer sua marca</p>
        <p id="bottom3" class="show-titles">O Registro de Marca no INPI garante ao titular a exclusividade de uso em
          todo territ??rio nacional no seu ramo de atividade.</p>
        <p id="bottom4" class="show-titles">O Dep??sito de Patente garante ao titular a impossibilidade de terceiros
          explorarem seu invento, como vender, produzir, usar, etc.</p>

        <a class="buttonOne" href="<?php echo get_site_url(); ?>/#about">Saiba Mais</a>
        <a class="buttonTwo" href="<?php echo get_site_url(); ?>/#contact">Contato</a>
      </div>
    </div>
    </div>
  </section>

  <section id="about">
    <img class="wave" src="<?php  echo get_theme_root_uri(); ?>/Plure-Site/assets/wave.svg" alt="curvas">
    <div class="container-fluid py-5 hero2">
      <div class="container py-5 text-center">
        <h2 class="color-2">Sobre a Plure</h2>
        <div class="divisorDarkCenter"></div>
        <div id="cards" class="row text-start"></div>
      </div>
    </div>
    <img class="wave2" src="<?php  echo get_theme_root_uri(); ?>/Plure-Site/assets/wave2.svg" alt="curvas">
  </section>

  <section>
    <div class="container-fluid py-5 text-light">
      <div class="container py-5">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-8 col-lg-9">
            <h2>Voc?? sabe qual a import??ncia da sua marca?</h2>
            <div class="divisorLight"></div>
            <p>Sua MARCA ?? o DNA da sua Empresa, ?? o que conecta o cliente ao seu produto/servi??o.</p>
            <p>Ela transmite valores empresariais e fornece identidade ao seu neg??cio.</p>
            <p>Se sua empresa tiver uma marca s??lida, honesta e cheia de prop??sito, consequentemente ter?? forte
              influ??ncia no processo de compra do seu cliente, contribuindo de maneira significativa na tomada de
              decis??o.</p>
            <p>Uma vez atribu??da uma imagem a sua marca, se essa percep????o for positiva, o seu p??blico ter?? prefer??ncia
              pelo seu e credibilidade na sua empresa, aumentando as vendas e melhorando a imagem da empresa.</p>
          </div>
          <div class="col-12 col-sm-12 col-md-4 col-lg-3">
            <img class="shake-vertical" width="100%"
              src="<?php  echo get_theme_root_uri(); ?>/Plure-Site/assets/draw2.svg" alt="" srcset="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <img class="wave" src="<?php  echo get_theme_root_uri(); ?>/Plure-Site/assets/wave.svg" alt="curvas">
    <div class="container-fluid py-5 hero2">
      <div class="container py-5">
        <h2 class="color-2">PORQUE ?? IMPORTANTE REGISTRAR SUA MARCA?</h2>
        <div class="divisorDarkCenter"></div>
        <div class="row">
          <div class="col-12 col-sm-12 col-md-4">
            <img class="shake-vertical" width="100%"
              src="<?php  echo get_theme_root_uri(); ?>/Plure-Site/assets/girl.png"
              alt="Mulher feliz apontando para a direita">
          </div>
          <div class="col-12 col-sm-12 col-md-8">
            <ol>
              <li>Registrar a sua MARCA ?? a forma adequada proteger a identidade da sua empresa.</li>
              <li>Com o Registro voc?? ir?? adquirir um que garante o direito de e uso exclusivo de sua marca em
                territ??rio nacional.</li>
              <li>O Registro de MARCAS pode proteger o nome, os sinais distintivos das letras,n??meros, figuras e tudo o
                que faz parte da composi????o da sua marca.</li>
              <li>A MARCA concentra todos os resultados da empresa. Os investimentos em marketing, ou das vendas, a
                avalia????o dos produtos ou servi??os e a confian??a dos clientes s??o atribu??dos ao nome da empresa, ou
                seja, a sua MARCA.</li>
              <li>Para que voc?? possa ter exclusividade no mercado, evitando que terceiros utilizem a sua MARCA,
                garantindo que somente voc??, o detentor do certificado de registro da MARCA, possa usar, gozar, fruir e
                dispor da referida MARCA registrada.</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <img class="wave2" src="<?php  echo get_theme_root_uri(); ?>/Plure-Site/assets/wave2.svg" alt="curvas">
  </section>

  <section>
    <div class="container-fluid pt-5 text-light text-center">
      <div class="container pt-5">
        <h2>Vantagens ao registrar sua marca</h2>
        <div class="divisorLightCenter"></div>
        <div id="cardVantagem" class="row g-5 py-5 text-start"></div>
      </div>
    </div>
  </section>

  <section>
    <div class="container-fluid py-5">
      <div class="container py-5">
        <div class="cardBox">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 d-flex align-items-center justify-content-center">
              <img class="girl2" src="<?php  echo get_theme_root_uri(); ?>/Plure-Site/assets/girl2.png"
                alt="Mulher ruiva triste">
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-8 p-4">
              <h2 class="color-2">riscos de n??o registrar sua marca</h2>
              <div class="divisorDark"></div>
              <ul>
                <li>Perder a MARCA para um terceiro.</li>
                <li>Ser processado por uso indevido de MARCA j?? Registrada.</li>
                <li>Sofrer preju??zos financeiros e perda de credibilidade.</li>
                <li>N??o poder se defender de c??pias e uso indevido por n??o possuir o direito de uso exclusivo sobre a
                  MARCA.</li>
                <li>Ser obrigado a deixar de usar a MARCA.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <img class="wave" src="<?php  echo get_theme_root_uri(); ?>/Plure-Site/assets/wave.svg" alt="curvas">
    <div class="container-fluid py-5 hero2 text-center">
      <div class="container py-5">
        <img class="mb-5" width="300px" src="<?php  echo get_theme_root_uri(); ?>/Plure-Site/assets/draw3.svg"
          alt="Desenho de dois bonecos segurando um s??mbolo de interroga????o" srcset="">
        <br>

        <div class="py-3">
          <a class="buttonThree" data-bs-toggle="collapse" href="#collapse1" role="button" aria-expanded="false"
            aria-controls="collapse1">
            onde a marca ?? registrada?
          </a>
          <div class="collapse" id="collapse1">
            <div class="p-4">
              <p>A MARCA ?? registrada no INPI - Instituto Nacional de Propriedade Industrial.<br>
                O INPI ?? uma autarquia federal respons??vel pelo registro de marcas e patentes no Brasil.
                Somente o certificado emitido pelo INPI garante prote????o em todo territ??rio nacional.</p>
            </div>
          </div>
        </div>

        <div class="py-3">
          <a class="buttonThree" data-bs-toggle="collapse" href="#collapse2" role="button" aria-expanded="false"
            aria-controls="collapse2">
            quanto tempo leva para uma marca ser registrada?
          </a>
          <div class="collapse" id="collapse2">
            <div class="p-4">
              <p>Atualmente os pedidos de registro de MARCA est??o demorando, em m??dia, de 8 a 12 meses, para serem
                analisados pelo INPI.</p>
            </div>
          </div>
        </div>

        <div class="py-3">
          <a class="buttonThree" data-bs-toggle="collapse" href="#collapse3" role="button" aria-expanded="false"
            aria-controls="collapse3">
            qual a validade do regsitro de uma marca?
          </a>
          <div class="collapse" id="collapse3">
            <div class="p-4">
              <p>O registro de MARCA no Brasil ?? v??lido por 10 anos, a contar da concess??o, podendo ser renovado a cada
                10 anos, sucessivamente.<br>
                O Registro de MARCAS pelo INPI tem validade em todo territ??rio nacional, o que permite expans??o dos seus
                neg??cios e mais notoriedade para firmar parcerias e ter uma s??rie de vantagens tang??veis.</p>
            </div>
          </div>
        </div>

        <div class="py-3">
          <a class="buttonThree" data-bs-toggle="collapse" href="#collapse4" role="button" aria-expanded="false"
            aria-controls="collapse4">
            porque escolher a plure?
          </a>
          <div class="collapse" id="collapse4">
            <img class="py-5" src="<?php  echo get_theme_root_uri(); ?>/Plure-Site/assets/logoDark.svg" width="200px" alt="Logo Plure - Letra P roxa">
            <div class="p-4 text-center text-md-start">
              <div class="d-md-flex align-items-center">
                <i class="icon ph-check-circle mx-4"></i>
                <p>Atuamos com agilidade, seguran??a e ??tica junto ao INPI para garantir e proteger os interesses de sua
                  MARCA em todo territ??rio nacional.</p>
              </div>
              <div class="d-md-flex align-items-center">
                <i class="icon ph-check-circle mx-4"></i>
                <p>A informa????o sobre todas as etapas ?? essencial, por isso a PLURE trata o processo de registro com
                  clareza, afinal, voc?? n??o pode ser surpreendido com novas taxas e novos valores durante o processo.
                  Por isso, atuamos com:</p>
              </div>
              <div class="text-center">
                <p><i class="ph-check-bold color-3"></i> Transpar??ncia total sobre o processo.</p>
                <p><i class="ph-check-bold color-3"></i> Clareza ao informar os valores investidos em cada etapa.</p>
                <p><i class="ph-check-bold color-3"></i> Orienta????o sobre o enquadramento correto.</p>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <small class="color-3">E n??o para por aqui!</small>
      </div>
    </div>
    <div class="container-fluid py-5 hero3 text-center">
      <div class="container">
        <h2>garantia plure</h2>
        <div class="divisorLightCenter"></div>
        <p>Caso sua MARCA seja INDEFERIDA, damos entrada em outro nome escolhido por voc??, sem a cobran??a de honor??rios.
          ?? preciso pagar apenas as taxas do Governo. A garantia ?? v??lida para UMA CLASSE, havendo interesse no registro
          em mais classes, consultar valor de honor??rios.</p>
      </div>
    </div>
  </section>

  <section>
    <div class="container-fluid py-5">
      <div class="container py-5 text-light text-center">
        <h2>PRINCIPAIS ETAPAS DO REGISTRO DE MARCA</h2>
        <div class="divisorLightCenter"></div>
        <div id="cardEtapas" class="row"></div>
      </div>
    </div>
  </section>

  <section>
    <img class="wave" src="<?php  echo get_theme_root_uri(); ?>/Plure-Site/assets/wave.svg" alt="curvas">
    <div class="container-fluid py-5 hero2 text-center">
      <div class="container py-5">
        <h2>QUAIS CUIDADOS S??O NECESS??RIOS DURANTE O DEC??NIO?</h2>
        <div class="divisorDarkCenter"></div>
        <div class="row text-start">
          <div class="col-12 col-md-12 col-lg-6">
            <h3>COLID??NCIAS</h3>
            <p>Conforme j?? esclarecido, o registro da MARCA s?? ?? deferido caso n??o haja uma empresa com o nome igual ou
              semelhante, com a mesma CLASSE (Classifica????o Nice de Produtos e Servi??os) ao da solicitante do
              certificado, exatamente para que n??o haja uma confus??o do consumidor no momento de identificar as
              diferen??as entre as duas institui????es.</p>
            <p>Essa igualdade e semelhan??a entre duas MARCAS ?? chamada de COLID??NCIA. Durante todo o dec??nio a PLURE
              far?? pesquisas semanais para verificar se outras MARCAS n??o est??o em COLID??NCIA com a sua MARCA j??
              registrada.</p>
          </div>
          <div class="col-12 col-md-12 col-lg-6">
            <h3>OPOSI????O</h3>
            <p>Uma vez constatada a COLID??NCIA com outra MARCA, durante o dec??nio, a PLURE ir?? apresentar OPOSI????O
              evidenciando o seu direito de utilizar a MARCA com base no registro e na anterioridade.</p>
            <p>Por isso o acompanhamento da sua MARCA ?? importante, para garantir sua defesa em caso de registros de
              MARCAS similares com alega????es de anterioridade (alega????o de que est?? atuando no mercado a mais tempo).
            </p>
          </div>
        </div>
        <small class="color-3">*Acompanhamento durante o dec??nio ser?? efetuado mediante contrata????o e pagamento de
          anuidade.</small>
      </div>
    </div>
  </section>

  <section id="contact">
    <div class="container-fluid py-5 hero2 text-center">
      <div class="container py-5">
        <h2 class="color-2">Gostaria de saber mais? Entre em contato!</h2>
        <div class="divisorDarkCenter"></div>
        <div class="row">
          <div class="col-12 d-flex align-items-center justify-content-center">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="container-fluid py-5 hero3 text-center">
    <p class="m-0">Todo os direitos reservados</p>
  </footer>

  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <img src="<?php  echo get_theme_root_uri(); ?>/Plure-Site/assets/logoDark.svg" height="60px" alt="">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-start">
          <h2>MARCAS</h2>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq1" role="button" aria-expanded="false"
            aria-controls="faq1"><b>O que ?? marca?</b></a class="buttonThree">
          <div id="faq1" class="collapse p-4">
            <p>Marca ?? todo sinal distintivo, visualmente percept??vel, que identifica e distingue produtos e servi??os,
              bem como certifica a conformidade dos mesmos com determinadas normas ou especifica????es t??cnicas. A marca
              registrada garante ao seu propriet??rio o direito de uso exclusivo no territ??rio nacional em seu ramo de
              atividade econ??mica. Ao mesmo tempo, sua percep????o pelo consumidor pode resultar em agrega????o de valor aos
              produtos ou servi??os.</p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq2" role="button" aria-expanded="false"
            aria-controls="faq2"><b>Como registrar?</b></a>
          <div id="faq2" class="collapse p-4">
            <p>Um pedido de registro de marca ?? feito pelo preenchimento de formul??rio, que deve ser entregue junto com
              o arquivo da imagem e procura????o (se houver) ao INPI. Este processo ?? realizado por n??s e voc?? receber?? um
              comprovante de entrada de registro, assim que realizado pela nossa equipe.</p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq3" role="button" aria-expanded="false"
            aria-controls="faq3"><b>A busca pr??via ?? obrigat??ria?</b></a>
          <div id="faq3" class="collapse p-4">
            <p>N??o. Entretanto, ?? aconselh??vel ao interessado realiz??-la antes de efetuar o dep??sito, na classe
              (atividade) que pretende registrar seu produto ou servi??o, para verificar se j?? existe marca anteriormente
              depositada ou registrada. Aqui conosco, oferecemos gratuitamente este servi??o, pois entendemos a sua
              import??ncia.</p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq4" role="button" aria-expanded="false"
            aria-controls="faq4"><b>O que ?? registr??vel como marca?</b></a>
          <div id="faq4" class="collapse p-4">
            <p>A marca pode ser conferida para um produto ou para um servi??o, contanto que tenha poder de distingui-lo
              de outros semelhantes ou afins. S??o registr??veis como marca sinais visuais. Portanto, a lei brasileira n??o
              protege os sinais sonoros, gustativos e olfativos.</p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq5" role="button" aria-expanded="false"
            aria-controls="faq5"><b>Posso registrar minha marca sem contratar um especialista?</b></a>
          <div id="faq5" class="collapse p-4">
            <p>Sim. Voc?? pode fazer o pedido de marca diretamente no site INPI. Entretanto, n??s aconselhamos fortemente
              que fa??a este processo junto ?? um de nossos especialistas, uma vez que existem centenas de detalhes
              administrativos, t??cnicos e jur??dicos envolvidos em um registro e se n??o forem bem orientados e conduzidos
              no pedido, voc?? poder?? estar jogando dinheiro fora ou at?? mesmo tendo uma falsa impress??o de que sua marca
              est?? protegida contra o uso indevido de terceiros.</p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq6" role="button" aria-expanded="false"
            aria-controls="faq6"><b>Quais s??o os direitos e deveres do titular de uma marca?</b></a>
          <div id="faq6" class="collapse p-4">
            <p>A marca registrada garante a propriedade e o uso exclusivo em todo o territ??rio nacional por dez anos. O
              titular deve mant??-la em uso e prorrog??-la de dez em dez anos.</p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq7" role="button" aria-expanded="false"
            aria-controls="faq7"><b>Pessoa f??sica pode requerer o registro?</b></a>
          <div id="faq7" class="collapse p-4">
            <p>A pessoa f??sica pode requerer o registro de marca, desde que comprove a atividade exercida, atrav??s de
              documento comprobat??rio, expedido pelo ??rg??o competente. Verifica-se a habilita????o profissional diante do
              ??rg??o ou entidade respons??vel pelo registro, inscri????o ou cadastramento.</p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq8" role="button" aria-expanded="false"
            aria-controls="faq8"><b>Como acompanhar o andamento do processo?</b></a>
          <div id="faq8" class="collapse p-4">
            <p>Possu??mos uma plataforma tecnol??gica que faz a leitura detalhada de todos os processos registrados no
              INPI e todas as suas atualiza????es, garantindo a voc?? que nenhuma atualiza????o do seu processo, oposi????o ao
              seu registro ou colid??ncia de pedido de registro por terceiros possa ser feito sem que sejamos avisados e
              para que possados agir em sua defesa.</p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq9" role="button" aria-expanded="false"
            aria-controls="faq9"><b>Quando ocorre a perda do direito?</b></a>
          <div id="faq9" class="collapse p-4">
            <p>O registro da marca extingue-se pela expira????o do prazo de vig??ncia; pela ren??ncia (abandono volunt??rio
              do titular ou pelo representante legal); pela caducidade (falta de uso da marca) ou pela inobserv??ncia do
              disposto no art. 217 da Lei de Propriedade Industrial.</p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq10" role="button" aria-expanded="false"
            aria-controls="faq10"><b>Quando pode ser efetivada a transfer??ncia de titularidade?</b></a>
          <div id="faq10" class="collapse p-4">
            <p>A peti????o de transfer??ncia pode ser efetivada a qualquer momento depois do dep??sito do pedido de registro
              de marca. ?? necess??rio pagar a Guia de Recolhimento da Uni??o (GRU) referente ao servi??o "anota????o de
              transfer??ncia de titular" em nome do cession??rio. Ap??s o pagamento, deve ser preenchido o formul??rio
              eletr??nico no e-Marcas do INPI. <br> Realizamos este servi??o para voc??, basta solicitar mais informa????es.
            </p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq11" role="button" aria-expanded="false"
            aria-controls="faq11"><b>Qual ?? o tempo de dura????o de um registro de marca?</b></a>
          <div id="faq11" class="collapse p-4">
            <p>O registro de marca vigora pelo prazo de dez anos, contados da data da concess??o, prorrog??veis por
              per??odos iguais e sucessivos. O pedido de prorroga????o dever?? ser formulado durante o ??ltimo ano de
              vig??ncia do registro, mediante pagamento.</p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq12" role="button" aria-expanded="false"
            aria-controls="faq12"><b>O que ?? direito do usu??rio anterior?</b></a>
          <div id="faq12" class="collapse p-4">
            <p>Toda pessoa que, de boa-f??, usava no Pa??s, h?? pelo menos seis meses, marca id??ntica ou semelhante, para a
              mesma atividade ou atividades afins, pode reivindicar o direito de preced??ncia ao registro.</p>
          </div>
          <hr>

          <h2>DESENHO INDUSTRIAL</h2>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq13" role="button" aria-expanded="false"
            aria-controls="faq13"><b>O que ?? registro de desenho industrial?</b></a>
          <div id="faq13" class="collapse p-4">
            <p>?? um t??tulo de propriedade tempor??rio concedido pelo Estado, por for??a de lei ao autor ou pessoas cujos
              direitos derivem do mesmo, para que esta ou estas excluam terceiros, durante o prazo de vig??ncia do
              registro, sem sua pr??via autoriza????o, de atos relativos ?? mat??ria protegida, tais como fabrica????o,
              comercializa????o, importa????o, uso, venda, etc.</p>
            <p>No Brasil, desde a promulga????o da Lei 9279 de 14 de maio de 1996, o Desenho Industrial ?? protegido
              atrav??s de registro e n??o de patente.</p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq14" role="button" aria-expanded="false"
            aria-controls="faq14"><b>O que ?? registr??vel como desenho industrial?</b></a>
          <div id="faq14" class="collapse p-4">
            <p>?? registr??vel como desenho industrial a forma pl??stica ornamental de um objeto ou conjunto ornamental de
              linhas e cores que possa ser aplicado a um produto, proporcionando visual novo e original na sua
              configura????o externa e que possa servir de tipo de fabrica????o industrial. Lembramos que a apresenta????o do
              pedido pode ser colorida, por??m as cores n??o s??o protegidas, ou seja, a configura????o ou o padr??o
              ornamental ser?? protegido independente das cores utilizadas.</p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq15" role="button" aria-expanded="false"
            aria-controls="faq15"><b>O que n??o pode ser protegido como registro?</b></a>
          <div id="faq15" class="collapse p-4">
            <p>N??o pode ser pass??vel de prote????o os desenhos industriais que forem contr??rios ?? moral e aos bons
              costumes ou que ofenda a honra ou imagem de pessoas ou atente contra a liberdade de consci??ncia, cren??a,
              culto religioso ou ideia e sentimentos dignos de respeito e venera????o. Al??m disso, a forma necess??ria
              comum ou vulgar de um objeto, ou ainda, aquela determinada essencialmente por considera????es t??cnicas ou
              funcionais tamb??m n??o s??o registr??veis. Fica isento de registro de desenho industrial tamb??m os objetos ou
              padr??es puramente art??sticos, ou seja, que n??o podem ser reproduzidos em escala industrial.</p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq16" role="button" aria-expanded="false"
            aria-controls="faq16"><b>Como posso fazer um pedido de desenho industrial?</b></a>
          <div id="faq16" class="collapse p-4">
            <p>Basta falar com a gente para que seu pedido seja devidamente entendido e analisado, para que possamos
              apresentar ao INPI um dossi?? com relat??rios, reivindica????es (caso haja) e desenhos, que devem estar dentro
              dos padr??es estabelecidos pela normativa e Lei da Propriedade Intelectual.</p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq17" role="button" aria-expanded="false"
            aria-controls="faq17"><b>Quem pode depositar?</b></a>
          <div id="faq17" class="collapse p-4">
            <p>Qualquer pessoa f??sica ou jur??dica, desde que tenha legitimidade para obter o registro.</p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq18" role="button" aria-expanded="false"
            aria-controls="faq18"><b>Quais s??o os direitos conferidos ao titular do registro de desenho
              industrial?</b></a>
          <div id="faq18" class="collapse p-4">
            <p>O titular do desenho industrial tem o direito de impedir terceiros de produzir, colocar ?? venda, usar ou
              importar o desenho industrial objeto do registro, sem o seu consentimento.</p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq19" role="button" aria-expanded="false"
            aria-controls="faq19"><b>Qual ?? o territ??rio de prote????o do registro?</b></a>
          <div id="faq19" class="collapse p-4">
            <p>O registro de desenho industrial ?? v??lido somente no territ??rio nacional.</p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq20" role="button" aria-expanded="false"
            aria-controls="faq20"><b>?? poss??vel divulgar o desenho industrial em feiras, semin??rios e congressos antes
              de deposit??-lo?</b></a>
          <div id="faq20" class="collapse p-4">
            <p>?? recomend??vel depositar antes. Contudo, a lei permite a divulga????o, desde que seja feita at?? 180 dias
              antes da entrada do pedido de registro de desenho industrial e que seja promovida pelo autor ou por
              terceiros com base em informa????es obtidas direta ou indiretamente do autor. Neste caso ?? poss??vel
              declarar, no pr??prio formul??rio de dep??sito, as condi????es desta divulga????o (Art. 12 e 96 da Lei de
              Propriedade Industrial).</p>
          </div>
          <hr>

          <h2>PROGRAMAS DE COMPUTADOR</h2>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq21" role="button" aria-expanded="false"
            aria-controls="faq21"><b>Qual ?? a import??ncia do registro de programa de computador?</b></a>
          <div id="faq21" class="collapse p-4">
            <p>Apesar de n??o ser obrigat??rio por lei, o registro de programa de computador ?? fundamental para comprovar
              a autoria de seu desenvolvimento perante o Poder Judici??rio, podendo ser muito ??til em casos de processos
              relativos ?? concorr??ncia desleal, c??pias n??o autorizadas, pirataria etc., garantindo, assim, maior
              seguran??a jur??dica ao seu detentor para proteger o seu ativo de neg??cio. A validade do direito ?? de 50
              anos a partir do dia 1?? de janeiro do ano subsequente ?? sua publica????o ou, na aus??ncia desta, da sua
              cria????o.</p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq22" role="button" aria-expanded="false"
            aria-controls="faq22"><b>Tenho uma ideia de aplicativo para smartphone. Como fa??o para proteger minha ideia
              e meu aplicativo contra c??pia?</b></a>
          <div id="faq22" class="collapse p-4">
            <p>A Lei de Direito Autoral (Lei n?? 9.610/1998), e subsidiariamente a Lei de Software (Lei n?? 9.609/1998),
              conferem prote????o ao programa de computador em si, isto significa, ?? express??o literal do software, isto
              ??, suas linhas de c??digo-fonte. O registro de programa de computador no INPI ?? a forma de garantir sua
              propriedade e obter a seguran??a jur??dica necess??ria de modo a proteger o seu ativo de neg??cio, inclusive,
              por exemplo, no caso de uma demanda judicial para comprovar a autoria ou titularidade do programa.</p>
            <p>Recomendamos que o programa de computador esteja suficientemente finalizado para seu pedido de registro
              ser depositado no INPI; assim ser?? garantida a m??xima extens??o poss??vel para a prote????o do seu
              c??digo-fonte. Desse modo, conforme novas vers??es deste mesmo software forem sendo desenvolvidas, estas
              tamb??m poder??o ser registradas. N??o h?? limita????o para a quantidade de registros depositados sobre um mesmo
              software no INPI.</p>
            <p>Aqui vale uma ressalva: softwares apenas conceituais, ou seja, programas de computador que ainda se
              encontrem meramente no campo da ideia, n??o s??o pass??veis de prote????o.</p>
            <p>O registro do software no INPI ?? r??pido, totalmente eletr??nico, com a expedi????o do certificado em um
              prazo m??dio inferior a 7 dias.</p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq23" role="button" aria-expanded="false"
            aria-controls="faq23"><b>Como fazer o pedido?</b></a>
          <div id="faq23" class="collapse p-4">
            <p>Para fazer o pedido, ?? necess??rio:</p>
            <ul>
              <li>Pagar a GRU correspondente (c??digo 730);</li>
              <li>Baixar o documento Declara????o de Veracidade ??? DV e assin??-lo digitalmente;</li>
              <li>Realizar a transforma????o da documenta????o t??cnica (c??digo-fonte) em resumo digital hash;</li>
              <li>Preencher o formul??rio eletr??nico e-Software.</li>
            </ul>
            <p>Realizamos aqui na Plure todo o trabalho administrativo para voc??, com exce????o da documenta????o t??cnica
              (c??digo-fonte).</p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq24" role="button" aria-expanded="false"
            aria-controls="faq24"><b>Quem deve assinar o formul??rio eletr??nico de dep??sito?</b></a>
          <div id="faq24" class="collapse p-4">
            <p>Para protocolar o pedido de registro, ?? necess??ria a assinatura digital do titular do direito e da Plure
              como seus procuradores (quando for o caso). Para estes casos ?? necess??rio que as assinaturas sejam
              digitais no padr??o da ICP-Brasil, uma na procura????o, do titular do direito, e outra no documento DV, do
              procurador.</p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq25" role="button" aria-expanded="false"
            aria-controls="faq25"><b>O que ?? o resumo digital hash?</b></a>
          <div id="faq25" class="collapse p-4">
            <p>O resumo hash ?? um texto de comprimento fixo contendo letras e n??meros, que deve ser copiado e colado no
              campo correspondente do formul??rio eletr??nico, juntamente com a identifica????o do algoritmo empregado para
              a sua gera????o conforme especificidades nas normativas do INPI. Este resumo far?? parte do Certificado de
              Registro.</p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq26" role="button" aria-expanded="false"
            aria-controls="faq26"><b>Como fa??o para gerar o resumo hash?</b></a>
          <div id="faq26" class="collapse p-4">
            <p>A gera????o do resumo digital hash a partir da documenta????o t??cnica (c??digo-fonte) pode se dar tanto sobre
              um ??nico arquivo de entrada (PDF, DOC, TXT, etc), como sobre uma colet??nea de arquivos compactados em um
              ??nico arquivo ZIP ou RAR. Em qualquer um dos casos, ?? de vital import??ncia que este mesmo arquivo
              utilizado para gerar o hash seja mantido ??ntegro pelo interessado, preferencialmente em mais de um meio
              digital de armazenamento (backup).</p>
            <p>Este trabalho ?? realizado por n??s aqui na Plure, voc?? pode ficar tranquilo. Para sua seguran??a, uma c??pia
              ??ntegra do seu arquivo acima especificado pode ser mantida em nossa plataforma, caso seja solicitado em
              demandas judiciais ou pelo pr??prio INPI.</p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq27" role="button" aria-expanded="false"
            aria-controls="faq27"><b>Qual ?? o tempo de tramita????o do pedido?</b></a>
          <div id="faq27" class="collapse p-4">
            <p>Protocolado o pedido de registro e consolidado o pagamento da GRU, o prazo para a expedi????o e
              disponibiliza????o do certificado no portal do INPI ?? de at?? 10 dias corridos da data do dep??sito.</p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq28" role="button" aria-expanded="false"
            aria-controls="faq28"><b>Meu pedido ainda pode cair em exig??ncia ou sofrer recurso?</b></a>
          <div id="faq28" class="collapse p-4">
            <p>N??o, pois n??o existem mais as figuras da exig??ncia e do recurso. Ap??s protocolado o pedido de registro,
              apenas duas situa????es s??o poss??veis: registro concedido ou peti????o n??o conhecida.</p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq29" role="button" aria-expanded="false"
            aria-controls="faq29"><b>De quem ?? a responsabilidade da guarda da documenta????o t??cnica sigilosa?</b></a>
          <div id="faq29" class="collapse p-4">
            <p>A guarda da documenta????o t??cnica (c??digo-fonte) que comp??e o pedido de registro n??o ?? mais de
              responsabilidade do INPI, mais sim do pr??prio interessado, isto ??, o Titular do Direito. Ele ser?? o
              respons??vel por garantir a sua perfeita integridade ao longo do tempo que for necess??rio.</p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq30" role="button" aria-expanded="false"
            aria-controls="faq30"><b>Ainda preciso pagar o valor do dec??nio?</b></a>
          <div id="faq30" class="collapse p-4">
            <p>N??o. O registro permanece v??lido ao longo de todo o prazo de vig??ncia, isto ??, 50 anos, contados a partir
              de 1?? de janeiro do ano subsequente ao da sua publica????o ou, na aus??ncia desta, da sua cria????o, sem a
              necessidade do pagamento de dec??nio.</p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq31" role="button" aria-expanded="false"
            aria-controls="faq31"><b>O registro do programa de computador s?? tem validade no territ??rio
              nacional?</b></a>
          <div id="faq31" class="collapse p-4">
            <p>N??o. O registro de programa de computador n??o ?? territorial, isto ??, sua abrang??ncia ?? internacional,
              compreendendo os 175 pa??ses signat??rios da Conven????o de Berna (1886).</p>
          </div>
          <hr>

          <h2>TRANSFER??NCIA DE TECNOLOGIA</h2>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq32" role="button" aria-expanded="false"
            aria-controls="faq32"><b>Por que fazer contratos envolvendo propriedade industrial e tecnologia?</b></a>
          <div id="faq32" class="collapse p-4">
            <p>Al??m de proteger os seus ativos, ?? poss??vel que voc?? queira licenci??-los para uma empresa, ou ent??o obter
              uma licen??a para impulsionar seu neg??cio. Pode ainda preferir adquirir conhecimentos n??o amparados por
              direitos de propriedade industrial. Para que estas transa????es sejam seguras e permitam a realiza????o do
              pagamento ao exterior, existem contratos que devem ser averbados e/ou registrados no INPI.</p>
            <p>Os tipos de contratos existentes s??o as cess??es e os licenciamentos de patentes, desenhos industriais e
              marcas, al??m de assist??ncia t??cnica e do fornecimento de tecnologia (know-how). Tamb??m s??o registradas as
              franquias empresariais, garantindo assim um acordo seguro e conferindo validade perante terceiros.</p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq33" role="button" aria-expanded="false"
            aria-controls="faq33"><b>Quais s??o os tipos de contratos que o INPI averba ou registra?</b></a>
          <div id="faq33" class="collapse p-4">
            <p>Os contratos averbados ou registrados no INPI s??o: </p>
            <ul>
              <li><b>Licen??a para explora????o de patente e desenho industrial</b> - contratos para autorizar terceiros a
                explorarem o objeto da patente ou do desenho industrial.</li>
              <li><b>Licen??a para uso de marca</b> - contrato que se destina a autorizar o uso efetivo, por terceiros,
                de marca regularmente depositada ou registrada no pa??s.</li>
              <li><b>Fornecimento de tecnologia</b> - contrato que estipula as condi????es para a aquisi????o de
                conhecimentos e de t??cnicas n??o amparados por direitos de propriedade industrial (know how).</li>
              <li><b>Servi??os de assist??ncia t??cnica e cient??fica</b> - contratos que estipulam as condi????es de obten????o
                de t??cnicas, m??todos de planejamento e programa????o, bem como pesquisas, estudos e projetos destinados ??
                execu????o ou presta????o de servi??os especializados. Nestes contratos ser?? exigida a explicita????o do custo
                de homem/hora detalhado por tipo de t??cnico, o prazo previsto para a realiza????o do servi??o ou a
                evidencia????o de que o mesmo j?? fora realizado e o valor total da presta????o do servi??o, ainda que
                estimado.</li>
              <li><b>Franquia</b> - envolve servi??os, transfer??ncia de tecnologia e transmiss??o de padr??es, al??m de uso
                de marca ou patente. O franqueado dever?? comprovar conhecimento da Circular de Oferta, que ?? um
                documento produzido pelo franqueador, conforme artigo 3?? da Lei de Franquia (n?? 8955/1994).</li>
              <li><b>Cess??o de patente, desenho industrial e marca</b> - envolve a transfer??ncia de titularidade e ??
                pass??vel de averba????o quando envolver remunera????o e o titular do direito for domiciliado no exterior.
              </li>
            </ul>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq34" role="button" aria-expanded="false"
            aria-controls="faq34"><b>Quais s??o os efeitos da averba????o?</b></a>
          <div id="faq34" class="collapse p-4">
            <p>Legitimar remessas de divisas ao exterior, como pagamento pela tecnologia negociada; Permitir
              dedutibilidade fiscal, quando for o caso, para a empresa receptora da tecnologia das import??ncias pagas a
              t??tulo de royalties e assist??ncia t??cnica; Produzir efeitos perante terceiros.</p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq35" role="button" aria-expanded="false"
            aria-controls="faq35"><b>Como ?? definido o valor contratual?</b></a>
          <div id="faq35" class="collapse p-4">
            <p>Nos contratos de licenciamento de patente, desenho industrial e marca os tipos de pagamento usualmente
              negociados s??o: percentual incidente sobre o pre??o l??quido de venda e valor fixo por unidade vendida; nos
              de fornecimento de tecnologia a remunera????o ?? estabelecida de acordo com a negocia????o contratual, devendo
              ser levado em conta os n??veis de pre??os praticados nacional e internacionalmente em contrata????es
              similares.</p>
            <p>J?? nos contratos de servi??os de assist??ncia t??cnica ser?? exigida a explicita????o do custo em fun????o da
              taxa dia/hora detalhado por especializa????o do t??cnico e o valor total do servi??o, ainda que estimado. Nos
              contratos de franquia a remunera????o usualmente estipulada ??: taxa de franquia, taxa de royalties
              (percentual sobre o pre??o l??quido de venda ou do faturamento); taxa de publicidade, al??m de outras taxas.
            </p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq36" role="button" aria-expanded="false"
            aria-controls="faq36"><b>?? obrigat??rio o registro do contrato de franquia no INPI?</b></a>
          <div id="faq36" class="collapse p-4">
            <p>O registro ?? necess??rio para os contratos cujos franqueadores s??o domiciliados no exterior e estabelecem
              pagamentos, sendo facultativo para contratos internos, garantindo assim um acordo seguro e conferindo
              validade perante terceiros.</p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq37" role="button" aria-expanded="false"
            aria-controls="faq37"><b>Qual lei rege o sistema de franquia e o que ?? Circular de Oferta?</b></a>
          <div id="faq37" class="collapse p-4">
            <p>A Lei n?? 13.966, de 26 de dezembro de 2019, rege o sistema de franquia.</p>
            <p>A Circular de Ofertas constitui uma das exig??ncias da Lei Brasileira,??13.966 (artigo 2??), exige que o
              franqueador entregue ao franqueado dez (10) dias antes da assinatura do contrato definitivo para an??lise.
              Neste documento dever?? constar o hist??rico resumido da empresa, balan??os e demonstra????es financeiras da
              empresa, perfil do "franqueado ideal", situa????o perante o Instituto Nacional da Propriedade Industrial -
              INPI das marcas ou patentes e outros itens.</p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq38" role="button" aria-expanded="false"
            aria-controls="faq38"><b>A marca ?? importante no sistema de franquia?</b></a>
          <div id="faq38" class="collapse p-4">
            <p>Sim. A marca ?? o maior patrim??nio do franqueador.</p>
            <p>No sistema de franquia, assim como no sistema unit??rio, a marca ?? a propaganda do neg??cio. Ela ?? o elo da
              rede de franquia. ?? bom lembrar que uma falha do franqueado afetar?? toda a rede, assim como a marca.</p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq39" role="button" aria-expanded="false"
            aria-controls="faq39"><b>Quem pode requerer averba????o?</b></a>
          <div id="faq39" class="collapse p-4">
            <p>Qualquer das partes contratantes.</p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq40" role="button" aria-expanded="false"
            aria-controls="faq40"><b>Qual ?? a documenta????o a ser apresentada em um pedido de averba????o?</b></a>
          <div id="faq40" class="collapse p-4">
            <p>Para solicitar o servi??o, o requisitante deve providenciar os seguintes documentos: Formul??rio de
              requerimento de averba????o (devidamente preenchido); Guia de Recolhimento da Uni??o (GRU) - paga;
              Procura????o; Carta explicativa; Contrato e aditivo ou fatura; Tradu????es (de toda documenta????o em l??ngua
              estrangeira); e Ficha de cadastro da(s) Empresa(s) Cession??ria(s) Brasileira(s).</p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq41" role="button" aria-expanded="false"
            aria-controls="faq41"><b>Qual o tempo de tramita????o para decis??o do INPI?</b></a>
          <div id="faq41" class="collapse p-4">
            <p>30 dias, a contar da data de publica????o da peti????o ou pedido de averba????o na RPI, conforme Artigo 211,
              par??grafo ??nico, Lei n?? 9.279 de 14/05/96.</p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq42" role="button" aria-expanded="false"
            aria-controls="faq42"><b>Quais s??o os servi??os que n??o s??o caracterizados como transfer??ncia de
              tecnologia?</b></a>
          <div id="faq42" class="collapse p-4">
            <p>Por n??o caracterizarem transfer??ncia de tecnologia, nos termos do Art. 211 da Lei n?? 9.279/96 alguns
              servi??os t??cnicos especializados s??o dispensados de averba????o pelo INPI. Segue lista n??o exaustiva desses
              servi??os:</p>
            <p>Agenciamento de compras, incluindo servi??os de log??stica (suporte ao embarque, tarefas administrativas
              relacionadas ?? libera????o alfandeg??ria, etc.); Servi??os realizados no exterior sem a presen??a de t??cnicos
              da empresa brasileira, que n??o gerem quaisquer documentos e/ou relat??rios, como por exemplo,
              beneficiamento de produtos; Homologa????o e certifica????o de qualidade de produtos; Consultoria na ??rea
              financeira; Consultoria na ??rea comercial; Consultoria na ??rea jur??dica; Consultoria visando participa????o
              em licita????o; Servi??os de marketing; Consultoria remota, sem a gera????o de documentos; Servi??os de suporte,
              manuten????o, instala????o, implementa????o, integra????o, implanta????o, customiza????o, adapta????o, certifica????o,
              migra????o, configura????o, parametriza????o, tradu????o, ou localiza????o de programa de computador (software);
              Servi??os de treinamento para usu??rio final ou outro treinamento de programa de computador (software);
              Licen??a de uso de programa de computador (software); Distribui????o de programa de computador (software);
              Aquisi????o de c??pia ??nica de programa de computador (software).</p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq43" role="button" aria-expanded="false"
            aria-controls="faq43"><b>Como fazer para realizar os pagamentos ao exterior decorrentes das aprova????es dos
              contratos de tecnologia pelo INPI?</b></a>
          <div id="faq43" class="collapse p-4">
            <p>Para remeter moeda estrangeira como pagamento que envolva direitos de propriedade industrial,
              fornecimento de tecnologia, presta????o de servi??os de assist??ncia t??cnica e franquia ?? necess??rio que a
              empresa formalize um contrato e o submeta a averba????o do INPI.</p>
            <p>Ap??s a emiss??o do respectivo Certificado de Averba????o a empresa poder??, de acordo com a Resolu????o BACEN
              n?? 3.844/2010 e Regulamento anexo III, proceder ao Registro Declat??rio Eletr??nico - Registro de Opera????o
              Financeira (RDE/ROF) por transfer??ncia de tecnologia, acessando o SISBACEN, por interm??dio de uma
              institui????o financeira ou por meios pr??prios.</p>
          </div>

        </div>
      </div>
    </div>
  </div>
  
  <script src="<?php  echo get_theme_root_uri(); ?>/Plure-Site/typed.min.js"></script>
  <script src="<?php  echo get_theme_root_uri(); ?>/Plure-Site/global.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
</body>

</html>