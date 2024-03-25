renderPhotos = () => {
	let images = document.querySelector(`.images`);

	for (let i = 0; i < 5; i++) {
		images.innerHTML += `
      <img src="./assets/index/inspo/${i + 1}.png" />
    `;
	}
};

renderPhotos();
renderPhotos();
