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
	let jsonData = JSON.stringify(cart);

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

console.log(window._applenosebook ? `user logged in` : `guest`);

let cart = [];
let itemID = 1;
let jewerly = {
	name: itemName,
	price: itemPrice,
};

if (buy) {
	buy.addEventListener(`click`, async () => {
		// товар добавится в корзину только если юзер вошел
		if (window._applenosebook !== undefined) {
			buy.insertAdjacentElement('afterend', alertAdded);

			// получаем данные user[cart]
			let response = await fetch('get-data.php');
			let currentCart = await response.text();

			// чистим полученные данные
			currentCart = currentCart.replace(
				'<script>window._applenosebook = 1</script>',
				''
			);
			currentCart = currentCart.replace(/<script>.*?<\/script>/s, '');
			console.log(currentCart);
			console.log(typeof currentCart);

			if (currentCart !== '') {
				cart = JSON.parse(currentCart);
			}

			console.log('current cart >> ', cart);

			cart.push(jewerly);

			// отправляем массив в корзину
			// (т.е. в cart.php полученный массив отправится в бд)
			sendFileAndStoreResponse();

			// смотрим что получилось
			console.log(cart);
		} else {
			// а если нет, то ему предложат войти
			buy.insertAdjacentElement('afterend', alertNotAdded);
		}
	});
}
