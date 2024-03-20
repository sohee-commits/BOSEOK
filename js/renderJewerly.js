const jewerly = [
	// earrings
	{ name: 'Lunette', price: '1,290', metal: 'silver', type: 'earrings' },
	{ name: 'Versailles', price: '2,690', metal: 'silver', type: 'earrings' },
	{ name: 'Marseille', price: '1,390', metal: 'silver', type: 'earrings' },
	{ name: 'Flair', price: '990', metal: 'silver', type: 'earrings' },
	{ name: 'Sienna', price: '1,750', metal: 'silver', type: 'earrings' },
	{ name: 'Yvette', price: '1,690', metal: 'silver', type: 'earrings' },
	{ name: 'Ballad', price: '990', metal: 'silver', type: 'earrings' },
	{ name: 'Eternity', price: '1,190', metal: 'silver', type: 'earrings' },
	// rings
	{
		name: 'Petite Elodie Solitaire',
		price: '1,190',
		metal: 'silver',
		type: 'rings',
	},
	{ name: 'Demi', price: '1,190', metal: 'silver', type: 'rings' },
	{ name: 'Petite', price: '1,190', metal: 'silver', type: 'rings' },
	{
		name: 'Petite Comfort Fit Solitaire',
		price: '1,190',
		metal: 'silver',
		type: 'rings',
	},
	{
		name: 'Camellia Milgrain',
		price: '1,190',
		metal: 'silver',
		type: 'rings',
	},
	{ name: 'Nadia', price: '1,190', metal: 'silver', type: 'rings' },
	{ name: 'Luxe Viviana', price: '1,190', metal: 'silver', type: 'rings' },
	{ name: 'Aria Three', price: '1,190', metal: 'silver', type: 'rings' },
	// yeonhwa
	// hwayang
];

let cards = document.querySelector(`.cards`);

// all the jewerly
let renderJewerly = () => {
	for (let i = 0; i <= earrings.length - 1; i++) {
		cards.innerHTML += `
    <!-- card -->
    <a href="" class="card">
      <div class="image">
        <img src="./assets/jewerly/${i}.png" alt="preview" />
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
    <a href="" class="card">
      <div class="image">
        <img src="./assets/earrings/${i}.png" alt="preview" />
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
    <a href="" class="card">
      <div class="image">
        <img src="./assets/rings/${i}.png" alt="preview" />
      </div>
      <p class="bold">${rings[i].name}</p>
      <p>$ ${rings[i].price}</p>
    </a>
    `;
	}
};
