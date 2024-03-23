const jewerly = [
	// earrings
	{
		name: 'Lunette',
		price: '1,290',
		type: 'earrings',
		collection: `yeonhwa`,
	},
	{
		name: 'Versailles',
		price: '2,690',
		type: 'earrings',
		collection: ``,
	},
	{
		name: 'Marseille',
		price: '1,390',
		type: 'earrings',
		collection: `yeonhwa`,
	},
	{
		name: 'Flair',
		price: '990',
		type: 'earrings',
		collection: ``,
	},
	{
		name: 'Sienna',
		price: '1,750',
		type: 'earrings',
		collection: ``,
	},
	{
		name: 'Yvette',
		price: '1,690',
		type: 'earrings',
		collection: `yeonhwa`,
	},
	{
		name: 'Ballad',
		price: '990',
		type: 'earrings',
		collection: ``,
	},
	{
		name: 'Eternity',
		price: '1,190',
		type: 'earrings',
		collection: `yeonhwa`,
	},
	// rings
	{
		name: 'Petite Elodie',
		price: '1,190',
		type: 'rings',
		collection: ``,
	},
	{
		name: 'Demi',
		price: '1,790',
		type: 'rings',
		collection: ``,
	},
	{
		name: 'Petite',
		price: '1,350',
		type: 'rings',
		collection: ``,
	},
	{
		name: 'Petite Comfort Fit Solitaire',
		price: '750',
		type: 'rings',
		collection: ``,
	},
	{
		name: 'Camellia Milgrain',
		price: '1,650',
		type: 'rings',
		collection: ``,
	},
	{
		name: 'Nadia',
		price: '1,590',
		type: 'rings',
		collection: ``,
	},
	{
		name: 'Luxe Viviana',
		price: '2,050',
		type: 'rings',
		collection: ``,
	},
	{
		name: 'Aria Three',
		price: '1,290',
		type: 'rings',
		collection: ``,
	},
	// hwayang collection
	{
		name: 'Yaretzi',
		price: '1,350',
		type: 'necklace',
		collection: `hwayang`,
	},
	{
		name: 'Nadira',
		price: '1,790',
		type: 'necklace',
		collection: `hwayang`,
	},
	{
		name: 'Orinthia',
		price: '750',
		type: 'necklace',
		collection: `hwayang`,
	},
	{
		name: 'Alveena',
		price: '1,050',
		type: 'necklace',
		collection: `hwayang`,
	},
];

let cards = document.querySelector(`.cards`);

// all the jewerly
let renderJewerly = () => {
	for (let i = 0; i <= jewerly.length - 1; i++) {
		cards.innerHTML += `
    <!-- card -->
    <a href="./item-${jewerly[i].name.toLowerCase()}.php" class="card">
      <div class="image">
        <img src="./assets/jewerly/${jewerly[i].name}.jpg" alt="preview" />
      </div>
      <p class="bold">${jewerly[i].name}</p>
      <p>$ ${jewerly[i].price}</p>
    </a>
    `;
	}
};

// earrings
let earrings = jewerly.filter((item) => item.type === 'earrings');

let renderEarrings = () => {
	for (let i = 0; i <= earrings.length - 1; i++) {
		cards.innerHTML += `
    <!-- card -->
    <a href="./item-${earrings[i].name.toLowerCase()}.php" class="card">
      <div class="image">
        <img src="./assets/jewerly/${earrings[i].name}.jpg" alt="preview" />
      </div>
      <p class="bold">${earrings[i].name}</p>
      <p>$ ${earrings[i].price}</p>
    </a>
    `;
	}
};

// rings
let rings = jewerly.filter((item) => item.type === 'rings');

let renderRings = () => {
	for (let i = 0; i <= rings.length - 1; i++) {
		cards.innerHTML += `
    <!-- card -->
    <a href="./item-${rings[i].name.toLowerCase()}.php" class="card">
      <div class="image">
        <img src="./assets/jewerly/${rings[i].name}.jpg" alt="preview" />
      </div>
      <p class="bold">${rings[i].name}</p>
      <p>$ ${rings[i].price}</p>
    </a>
    `;
	}
};

// hwayang
let hwayang = jewerly.filter((item) => item.collection === 'hwayang');

let renderHwayang = () => {
	for (let i = 0; i <= hwayang.length - 1; i++) {
		cards.innerHTML += `
    <!-- card -->
    <a href="./item-${hwayang[i].name.toLowerCase()}.php" class="card">
      <div class="image">
        <img src="./assets/jewerly/${hwayang[i].name}.jpg" alt="preview" />
      </div>
      <p class="bold">${hwayang[i].name}</p>
      <p>$ ${hwayang[i].price}</p>
    </a>
    `;
	}
};

// yeonhwa
let yeonhwa = jewerly.filter((item) => item.collection === 'yeonhwa');

let renderYeonhwa = () => {
	for (let i = 0; i <= yeonhwa.length - 1; i++) {
		cards.innerHTML += `
    <!-- card -->
    <a href="./item-${yeonhwa[i].name.toLowerCase()}.php" class="card">
      <div class="image">
        <img src="./assets/jewerly/${yeonhwa[i].name}.jpg" alt="preview" />
      </div>
      <p class="bold">${yeonhwa[i].name}</p>
      <p>$ ${yeonhwa[i].price}</p>
    </a>
    `;
	}
};
