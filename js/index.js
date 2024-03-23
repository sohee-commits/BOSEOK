renderCards = () => {
	let cards = document.querySelector(`.cards`);

	let items = [
		{ title: `Кольца`, href: `./rings.php` },
		{ title: `Серьги`, href: `./earrings.php` },
		{ title: `Ювелирные изделия`, href: `./jewerly.php` },
		{ title: `Коллекции`, href: `./index.php#collections` },
	];

	for (let i = 0; i < items.length; i++) {
		cards.innerHTML += `
		<!-- card -->
		<a href="${items[i].href}" class="card">
			<div class="image">
				<img
					src="./assets/index/categories/${i + 1}.png"
					alt="rings"
				/>
			</div>
			<p class="bold">${items[i].title}</p>
		</a>
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
renderPhotos();
