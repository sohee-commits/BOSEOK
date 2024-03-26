// кнопка купить
let buy = document.querySelector(`#buy-jewerly`);
// название элемента
let itemName = document.querySelector(`#item-name`).innerHTML;
// цена элемента
let itemPrice = document.querySelector(`#item-price`).innerHTML;

// уведомление о добавлении к корзину
let addAlert = document.createElement(`p`);
addAlert.innerHTML = `Товар добавлен в корзину.`;

buy.addEventListener(`click`, () => {
	// элемент
	cartJewerly = {
		name: itemName,
		price: itemPrice,
	};

	// уведомить что элемент в корзине
	buy.insertAdjacentElement('afterend', addAlert);

	// вывод присвоенных данных в консоль
	console.log(cartJewerly);

	// преобразование элемента в json
	let jsonData = JSON.stringify(cartJewerly);

	// отправление файла с информацией об элементе в cart.php
	fetch(`cart.php`, {
		method: 'POST',
		headers: {
			'Content-Type': 'application/json',
		},
		body: jsonData,
	})
		.then((response) => response.json()) // php возвращает json
		.then((data) => console.log(data)) // вывод полученных данных в консоль
		.catch((error) => console.error('Error:', error));

	// получение данных из php файла
	fetch('cart.php')
		.then((response) => response.json())
		.then((data) => {
			// вместо этого вывести полученные данные на страницу корзины
			console.log(data);
		})
		.catch((error) => console.error('Ошибка:', error));
});
