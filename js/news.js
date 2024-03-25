const news = [
	{
		title: 'Добавлен раздел “Кольца”',
		date: '15/03/24',
		src: 'jewerly/Nadia',
	},
	{
		title: 'Добавлен раздел “Серьги”',
		date: '16/03/24',
		src: 'jewerly/Lunette',
	},
	{
		title: 'Добавлен раздел “Ожерелья”',
		date: '17/03/24',
		src: 'jewerly/Yaretzi',
	},
	{
		title: '“BOSEOK” официально открыт',
		date: '25/03/24',
		src: 'index/where/where',
	},
];

let cards = document.querySelector(`.cards`);

// all the jewerly
let renderNews = () => {
	for (let i = 0; i <= news.length - 1; i++) {
		cards.innerHTML += `
    <!-- card -->
    <article class="card">
      <div class="image">
        <img src="./assets/${news[i].src}.jpg" alt="preview" />
      </div>
      <p class="bold">${news[i].title}</p>
      <p>${news[i].date}</p>
    </article>
    `;
	}
};

renderNews();
