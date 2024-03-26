const news = [
	{
		title: '“BOSEOK” официально открыт',
		date: '01/03/24',
		src: 'index/where/where',
		href: '#',
	},
	{
		title: 'Добавлен раздел “Кольца”',
		date: '15/03/24',
		src: 'jewerly/Nadia',
		href: './new-rings-added.php',
	},
	{
		title: 'Добавлен раздел “Серьги”',
		date: '16/03/24',
		src: 'jewerly/Lunette',
		href: '#',
	},
	{
		title: 'Добавлен раздел “Ожерелья”',
		date: '17/03/24',
		src: 'jewerly/Yaretzi',
		href: '#',
	},
	{
		title: 'Появление веб-сайта “BOSEOK”',
		date: '29/03/24',
		src: 'index/where/where-2',
		href: '#',
	},
];

let cards = document.querySelector(`.cards`);

// all the jewerly
let renderNews = () => {
	for (let i = 0; i <= news.length - 1; i++) {
		cards.innerHTML += `
    <!-- card -->
    <a href="${news[i].href}" class="card">
      <div class="image">
        <img src="./assets/${news[i].src}.jpg" alt="preview" />
      </div>
      <p class="bold">${news[i].title}</p>
      <p>${news[i].date}</p>
    </a>
    `;
	}
};

renderNews();
