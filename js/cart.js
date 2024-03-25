let buy = document.querySelector(`#buy-jewerly`);
let itemName = document.querySelector(`#item-name`).innerHTML;
let itemPrice = document.querySelector(`#item-price`).innerHTML;

let addAlert = document.createElement(`p`);
addAlert.innerHTML = `Товар добавлен в корзину.`;

buy.addEventListener(`click`, () => {
	cartJewerly = {
		name: itemName,
		price: itemPrice,
	};

	buy.insertAdjacentElement('afterend', addAlert);

	console.log(cartJewerly);
});
