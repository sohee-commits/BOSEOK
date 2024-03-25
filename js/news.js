const jewerly = [
	{
		title: 'Добавлен раздел “Кольца”',
		date: '15/03/24',
	},
	{
		title: 'Добавлен раздел “Серьги”',
		date: '16/03/24',
	},
	{
		title: 'Добавлен раздел “Ожерелья”',
		date: '17/03/24',
	},
	{
		title: 'Магазин открыт! Адрес: г. Пермь, ул. Пушкина, д. 107 а ',
		date: '25/03/24',
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
        <img src="./assets/news/${news[i].src}.jpg" alt="preview" />
      </div>
      <p class="bold">${news[i].title}</p>
      <p>$ ${news[i].date}</p>
    </article>
    `;
	}
};
