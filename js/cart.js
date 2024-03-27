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

// let displayItem = (responseJewerly, cartNode) => {
// 	responseJewerly = responseJewerly.substring(73);
// 	responseJewerly = responseJewerly.substring(1, responseJewerly.length - 2);
// 	let responseObject = JSON.parse(responseJewerly);
// 	console.log(responseObject);

// 	if (cartNode) {
// 		let cartItem = document.createElement('div');
// 		cartItem.innerHTML += `
// 		<a href="./item-${responseJewerly['name'].toLowerCase()}.php" class="item">
// 			<div class="image">
// 				<img src="./assets/jewerly/${responseJewerly['name']}.jpg" alt="preview" />
// 			</div>
// 			<div class="info">
// 				<div class="text">
// 					<p id="item-name" class="bold h2">${responseJewerly['name']}</p>
// 					<p class="h2" id="item-price"> ${responseJewerly['price']} </p>
// 				</div>
// 				<div>
// 					<span class="bold">Тип:</span>
// 					<span id="item-type">ТИП ДОБАВИТЬ</span>
// 				</div>
// 				<button>
// 					<img src="./assets/icons/delete.png" alt="delete" width="32" height="32" />
// 				</button>
// 			</div>
// 		</a>
// 		`;
// 	}

// 	console.log(typeof cartItem);
// 	cartNode.innerHTML += cartItem;
// };

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

		let responseJewerly = await sendFileAndStoreResponse();
		responseJewerly = responseJewerly.substring(73);
		responseJewerly = responseJewerly.substring(1, responseJewerly.length - 2);
		responseJewerly = JSON.parse(responseJewerly);

		return responseJewerly;
	});
}
