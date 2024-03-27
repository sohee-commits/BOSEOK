// кнопка купить
let buy = document.querySelector(`#buy-jewerly`);
// название элемента
let itemName = document.querySelector(`#item-name`).innerHTML;
// цена элемента
let itemPrice = document.querySelector(`#item-price`).innerHTML;

// уведомление о добавлении к корзину
let addAlert = document.createElement(`p`);
addAlert.innerHTML = `Товар добавлен в корзину.`;

// отправление и получение информациеи об элементе
async function sendFileAndStoreResponse() {
	// преобразование элемента в json
	let jsonData = JSON.stringify(cartJewerly);

	const response = await fetch('cart-data.php', {
		method: 'POST',
		headers: {
			'Content-Type': 'application/json',
		},
		body: jsonData,
	});
	const data = await response.text(); // PHP returns JSON

	// clean response
	return data;
}

if (buy) {
	buy.addEventListener(`click`, async () => {
		// элемент
		cartJewerly = {
			name: itemName,
			price: itemPrice,
		};

		// уведомить что элемент в корзине
		buy.insertAdjacentElement('afterend', addAlert);

		// вывод присвоенных данных в консоль
		console.log(cartJewerly);

		let responseText = await sendFileAndStoreResponse();
		console.log(responseText); // <script>window._applenosebook = 1</script>{"status":"success"}string(51) ""{\"name\":\"Alveena\",\"price\":\"u20bd 10 500\"}""
		console.log(typeof responseText); // string

		responseText = responseText.substring(73);
		console.log(responseText);

		let responseObject = JSON.parse(responseText);
		console.log(responseObject);
	});
}

// old method
// fetch(`cart-data.php`, {
// 	method: 'POST',
// 	headers: {
// 		'Content-Type': 'application/json',
// 	},
// 	body: jsonData,
// })
// 	.then((response) => response.text()) // php возвращает json
// 	.then((data) => console.log(data)) // вывод полученных данных в консоль
// 	.catch((error) => console.error('Error:', error));
