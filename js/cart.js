// кнопка купить
let buy = document.querySelector(`#buy-jewerly`);
// название элемента
let itemName = document.querySelector(`#item-name`);
if (itemName) itemName = itemName.innerHTML;
// цена элемента
let itemPrice = document.querySelector(`#item-price`);
if (itemPrice) itemPrice = itemPrice.innerHTML;

// уведомление о добавлении к корзину
let alertAdded = document.createElement(`p`);
let alertNotAdded = document.createElement(`a`);
alertNotAdded.href = './login.php';

alertAdded.innerHTML = `Товар добавлен в корзину.`;
alertNotAdded.innerHTML = `Зарегистрируйтесь или войдите, чтобы добавить украшение в корзину.`;

// отправление и получение информацией об элементе
async function sendFileAndStoreResponse() {
	// преобразование элемента в json
	let jsonData = JSON.stringify(cartJewerly);

	const response = await fetch('cart.php', {
		method: 'POST',
		headers: {
			'Content-Type': 'application/json',
		},
		body: jsonData,
	});
	const data = await response.text(); // PHP returns JSON

	console.log(data);
	return data;
}

console.log(window._applenosebook);

if (buy) {
	buy.addEventListener(`click`, async () => {
		// элемент
		cartJewerly = {
			name: itemName,
			price: itemPrice,
		};

		if (window._applenosebook !== undefined) {
			// уведомить что элемент в корзине
			buy.insertAdjacentElement('afterend', alertAdded);
		} else {
			buy.insertAdjacentElement('afterend', alertNotAdded);
		}

		// вывод присвоенных данных в консоль
		console.log(cartJewerly);

		// отправка, обработа и получение данных cartJewerly
		sendFileAndStoreResponse();

		return cartJewerly;
	});
}
