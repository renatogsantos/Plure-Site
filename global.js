const cards = [
  {
    icon: "ph-trademark-registered",
    title: "Registro de Marcas",
    description: "A marca identifica, individualiza determinado produto ou serviço, assegurando sua confiabilidade...",
  },
  {
    icon: "ph-trademark-registered",
    title: "Assessoria Jurídica",
    description: "A Plure Marcas e Patentes conta com profissionais especializados na área jurídica que atuam na...",
  },
  {
    icon: "ph-trademark-registered",
    title: "Depósito de Patentes",
    description: "Patente é um título temporário de propriedade, concedido pelo Estado, cujo objetivo é a proteção...",
  },
  {
    icon: "ph-trademark-registered",
    title: "Identidade Visual",
    description: "A Identidade Visual é o conjunto de símbolos e cores que representam a marca de uma empresa...",
  },
];
const card = document.getElementById("cards");
cards.map((el) => {
  card.innerHTML += `
		<div class="col-12 col-lg-3 g-2 d-flex align-items-stretch">
			<div class="cardPlure">
        <i class="icon ${el.icon}"></i>
        <h3>${el.title}</h3>
			  <p>${el.description}</p>
      </div>
		</div>
	`;
});


//============================Processo de escrita dos títulos do site============================//

const top1 = document.getElementById("top1");
const top2 = document.getElementById("top2");
const top3 = document.getElementById("top3");
const top4 = document.getElementById("top4");
const bottom1 = document.getElementById("bottom1");
const bottom2 = document.getElementById("bottom2");
const bottom3 = document.getElementById("bottom3");
const bottom4 = document.getElementById("bottom4");
var type1 = new Typed("#typed", {
  stringsElement: "#typed-strings",
  typeSpeed: 100,
  backSpeed: 50,
  loop: Infinity,
  preStringTyped: (typed) => {
    if (typed == 0) {
      top1.style.display = "block";
      bottom1.style.display = "block";
      top2.style.display = "none";
      bottom2.style.display = "none";
      top3.style.display = "none";
      bottom3.style.display = "none";
      top4.style.display = "none";
      bottom4.style.display = "none";
    } else if (typed == 1) {
      top1.style.display = "none";
      bottom1.style.display = "none";
      top2.style.display = "block";
      bottom2.style.display = "block";
      top3.style.display = "none";
      bottom3.style.display = "none";
      top4.style.display = "none";
      bottom4.style.display = "none";
    } else if (typed == 2) {
      top1.style.display = "none";
      bottom1.style.display = "none";
      top2.style.display = "none";
      bottom2.style.display = "none";
      top3.style.display = "block";
      bottom3.style.display = "block";
      top4.style.display = "none";
      bottom4.style.display = "none";
    } else {
      top1.style.display = "none";
      bottom1.style.display = "none";
      top2.style.display = "none";
      bottom2.style.display = "none";
      top3.style.display = "none";
      bottom3.style.display = "none";
      top4.style.display = "block";
      bottom4.style.display = "block";
    }
  },
});

//============================Processo de escrita dos títulos do site============================//
$(window).scroll(function () {
  if ($(document).scrollTop() > 150) {
    $("nav").addClass("bg-navbar-scroll");
  } else {
    $("nav").removeClass("bg-navbar-scroll");
  }
});