renderCards = () => {
	let cards = document.querySelector(`.cards`);

	let items = [
		`Кольца`,
		`Серьги`,
		`Женские Обручальные кольца`,
		`Мужские Обручальные кольца`,
	];

	for (let i = 0; i < items.length; i++) {
		cards.innerHTML += `
		<!-- card -->
		<a class="card">
			<div class="image">
				<img
					src="./assets/index/categories/${i + 1}.png"
					alt="rings"
				/>
			</div>
			<p class="bold">${items[i]}</p>
		</a>  
		`;
	}
};

renderColls = () => {
	let colls = document.querySelector(`.collections`);

	let items = [
		{
			name: `Украшения YeonHwa`,
			description: `Пришло время обновить свою шкатулку с украшениями, добавив в нее самые актуальные вещи.`,
		},
		{
			name: `Коллекция HwaYang`,
			description: `Откройте для себя изысканные ювелирные украшения, созданные для того, чтобы передать особый стиль и историю.`,
		},
	];

	for (let i = 0; i < 2; i++) {
		console.log(11);
		colls.innerHTML += `
    <section class="coll">
      <div class="image">
        <img
          src="./assets/index/collections/${i + 1}.png"
          alt="${i + 1}" />
      </div>
      <p class="h2">${items[i].name}</p>
      <p>
        ${items[i].description}
      </p>
      <a href="#" class="btn-secondary">Смотреть</a>
    </section>
  `;
	}
};

renderPhotos = () => {
	let images = document.querySelector(`.images`);

	for (let i = 0; i < 5; i++) {
		images.innerHTML += `
      <img src="./assets/index/inspo/${i + 1}.png" />
    `;
	}
};

renderCards();
renderColls();
renderPhotos();
