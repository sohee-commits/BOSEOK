const jewerly = [
	// earrings
	{
		name: 'Lunette',
		price: '12 900',
		type: 'earrings',
		collection: `yeonhwa`,
	},
	{
		name: 'Versailles',
		price: '26 900',
		type: 'earrings',
		collection: ``,
	},
	{
		name: 'Marseille',
		price: '13 900',
		type: 'earrings',
		collection: `yeonhwa`,
	},
	{
		name: 'Flair',
		price: '9 900',
		type: 'earrings',
		collection: ``,
	},
	{
		name: 'Sienna',
		price: '17 500',
		type: 'earrings',
		collection: ``,
	},
	{
		name: 'Yvette',
		price: '16 900',
		type: 'earrings',
		collection: `yeonhwa`,
	},
	{
		name: 'Ballad',
		price: '9 900',
		type: 'earrings',
		collection: ``,
	},
	{
		name: 'Eternity',
		price: '11 900',
		type: 'earrings',
		collection: `yeonhwa`,
	},
	// rings
	{
		name: 'Petite Elodie',
		price: '11 900',
		type: 'rings',
		collection: ``,
	},
	{
		name: 'Demi',
		price: '17 900',
		type: 'rings',
		collection: ``,
	},
	{
		name: 'Petite',
		price: '13 500',
		type: 'rings',
		collection: ``,
	},
	{
		name: 'Petite Comfort Fit Solitaire',
		price: '7 500',
		type: 'rings',
		collection: ``,
	},
	{
		name: 'Camellia Milgrain',
		price: '16 500',
		type: 'rings',
		collection: ``,
	},
	{
		name: 'Nadia',
		price: '15 900',
		type: 'rings',
		collection: ``,
	},
	{
		name: 'Luxe Viviana',
		price: '20 500',
		type: 'rings',
		collection: ``,
	},
	{
		name: 'Aria Three',
		price: '12 900',
		type: 'rings',
		collection: ``,
	},
	// hwayang collection
	{
		name: 'Yaretzi',
		price: '13 500',
		type: 'necklace',
		collection: `hwayang`,
	},
	{
		name: 'Nadira',
		price: '17 900',
		type: 'necklace',
		collection: `hwayang`,
	},
	{
		name: 'Orinthia',
		price: '7 500',
		type: 'necklace',
		collection: `hwayang`,
	},
	{
		name: 'Alveena',
		price: '10 500',
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
      <p>₽ ${jewerly[i].price}</p>
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
      <p>₽ ${earrings[i].price}</p>
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
      <p>₽ ${rings[i].price}</p>
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
      <p>₽ ${hwayang[i].price}</p>
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
      <p>₽ ${yeonhwa[i].price}</p>
    </a>
    `;
	}
};
