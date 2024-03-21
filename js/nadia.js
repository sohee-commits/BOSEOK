function renderReviews() {
	let cards = document.querySelector(`.cards`);

	// define all the reviews
	let reviews = [
		{
			name: `София`,
			date: `3 ноября 2023`,
			heading: `Потрясающе`,
			content: `Кольцо было прекрасным, спасибо представителю, который помог нам выбрать кольцо, мне очень понравилось кольцо, ношу его каждый день, но размер камня, чистота и как он сверкает на солнце - это потрясающе.`,
		},
		{
			name: `Невеста Артёма`,
			date: `22 октября 2023`,
			heading: `Великолепно`,
			content: `Отличное обслуживание клиентов`,
		},
		{
			name: `Виктория`,
			date: `15 октября 2023`,
			heading: `Кольцо прекрасное`,
			content: `Я полюбила это кольцо с того момента, как впервые увидела его, и хочу сказать, что оно такое же красивое, как я и представляла. Нет, честно говоря, даже красивее.`,
		},
	];

	// render them
	for (let i = 0; i < reviews.length; i++) {
		cards.innerHTML += `
  <section class="card">
    <div class="text">
      <p class="bold">${reviews[i].name}</p>
      <p>${reviews[i].date}</p>
    </div>
    <p>★★★★★</p>
    <div class="review">
      <div class="text">
        <p class="bold">${reviews[i].heading}</p>
        <p>${reviews[i].content}</p>
      </div>
      ${i === 0 ? `<img src="./assets/item/3.jpg" alt="preview" />` : ``}      
    </div>
  </section>
  `;
	}
}

renderReviews();
