const cards = [
  {
    title: "Renato",
    description: "lorem ipsum dolor sit amet, consectetur adipiscing elit",
  },
  {
    title: "Helder",
    description: "lorem ipsum dolor sit amet, consectetur adipiscing elit",
  },
  {
    title: "Marcio",
    description: "lorem ipsum dolor sit amet, consectetur adipiscing elit",
  },
  {
    title: "Marcio",
    description: "lorem ipsum dolor sit amet, consectetur adipiscing elit",
  },
];
const card = document.getElementById("cards");
cards.map((el) => {
  card.innerHTML += `
		<div class="card">
			<h3>${el.title}</h3>
			<p>${el.description}</p>
		</div>
	`;
});


//============================Processo de escrita dos títulos do site============================//

const top1 = document.getElementById("top1");
const top2 = document.getElementById("top2");
const top3 = document.getElementById("top3");
const bottom1 = document.getElementById("bottom1");
const bottom2 = document.getElementById("bottom2");
const bottom3 = document.getElementById("bottom3");
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
    } else if (typed == 1) {
      top1.style.display = "none";
      bottom1.style.display = "none";
      top2.style.display = "block";
      bottom2.style.display = "block";
      top3.style.display = "none";
      bottom3.style.display = "none";
    } else {
      top1.style.display = "none";
      bottom1.style.display = "none";
      top2.style.display = "none";
      bottom2.style.display = "none";
      top3.style.display = "block";
      bottom3.style.display = "block";
    }
  },
});
