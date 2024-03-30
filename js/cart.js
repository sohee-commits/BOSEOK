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
	id: itemID,
};

if (buy) {
	buy.addEventListener(`click`, async () => {
		// товар добавится в корзину только если юзер вошел
		if (window._applenosebook !== undefined) {
			buy.insertAdjacentElement('afterend', alertAdded);
			// данные по умолчанию
			itemID = 1;

			// получаем данные user[cart]
			let response = await fetch('get-data.php');
			let currentCart = await response.text();

			// чистим полученные данные
			if (
				currentCart === '<script>window._applenosebook = 1</script>' ||
				currentCart === '<script>window._applenosebook = 1</script>[]'
			) {
				currentCart = null;
			}
			console.log('current cart >> ', currentCart);

			// если пусто пушим в готовый пустой массив
			if (currentCart === null) {
				// и пушим туда полученное с id = 1
				cart.push(jewerly);
			} else {
				// иначе ищем уникальный id
				while (true) {
					// проверяем + 1 на случай, если все id по порядку заняты
					for (let i = 0; i < currentCart.length + 1; i++) {
						// если id уже существует
						if (currentCart[i].id === i) {
							// увеличиваем на 1
							i++;
						} else {
							// а если нет, то i уникален и присваивается item
							itemID = i;
							// закидываем уникальный id в готовый объект
							jewerly.id = itemID;
							// закидываем готовый объект в массив
							cart.push(jewerly);
						}
					}
				}
			}

			// отправляем массив в корзину \
			// в cart.php полученный массив отправится в бд
			sendFileAndStoreResponse();

			// смотрим что получилось
			console.log(cart);
		} else {
			// а если нет, то ему предложат войти
			buy.insertAdjacentElement('afterend', alertNotAdded);
		}
	});
}
