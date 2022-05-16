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
              <a class="nav-link active d-flex align-items-center" href="<?php echo get_site_url(); ?>/#duvidas"><i class="ph-question me-2"></i>FAQ</a>
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
        <p>Cuide do que é seu!</p>
      </div>
    </div>
    <!--typed by youself-->
    <div class="container hero">
      <div>
        <h4 id="top1" class="show-titles">ASSESSORIA JURÍDICA</h4>
        <h4 id="top2" class="show-titles">IDENTIDADE VISUAL</h4>
        <h4 id="top3" class="show-titles">REGISTRO DE MARCAS</h4>
        <h4 id="top4" class="show-titles">DEPÓSITO DE PATENTES</h4>

        <h1><span id="typed"></span></h1>

        <p id="bottom1" class="show-titles">Advogados especializados na área de Propriedade Intelectual</p>
        <p id="bottom2" class="show-titles">Criação de Identidade Visual e logotipo para fortalecer sua marca</p>
        <p id="bottom3" class="show-titles">O Registro de Marca no INPI garante ao titular a exclusividade de uso em
          todo território nacional no seu ramo de atividade.</p>
        <p id="bottom4" class="show-titles">O Depósito de Patente garante ao titular a impossibilidade de terceiros
          explorarem seu invento, como vender, produzir, usar, etc.</p>

        <a class="buttonOne" href="<?php echo get_site_url(); ?>/#about">Saiba Mais</a>
        <a class="buttonTwo" href="<?php echo get_site_url(); ?>/#contact">Contato</a>
      </div>
    </div>
    <div class="container">
      <div class="cardInvite">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-6 col-lg-8">
            <h3 class="color-1">Nosso objetivo é levar proteção à sua MARCA.</h3>
            <p>Faça uma pesquisa de viabilidade <b>sem custo</b> e descubra se sua MARCA está disponível para registro.</p>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-4 text-lg-end text-center">
            <a type="button" data-bs-toggle="modal" data-bs-target="#cardInvite" class="buttonOne" href="<?php echo get_site_url(); ?>/#about">Consulta Grátis</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Modal -->
  <div class="modal fade" id="cardInvite" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="cardInvite" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <img src="<?php  echo get_theme_root_uri(); ?>/Plure-Site/assets/logoDark.svg" width="60" alt="">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>

  <section id="about">
    <img class="wave" src="<?php  echo get_theme_root_uri(); ?>/Plure-Site/assets/wave.svg" alt="curvas">
    <div class="container-fluid py-5 hero2">
      <div class="container py-5 text-center">
        <h2 class="color-2">Sobre a Plure</h2>
        <div class="divisorDarkCenter"></div>
        <div id="cards" class="row text-center d-flex align-items-stretch justify-content-center"></div>
      </div>
    </div>
    <img class="wave2" src="<?php  echo get_theme_root_uri(); ?>/Plure-Site/assets/wave2.svg" alt="curvas">
  </section>

  <section>
    <div class="container-fluid py-5 text-light">
      <div class="container py-5">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-8 col-lg-9">
            <h2>Você sabe qual a importância da sua marca?</h2>
            <div class="divisorLight"></div>
            <p>Sua MARCA é o DNA da sua Empresa, é o que conecta o cliente ao seu produto/serviço.</p>
            <p>Ela transmite valores empresariais e fornece identidade ao seu negócio.</p>
            <p>Se sua empresa tiver uma marca sólida, honesta e cheia de propósito, consequentemente terá forte
              influência no processo de compra do seu cliente, contribuindo de maneira significativa na tomada de
              decisão.</p>
            <p>
            Uma vez atribuída uma imagem a sua marca, se essa percepção for positiva, o seu público terá preferência pelo seu produto/serviço e credibilidade na sua empresa, aumentando as vendas e melhorando a imagem da sua empresa.
            </p>
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
        <h2 class="color-2">PORQUE É IMPORTANTE REGISTRAR SUA MARCA?</h2>
        <div class="divisorDarkCenter"></div>
        <div class="row">
          <div class="col-12 col-sm-12 col-md-4">
            <img class="shake-vertical" width="100%"
              src="<?php  echo get_theme_root_uri(); ?>/Plure-Site/assets/girl.png"
              alt="Mulher feliz apontando para a direita">
          </div>
          <div class="col-12 col-sm-12 col-md-8">
            <ol>
              <li>
                Registrar a sua MARCA é a forma adequada proteger a identidade da sua empresa.
              </li>
              <li>
                Com o Registro você irá adquirir um certificado que garante o direito de propriedade e uso exclusivo de sua marca em todo território nacional.
              </li>
              <li>
                O Registro de MARCAS pode proteger o nome, os sinais distintivos das letras,números, figuras e tudo o que faz parte da composição da sua marca.
              </li>
              <li>
                A MARCA concentra todos os resultados da empresa. Os investimentos em marketing, o crescimento das vendas, a avaliação dos produtos ou serviços e a confiança dos clientes são atribuídos ao nome da empresa, ou seja, a sua MARCA.
              </li>
              <li>
                Para que você possa ter exclusividade no mercado, evitando que terceiros utilizem a sua MARCA, garantindo que somente você, o detentor do certificado de registro da MARCA, possa usar, gozar, fruir e dispor da referida MARCA registrada.
              </li>
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
              <h2 class="color-2">riscos de não registrar sua marca</h2>
              <div class="divisorDark"></div>
              <ul>
                <li>Perder a MARCA para um terceiro.</li>
                <li>Ser processado por uso indevido de MARCA já Registrada.</li>
                <li>Sofrer prejuízos financeiros e perda de credibilidade.</li>
                <li>Não poder se defender de cópias e uso indevido por não possuir o direito de uso exclusivo sobre a
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
          alt="Desenho de dois bonecos segurando um símbolo de interrogação" srcset="">
        <br>

        <div class="py-3">
          <a class="buttonThree" data-bs-toggle="collapse" href="#collapse1" role="button" aria-expanded="false"
            aria-controls="collapse1">
            onde a marca é registrada?
          </a>
          <div class="collapse" id="collapse1">
            <div class="p-4">
              <p>A MARCA é registrada no INPI - Instituto Nacional de Propriedade Industrial.<br>
                O INPI é uma autarquia federal responsável pelo registro de marcas e patentes no Brasil.
                Somente o certificado emitido pelo INPI garante proteção em todo território nacional.</p>
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
              <p>Atualmente os pedidos de registro de MARCA estão demorando, em média, de 8 a 12 meses, para serem
                analisados pelo INPI.</p>
            </div>
          </div>
        </div>

        <div class="py-3">
          <a class="buttonThree" data-bs-toggle="collapse" href="#collapse3" role="button" aria-expanded="false"
            aria-controls="collapse3">
            qual a validade do registro de uma marca?
          </a>
          <div class="collapse" id="collapse3">
            <div class="p-4">
              <p>O registro de MARCA no Brasil é válido por 10 anos, a contar da concessão, podendo ser renovado a cada
                10 anos, sucessivamente.<br>
                O Registro de MARCAS pelo INPI tem validade em todo território nacional, o que permite expansão dos seus
                negócios e mais notoriedade para firmar parcerias e ter uma série de vantagens tangíveis.</p>
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
                <p>Atuamos com agilidade, segurança e ética junto ao INPI para garantir e proteger os interesses de sua
                  MARCA em todo território nacional.</p>
              </div>
              <div class="d-md-flex align-items-center">
                <i class="icon ph-check-circle mx-4"></i>
                <p>A informação sobre todas as etapas é essencial, por isso a PLURE trata o processo de registro com
                  clareza, afinal, você não pode ser surpreendido com novas taxas e novos valores durante o processo.
                  Por isso, atuamos com:</p>
              </div>
              <div class="text-center">
                <p><i class="ph-check-bold color-3"></i> Transparência total sobre o processo.</p>
                <p><i class="ph-check-bold color-3"></i> Clareza ao informar os valores investidos em cada etapa.</p>
                <p><i class="ph-check-bold color-3"></i> Orientação sobre o enquadramento correto.</p>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <small class="color-3">E não para por aqui!</small>
      </div>
    </div>
    <div class="container-fluid py-5 hero3 text-center">
      <div class="container">
        <h2>garantia plure</h2>
        <div class="divisorLightCenter"></div>
        <p>
          Caso sua MARCA seja INDEFERIDA, damos entrada em outro nome escolhido por você, sem a cobrança de honorários. É preciso pagar apenas as taxas do Governo.
        </p>
        <p>
        A garantia é válida para UMA CLASSE, havendo interesse no registro de mais classes, aplica-se a tabela de honorários.
        </p>
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
        <h2>QUAIS CUIDADOS SÃO NECESSÁRIOS DURANTE O DECÊNIO?</h2>
        <div class="divisorDarkCenter"></div>
        <div class="row text-start">
          <div class="col-12 col-md-12 col-lg-6">
            <h3>COLIDÊNCIAS</h3>
            <p>Conforme já esclarecido, o registro da MARCA só é deferido caso não haja uma empresa com o nome igual ou
              semelhante, com a mesma CLASSE (Classificação Nice de Produtos e Serviços) ao da solicitante do
              certificado, exatamente para que não haja uma confusão do consumidor no momento de identificar as
              diferenças entre as duas instituições.</p>
            <p>Essa igualdade e semelhança entre duas MARCAS é chamada de COLIDÊNCIA. Durante todo o decênio a PLURE
              fará pesquisas semanais para verificar se outras MARCAS não estão em COLIDÊNCIA com a sua MARCA já
              registrada.</p>
          </div>
          <div class="col-12 col-md-12 col-lg-6">
            <h3>OPOSIÇÃO</h3>
            <p>Uma vez constatada a COLIDÊNCIA com outra MARCA, durante o decênio, a PLURE irá apresentar OPOSIÇÃO
              evidenciando o seu direito de utilizar a MARCA com base no registro e na anterioridade.</p>
            <p>Por isso o acompanhamento da sua MARCA é importante, para garantir sua defesa em caso de registros de
              MARCAS similares com alegações de anterioridade (alegação de que está atuando no mercado a mais tempo).
            </p>
          </div>
        </div>
        <small class="color-3">*Acompanhamento durante o decênio será efetuado mediante contratação e pagamento de
          anuidade.</small>
      </div>
    </div>
    <img class="wave2" src="<?php  echo get_theme_root_uri(); ?>/Plure-Site/assets/wave2.svg" alt="curvas">
  </section>

  <section>
    <div class="container-fluid py-5">
      <div class="container py-5 text-light text-center">
        <h2>Tabela de Preços</h2>
        <div class="divisorLightCenter"></div>
        <div class="row g-2">

          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 d-flex align-items-stretch justify-content-center">
            <div class="cardPlure">
              <small>Pocedimento / Fase</small>
              <h3>Pesquisa de Viabilidade da Marca</h3>
              <small>Honorários</small>
              <p class="cardPrice">Grátis</p>
              <small>GRU INPI</small><br>
              <small>---</small>
            </div>
          </div>

          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 d-flex align-items-stretch justify-content-center">
            <div class="cardPlure">
              <small>Pocedimento / Fase</small>
              <h3>Diagnóstico de Classificação</h3>
              <small>Honorários</small>
              <p class="cardPrice">Grátis</p>
              <small>GRU INPI</small><br>
              <small>---</small>
            </div>
          </div>

          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 d-flex align-items-stretch justify-content-center">
            <div class="cardPlure">
              <small>Pocedimento / Fase</small>
              <h3>Depósito/Registro e Acompanhamento</h3>
              <small>Honorários</small>
              <p class="cardPrice">R$ 1.500,00</p>
              <small>(Por Classe)</small><br>
              <small>GRU INPI</small><br>
              <small>Taxa inclusa nos honorários</small>
            </div>
          </div>

          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 d-flex align-items-stretch justify-content-center">
            <div class="cardPlure">
              <small>Pocedimento / Fase</small>
              <h3>Depósito/Registro (Classe Extra)</h3>
              <small>Honorários</small>
              <p class="cardPrice">R$ 494,00</p>
              <small>(Por Classe)</small><br>
              <small>GRU INPI</small><br>
              <small>Taxa inclusa nos honorários</small>
            </div>
          </div>

          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 d-flex align-items-stretch justify-content-center">
            <div class="cardPlure">
              <small>Pocedimento / Fase</small>
              <h3>Oposição</h3>
              <small>Honorários</small>
              <p class="cardPrice">R$ 296,00</p>
              <small>(Por Classe)</small><br>
              <small>GRU INPI</small><br>
              <small>R$ 355,00 ou R$ 142,00 com desconto (Por Classe)</small>
            </div>
          </div>

          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 d-flex align-items-stretch justify-content-center">
            <div class="cardPlure">
              <small>Pocedimento / Fase</small>
              <h3>Deferimento</h3>
              <small>Honorários</small>
              <p class="cardPrice">Grátis</p>
              <small>GRU INPI</small><br>
              <small>R$ 745,00 ou R$ 298,00 com desconto (Por Classe)</small>
            </div>
          </div>

          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 d-flex align-items-stretch justify-content-center">
            <div class="cardPlure">
              <small>Pocedimento / Fase</small>
              <h3>Recurso Administrativo (Indeferimento)</h3>
              <small>Honorários</small>
              <p class="cardPrice">R$ 395,00</p>
              <small>(Por Classe)</small><br>
              <small>GRU INPI</small><br>
              <small>R$ 475,00 (Por Classe)</small>
            </div>
          </div>

          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 d-flex align-items-stretch justify-content-center">
            <div class="cardPlure">
              <small>Pocedimento / Fase</small>
              <h3>Acompanhamento Decênio</h3>
              <small>Honorários</small>
              <p class="cardPrice">R$ 296,00</p>
              <small>(Por Classe)* Anuidade</small><br>
              <small>GRU INPI</small><br>
              <small>---</small>
            </div>
          </div>

        </div>
        <div class="p-4">
          <p>* Manifestações e procedimentos diversos, consultar valores de honorários e taxas do INPI.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="duvidas">
    <img class="wave" src="<?php  echo get_theme_root_uri(); ?>/Plure-Site/assets/wave.svg" alt="curvas">
    <div class="container-fluid py-5 hero2 text-center">
      <div class="container py-5">
        <h2 class="color-2">perguntas frequentes</h2>
        <div class="divisorDarkCenter"></div>
        <div class="text-start">
          <h4><b>MARCAS</b></h4>
          <a class="faqBtn" data-bs-toggle="collapse" href="#faq1" role="button" aria-expanded="false" aria-controls="faq1">
            <b>O que é marca?</b>
          </a>
          <div id="faq1" class="collapse p-4">
            <p>
              Marca é todo sinal distintivo, visualmente perceptível, que identifica e distingue produtos e serviços, bem como certifica a conformidade dos mesmos com determinadas normas ou especificações técnicas. A marca registrada garante ao seu proprietário o direito de uso exclusivo no território nacional em seu ramo de atividade econômica. Ao mesmo tempo, sua percepção pelo consumidor pode resultar em agregação de valor aos produtos ou serviços.
            </p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq2" role="button" aria-expanded="false" aria-controls="faq2">
            <b>Como registrar?</b>
          </a>
          <div id="faq2" class="collapse p-4">
            <p>
              Um pedido de registro de marca é feito pelo preenchimento de formulário, que deve ser entregue junto com o arquivo da imagem e procuração (se houver) ao INPI. Este processo é realizado por nós e você receberá um comprovante de entrada de registro, assim que realizado pela nossa equipe.
            </p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq3" role="button" aria-expanded="false" aria-controls="faq3">
            <b>A busca prévia é obrigatória?</b>
          </a>
          <div id="faq3" class="collapse p-4">
            <p>
              Não. Entretanto, é aconselhável ao interessado realizá-la antes de efetuar o depósito, na classe (atividade) que pretende registrar seu produto ou serviço, para verificar se já existe marca anteriormente depositada ou registrada. Aqui conosco, oferecemos gratuitamente este serviço, pois entendemos a sua importância.
            </p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq4" role="button" aria-expanded="false" aria-controls="faq4">
            <b>O que é registrável como marca?</b>
          </a>
          <div id="faq4" class="collapse p-4">
            <p>
              A marca pode ser conferida para um produto ou para um serviço, contanto que tenha poder de distingui-lo de outros semelhantes ou afins. São registráveis como marca sinais visuais. Portanto, a lei brasileira não protege os sinais sonoros, gustativos e olfativos.
            </p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq5" role="button" aria-expanded="false" aria-controls="faq5">
            <b>Posso registrar minha marca sem contratar um especialista?</b>
          </a>
          <div id="faq5" class="collapse p-4">
            <p>
              Sim. Você pode fazer o pedido de marca diretamente no site INPI. Entretanto, nós aconselhamos fortemente que faça este processo junto à um de nossos especialistas, uma vez que existem centenas de detalhes administrativos, técnicos e jurídicos envolvidos em um registro e se não forem bem orientados e conduzidos no pedido, você poderá estar jogando dinheiro fora ou até mesmo tendo uma falsa impressão de que sua marca está protegida contra o uso indevido de terceiros.
            </p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq6" role="button" aria-expanded="false" aria-controls="faq6">
            <b>Quais são os direitos e deveres do titular de uma marca?</b>
          </a>
          <div id="faq6" class="collapse p-4">
            <p>
              A marca registrada garante a propriedade e o uso exclusivo em todo o território nacional por dez anos. O titular deve mantê-la em uso e prorrogá-la de dez em dez anos.
            </p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq7" role="button" aria-expanded="false" aria-controls="faq7">
            <b>Pessoa física pode requerer o registro?</b>
          </a>
          <div id="faq7" class="collapse p-4">
            <p>
              A pessoa física pode requerer o registro de marca, desde que comprove a atividade exercida, através de documento comprobatório, expedido pelo órgão competente. Verifica-se a habilitação profissional diante do órgão ou entidade responsável pelo registro, inscrição ou cadastramento.
            </p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq8" role="button" aria-expanded="false" aria-controls="faq8">
            <b>Como acompanhar o andamento do processo?</b>
          </a>
          <div id="faq8" class="collapse p-4">
            <p>
              Possuímos uma plataforma tecnológica que faz a leitura detalhada de todos os processos registrados no INPI e todas as suas atualizações, garantindo a você que nenhuma atualização do seu processo, oposição ao seu registro ou colidência de pedido de registro por terceiros possa ser feito sem que sejamos avisados e para que possados agir em sua defesa.
            </p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq9" role="button" aria-expanded="false" aria-controls="faq9">
            <b>Quando ocorre a perda do direito?</b>
          </a>
          <div id="faq9" class="collapse p-4">
            <p>
              O registro da marca extingue-se pela expiração do prazo de vigência; pela renúncia (abandono voluntário do titular ou pelo representante legal); pela caducidade (falta de uso da marca) ou pela inobservância do disposto no art. 217 da Lei de Propriedade Industrial.
            </p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq10" role="button" aria-expanded="false" aria-controls="faq10">
            <b>Quando pode ser efetivada a transferência de titularidade?</b>
          </a>
          <div id="faq10" class="collapse p-4">
            <p>
              A petição de transferência pode ser efetivada a qualquer momento depois do depósito do pedido de registro de marca. É necessário pagar a Guia de Recolhimento da União (GRU) referente ao serviço "anotação de transferência de titular" em nome do cessionário. Após o pagamento, deve ser preenchido o formulário eletrônico no e-Marcas do INPI. <br /> 
              Realizamos este serviço para você, basta solicitar mais informações.
            </p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq11" role="button" aria-expanded="false" aria-controls="faq11">
            <b>Qual é o tempo de duração de um registro de marca?</b>
          </a>
          <div id="faq11" class="collapse p-4">
            <p>
              O registro de marca vigora pelo prazo de dez anos, contados da data da concessão, prorrogáveis por períodos iguais e sucessivos. O pedido de prorrogação deverá ser formulado durante o último ano de vigência do registro, mediante pagamento.
            </p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq12" role="button" aria-expanded="false" aria-controls="faq12">
            <b>O que é direito do usuário anterior?</b>
          </a>
          <div id="faq12" class="collapse p-4">
            <p>
              Toda pessoa que, de boa-fé, usava no País, há pelo menos seis meses, marca idêntica ou semelhante, para a mesma atividade ou atividades afins, pode reivindicar o direito de precedência ao registro.
            </p>
          </div>
          <hr>

          <h4><b>DESENHO INDUSTRIAL</b></h4>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq13" role="button" aria-expanded="false" aria-controls="faq13">
            <b>O que é registro de desenho industrial?</b>
          </a>
          <div id="faq13" class="collapse p-4">
            <p>
              É um título de propriedade temporário concedido pelo Estado, por força de lei ao autor ou pessoas cujos direitos derivem do mesmo, para que esta ou estas excluam terceiros, durante o prazo de vigência do registro, sem sua prévia autorização, de atos relativos à matéria protegida, tais como fabricação, comercialização, importação, uso, venda, etc.
            </p>
            <p>
              No Brasil, desde a promulgação da Lei 9279 de 14 de maio de 1996, o Desenho Industrial é protegido através de registro e não de patente.
            </p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq14" role="button" aria-expanded="false" aria-controls="faq14">
            <b>O que é registrável como desenho industrial?</b>
          </a>
          <div id="faq14" class="collapse p-4">
            <p>
              É registrável como desenho industrial a forma plástica ornamental de um objeto ou conjunto ornamental de linhas e cores que possa ser aplicado a um produto, proporcionando visual novo e original na sua configuração externa e que possa servir de tipo de fabricação industrial. Lembramos que a apresentação do pedido pode ser colorida, porém as cores não são protegidas, ou seja, a configuração ou o padrão ornamental será protegido independente das cores utilizadas.
            </p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq15" role="button" aria-expanded="false" aria-controls="faq15">
            <b>O que não pode ser protegido como registro?</b>
          </a>
          <div id="faq15" class="collapse p-4">
            <p>
              Não pode ser passível de proteção os desenhos industriais que forem contrários à moral e aos bons costumes ou que ofenda a honra ou imagem de pessoas ou atente contra a liberdade de consciência, crença, culto religioso ou ideia e sentimentos dignos de respeito e veneração. Além disso, a forma necessária comum ou vulgar de um objeto, ou ainda, aquela determinada essencialmente por considerações técnicas ou funcionais também não são registráveis. Fica isento de registro de desenho industrial também os objetos ou padrões puramente artísticos, ou seja, que não podem ser reproduzidos em escala industrial.
            </p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq16" role="button" aria-expanded="false" aria-controls="faq16">
            <b>Como posso fazer um pedido de desenho industrial?</b>
          </a>
          <div id="faq16" class="collapse p-4">
            <p>
              Basta falar com a gente para que seu pedido seja devidamente entendido e analisado, para que possamos apresentar ao INPI um dossiê com relatórios, reivindicações (caso haja) e desenhos, que devem estar dentro dos padrões estabelecidos pela normativa e Lei da Propriedade Intelectual.
            </p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq17" role="button" aria-expanded="false" aria-controls="faq17">
            <b>Quem pode depositar?</b>
          </a>
          <div id="faq17" class="collapse p-4">
            <p>
              Qualquer pessoa física ou jurídica, desde que tenha legitimidade para obter o registro.
            </p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq18" role="button" aria-expanded="false" aria-controls="faq18">
            <b>Quais são os direitos conferidos ao titular do registro de desenho industrial?</b>
          </a>
          <div id="faq18" class="collapse p-4">
            <p>
              O titular do desenho industrial tem o direito de impedir terceiros de produzir, colocar à venda, usar ou importar o desenho industrial objeto do registro, sem o seu consentimento.
            </p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq19" role="button" aria-expanded="false" aria-controls="faq19">
            <b>Qual é o território de proteção do registro?</b>
          </a>
          <div id="faq19" class="collapse p-4">
            <p>O registro de desenho industrial é válido somente no território nacional.</p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq20" role="button" aria-expanded="false" aria-controls="faq20">
            <b>É possível divulgar o desenho industrial em feiras, seminários e congressos antes
              de depositá-lo?</b>
          </a>
          <div id="faq20" class="collapse p-4">
            <p>
              É recomendável depositar antes. Contudo, a lei permite a divulgação, desde que seja feita até 180 dias antes da entrada do pedido de registro de desenho industrial e que seja promovida pelo autor ou por terceiros com base em informações obtidas direta ou indiretamente do autor. Neste caso é possível
              declarar, no próprio formulário de depósito, as condições desta divulgação (Art. 12 e 96 da Lei de Propriedade Industrial).
            </p>
          </div>
          <hr>

          <h4><b>PROGRAMAS DE COMPUTADOR</b></h4>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq21" role="button" aria-expanded="false" aria-controls="faq21">
            <b>Qual é a importância do registro de programa de computador?</b>
          </a>
          <div id="faq21" class="collapse p-4">
            <p>
              Apesar de não ser obrigatório por lei, o registro de programa de computador é fundamental para comprovar a autoria de seu desenvolvimento perante o Poder Judiciário, podendo ser muito útil em casos de processos relativos à concorrência desleal, cópias não autorizadas, pirataria etc., garantindo, assim, maior
              segurança jurídica ao seu detentor para proteger o seu ativo de negócio. A validade do direito é de 50 anos a partir do dia 1° de janeiro do ano subsequente à sua publicação ou, na ausência desta, da sua criação.
            </p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq22" role="button" aria-expanded="false" aria-controls="faq22">
            <b>Tenho uma ideia de aplicativo para smartphone. Como faço para proteger minha ideia
              e meu aplicativo contra cópia?</b>
          </a>
          <div id="faq22" class="collapse p-4">
            <p>
              A Lei de Direito Autoral (Lei nº 9.610/1998), e subsidiariamente a Lei de Software (Lei nº 9.609/1998), conferem proteção ao programa de computador em si, isto significa, à expressão literal do software, isto é, suas linhas de código-fonte. O registro de programa de computador no INPI é a forma de garantir sua propriedade e obter a segurança jurídica necessária de modo a proteger o seu ativo de negócio, inclusive, por exemplo, no caso de uma demanda judicial para comprovar a autoria ou titularidade do programa.
            </p>
            <p>
              Recomendamos que o programa de computador esteja suficientemente finalizado para seu pedido de registro ser depositado no INPI; assim será garantida a máxima extensão possível para a proteção do seu código-fonte. Desse modo, conforme novas versões deste mesmo software forem sendo desenvolvidas, estas também poderão ser registradas. Não há limitação para a quantidade de registros depositados sobre um mesmo software no INPI.
            </p>
            <p>
              Aqui vale uma ressalva: softwares apenas conceituais, ou seja, programas de computador que ainda se encontrem meramente no campo da ideia, não são passíveis de proteção.
            </p>
            <p>
              O registro do software no INPI é rápido, totalmente eletrônico, com a expedição do certificado em um prazo médio inferior a 7 dias.
            </p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq23" role="button" aria-expanded="false" aria-controls="faq23">
            <b>Como fazer o pedido?</b>
          </a>
          <div id="faq23" class="collapse p-4">
            <p>Para fazer o pedido, é necessário:</p>
            <ul>
              <li>Pagar a GRU correspondente (código 730);</li>
              <li>Baixar o documento Declaração de Veracidade – DV e assiná-lo digitalmente;</li>
              <li>Realizar a transformação da documentação técnica (código-fonte) em resumo digital hash;</li>
              <li>Preencher o formulário eletrônico e-Software.</li>
            </ul>
            <p>Realizamos aqui na Plure todo o trabalho administrativo para você, com exceção da documentação técnica
              (código-fonte).</p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq24" role="button" aria-expanded="false" aria-controls="faq24">
            <b>Quem deve assinar o formulário eletrônico de depósito?</b>
          </a>
          <div id="faq24" class="collapse p-4">
            <p>
              Para protocolar o pedido de registro, é necessária a assinatura digital do titular do direito e da Plure como seus procuradores (quando for o caso). Para estes casos é necessário que as assinaturas sejam digitais no padrão da ICP-Brasil, uma na procuração, do titular do direito, e outra no documento DV, do procurador.
            </p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq25" role="button" aria-expanded="false" aria-controls="faq25">
            <b>O que é o resumo digital hash?</b>
          </a>
          <div id="faq25" class="collapse p-4">
            <p>
              O resumo hash é um texto de comprimento fixo contendo letras e números, que deve ser copiado e colado no campo correspondente do formulário eletrônico, juntamente com a identificação do algoritmo empregado para a sua geração conforme especificidades nas normativas do INPI. Este resumo fará parte do Certificado de
              Registro.
            </p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq26" role="button" aria-expanded="false" aria-controls="faq26">
            <b>Como faço para gerar o resumo hash?</b>
          </a>
          <div id="faq26" class="collapse p-4">
            <p>
              A geração do resumo digital hash a partir da documentação técnica (código-fonte) pode se dar tanto sobre um único arquivo de entrada (PDF, DOC, TXT, etc), como sobre uma coletânea de arquivos compactados em um único arquivo ZIP ou RAR. Em qualquer um dos casos, é de vital importância que este mesmo arquivo utilizado para gerar o hash seja mantido íntegro pelo interessado, preferencialmente em mais de um meio digital de armazenamento (backup).
            </p>
            <p>
              Este trabalho é realizado por nós aqui na Plure, você pode ficar tranquilo. Para sua segurança, uma cópia íntegra do seu arquivo acima especificado pode ser mantida em nossa plataforma, caso seja solicitado em demandas judiciais ou pelo próprio INPI.
            </p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq27" role="button" aria-expanded="false" aria-controls="faq27">
            <b>Qual é o tempo de tramitação do pedido?</b>
          </a>
          <div id="faq27" class="collapse p-4">
            <p>
              Protocolado o pedido de registro e consolidado o pagamento da GRU, o prazo para a expedição e disponibilização do certificado no portal do INPI é de até 10 dias corridos da data do depósito.
            </p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq28" role="button" aria-expanded="false" aria-controls="faq28">
            <b>Meu pedido ainda pode cair em exigência ou sofrer recurso?</b>
          </a>
          <div id="faq28" class="collapse p-4">
            <p>
              Não, pois não existem mais as figuras da exigência e do recurso. Após protocolado o pedido de registro, apenas duas situações são possíveis: registro concedido ou petição não conhecida.
            </p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq29" role="button" aria-expanded="false" aria-controls="faq29">
            <b>De quem é a responsabilidade da guarda da documentação técnica sigilosa?</b>
          </a>
          <div id="faq29" class="collapse p-4">
            <p>
              A guarda da documentação técnica (código-fonte) que compõe o pedido de registro não é mais de responsabilidade do INPI, mais sim do próprio interessado, isto é, o Titular do Direito. Ele será o responsável por garantir a sua perfeita integridade ao longo do tempo que for necessário.
            </p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq30" role="button" aria-expanded="false" aria-controls="faq30">
            <b>Ainda preciso pagar o valor do decênio?</b>
          </a>
          <div id="faq30" class="collapse p-4">
            <p>
              Não. O registro permanece válido ao longo de todo o prazo de vigência, isto é, 50 anos, contados a partir de 1º de janeiro do ano subsequente ao da sua publicação ou, na ausência desta, da sua criação, sem a necessidade do pagamento de decênio.
            </p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq31" role="button" aria-expanded="false" aria-controls="faq31">
            <b>O registro do programa de computador só tem validade no território
              nacional?</b>
            </a>
          <div id="faq31" class="collapse p-4">
            <p>
              Não. O registro de programa de computador não é territorial, isto é, sua abrangência é internacional, compreendendo os 175 países signatários da Convenção de Berna (1886).
            </p>
          </div>
          <hr>

          <h4><b>TRANSFERÊNCIA DE TECNOLOGIA</b></h4>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq32" role="button" aria-expanded="false" aria-controls="faq32">
            <b>Por que fazer contratos envolvendo propriedade industrial e tecnologia?</b>
          </a>
          <div id="faq32" class="collapse p-4">
            <p>
              Além de proteger os seus ativos, é possível que você queira licenciá-los para uma empresa, ou então obter uma licença para impulsionar seu negócio. Pode ainda preferir adquirir conhecimentos não amparados por direitos de propriedade industrial. Para que estas transações sejam seguras e permitam a realização do
              pagamento ao exterior, existem contratos que devem ser averbados e/ou registrados no INPI.
            </p>
            <p>
              Os tipos de contratos existentes são as cessões e os licenciamentos de patentes, desenhos industriais e marcas, além de assistência técnica e do fornecimento de tecnologia (know-how). Também são registradas as franquias empresariais, garantindo assim um acordo seguro e conferindo validade perante terceiros.
            </p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq33" role="button" aria-expanded="false" aria-controls="faq33">
            <b>Quais são os tipos de contratos que o INPI averba ou registra?</b>
          </a>
          <div id="faq33" class="collapse p-4">
            <p>Os contratos averbados ou registrados no INPI são: </p>
            <ul>
              <li><b>Licença para exploração de patente e desenho industrial</b> - contratos para autorizar terceiros a
                explorarem o objeto da patente ou do desenho industrial.</li>
              <li><b>Licença para uso de marca</b> - contrato que se destina a autorizar o uso efetivo, por terceiros,
                de marca regularmente depositada ou registrada no país.</li>
              <li><b>Fornecimento de tecnologia</b> - contrato que estipula as condições para a aquisição de
                conhecimentos e de técnicas não amparados por direitos de propriedade industrial (know how).</li>
              <li><b>Serviços de assistência técnica e científica</b> - contratos que estipulam as condições de obtenção
                de técnicas, métodos de planejamento e programação, bem como pesquisas, estudos e projetos destinados à
                execução ou prestação de serviços especializados. Nestes contratos será exigida a explicitação do custo
                de homem/hora detalhado por tipo de técnico, o prazo previsto para a realização do serviço ou a
                evidenciação de que o mesmo já fora realizado e o valor total da prestação do serviço, ainda que
                estimado.</li>
              <li><b>Franquia</b> - envolve serviços, transferência de tecnologia e transmissão de padrões, além de uso
                de marca ou patente. O franqueado deverá comprovar conhecimento da Circular de Oferta, que é um
                documento produzido pelo franqueador, conforme artigo 3º da Lei de Franquia (nº 8955/1994).</li>
              <li><b>Cessão de patente, desenho industrial e marca</b> - envolve a transferência de titularidade e é
                passível de averbação quando envolver remuneração e o titular do direito for domiciliado no exterior.
              </li>
            </ul>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq34" role="button" aria-expanded="false" aria-controls="faq34">
            <b>Quais são os efeitos da averbação?</b>
          </a>
          <div id="faq34" class="collapse p-4">
            <p>
              Legitimar remessas de divisas ao exterior, como pagamento pela tecnologia negociada; Permitir dedutibilidade fiscal, quando for o caso, para a empresa receptora da tecnologia das importâncias pagas a título de royalties e assistência técnica; Produzir efeitos perante terceiros.
            </p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq35" role="button" aria-expanded="false" aria-controls="faq35">
            <b>Como é definido o valor contratual?</b>
          </a>
          <div id="faq35" class="collapse p-4">
            <p>
              Nos contratos de licenciamento de patente, desenho industrial e marca os tipos de pagamento usualmente negociados são: percentual incidente sobre o preço líquido de venda e valor fixo por unidade vendida; nos de fornecimento de tecnologia a remuneração é estabelecida de acordo com a negociação contratual, devendo
              ser levado em conta os níveis de preços praticados nacional e internacionalmente em contratações similares.
            </p>
            <p>
              Já nos contratos de serviços de assistência técnica será exigida a explicitação do custo em função da taxa dia/hora detalhado por especialização do técnico e o valor total do serviço, ainda que estimado. Nos contratos de franquia a remuneração usualmente estipulada é: taxa de franquia, taxa de royalties (percentual sobre o preço líquido de venda ou do faturamento); taxa de publicidade, além de outras taxas.
            </p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq36" role="button" aria-expanded="false" aria-controls="faq36">
            <b>É obrigatório o registro do contrato de franquia no INPI?</b>
          </a>
          <div id="faq36" class="collapse p-4">
            <p>
              O registro é necessário para os contratos cujos franqueadores são domiciliados no exterior e estabelecem pagamentos, sendo facultativo para contratos internos, garantindo assim um acordo seguro e conferindo
              validade perante terceiros.
            </p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq37" role="button" aria-expanded="false" aria-controls="faq37">
            <b>Qual lei rege o sistema de franquia e o que é Circular de Oferta?</b>
          </a>
          <div id="faq37" class="collapse p-4">
            <p>
              A Lei nº 13.966, de 26 de dezembro de 2019, rege o sistema de franquia.
            </p>
            <p>
              A Circular de Ofertas constitui uma das exigências da Lei Brasileira, 13.966 (artigo 2º), exige que o franqueador entregue ao franqueado dez (10) dias antes da assinatura do contrato definitivo para análise. Neste documento deverá constar o histórico resumido da empresa, balanços e demonstrações financeiras da empresa, perfil do "franqueado ideal", situação perante o Instituto Nacional da Propriedade Industrial - INPI das marcas ou patentes e outros itens.
            </p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq38" role="button" aria-expanded="false" aria-controls="faq38">
            <b>A marca é importante no sistema de franquia?</b>
          </a>
          <div id="faq38" class="collapse p-4">
            <p>
              Sim. A marca é o maior patrimônio do franqueador.
            </p>
            <p>
              No sistema de franquia, assim como no sistema unitário, a marca é a propaganda do negócio. Ela é o elo da rede de franquia. É bom lembrar que uma falha do franqueado afetará toda a rede, assim como a marca.
            </p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq39" role="button" aria-expanded="false" aria-controls="faq39">
            <b>Quem pode requerer averbação?</b>
          </a>
          <div id="faq39" class="collapse p-4">
            <p>Qualquer das partes contratantes.</p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq40" role="button" aria-expanded="false" aria-controls="faq40">
            <b>Qual é a documentação a ser apresentada em um pedido de averbação?</b>
          </a>
          <div id="faq40" class="collapse p-4">
            <p>
              Para solicitar o serviço, o requisitante deve providenciar os seguintes documentos: Formulário de requerimento de averbação (devidamente preenchido); Guia de Recolhimento da União (GRU) - paga; Procuração; Carta explicativa; Contrato e aditivo ou fatura; Traduções (de toda documentação em língua estrangeira); e Ficha de cadastro da(s) Empresa(s) Cessionária(s) Brasileira(s).
            </p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq41" role="button" aria-expanded="false" aria-controls="faq41">
            <b>Qual o tempo de tramitação para decisão do INPI?</b>
          </a>
          <div id="faq41" class="collapse p-4">
            <p>
              30 dias, a contar da data de publicação da petição ou pedido de averbação na RPI, conforme Artigo 211, parágrafo único, Lei nº 9.279 de 14/05/96.
            </p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq42" role="button" aria-expanded="false" aria-controls="faq42">
            <b>Quais são os serviços que não são caracterizados como transferência de
              tecnologia?</b>
          </a>
          <div id="faq42" class="collapse p-4">
            <p>
              Por não caracterizarem transferência de tecnologia, nos termos do Art. 211 da Lei nº 9.279/96 alguns serviços técnicos especializados são dispensados de averbação pelo INPI. Segue lista não exaustiva desses serviços:
            </p>
            <p>
              Agenciamento de compras, incluindo serviços de logística (suporte ao embarque, tarefas administrativas relacionadas à liberação alfandegária, etc.); Serviços realizados no exterior sem a presença de técnicos da empresa brasileira, que não gerem quaisquer documentos e/ou relatórios, como por exemplo, beneficiamento de produtos; Homologação e certificação de qualidade de produtos; Consultoria na área
              financeira; Consultoria na área comercial; Consultoria na área jurídica; Consultoria visando participação em licitação; Serviços de marketing; Consultoria remota, sem a geração de documentos; Serviços de suporte, manutenção, instalação, implementação, integração, implantação, customização, adaptação, certificação,
              migração, configuração, parametrização, tradução, ou localização de programa de computador (software); Serviços de treinamento para usuário final ou outro treinamento de programa de computador (software); Licença de uso de programa de computador (software); Distribuição de programa de computador (software);
              Aquisição de cópia única de programa de computador (software).
            </p>
          </div>

          <a class="faqBtn" data-bs-toggle="collapse" href="#faq43" role="button" aria-expanded="false" aria-controls="faq43">
            <b>Como fazer para realizar os pagamentos ao exterior decorrentes das aprovações dos
              contratos de tecnologia pelo INPI?</b>
          </a>
          <div id="faq43" class="collapse p-4">
            <p>
              Para remeter moeda estrangeira como pagamento que envolva direitos de propriedade industrial, fornecimento de tecnologia, prestação de serviços de assistência técnica e franquia é necessário que a empresa formalize um contrato e o submeta a averbação do INPI.
            </p>
            <p>
              Após a emissão do respectivo Certificado de Averbação a empresa poderá, de acordo com a Resolução BACEN nº 3.844/2010 e Regulamento anexo III, proceder ao Registro Declatório Eletrônico - Registro de Operação Financeira (RDE/ROF) por transferência de tecnologia, acessando o SISBACEN, por intermédio de uma
              instituição financeira ou por meios próprios.
            </p>
          </div>

        </div>
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

  <script src="<?php  echo get_theme_root_uri(); ?>/Plure-Site/typed.min.js"></script>
  <script src="<?php  echo get_theme_root_uri(); ?>/Plure-Site/global.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
</body>

</html>