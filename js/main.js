let mainNode = document.querySelector(`main`);

let header = document.createElement(`header`);
header.innerHTML += `
  <section class="head">
    <section class="store-info">
      <div class="address inner">
        <img src="./assets/icons/location.png" alt="icon" />
        <p class="small">г. Пермь, ул. Пушкина, д. 107 а</p>
      </div>
      <div class="phone inner">
        <img src="./assets/icons/phone.png" alt="icon" />
        <p class="small">+7 (342) 244-89-21</p>
      </div>
    </section>
    <div class="logo">
      <a href="./index.html" class="h1">boseok</a>
    </div>
    <section class="right site-info">
      <a href="./login.html">
        <img src="./assets/icons/user.png" alt="icon" />
      </a>
      <a href="#"><img src="./assets/icons/cart.png" alt="icon" /></a>

      <div class="currency inner">
        <img src="./assets/icons/rub.png" alt="icon" />
        <p class="small">РУБ</p>
      </div>
    </section>
  </section>
  <nav>
    <a href="./earrings.html">серьги</a>
    <a href="./rings.html">кольца</a>
    <a href="./jewerly.html">ювелирные изделия</a>
    <a href="./index.html#collections">коллекции</a>
  </nav>
`;

let footer = document.createElement(`footer`);
footer.innerHTML += `
  <div class="logo">
    <a href="./index.html" class="h1">boseok</a>
  </div>
  <section>
    <a href="#" class="bold">Категории</a>
    <a href="./earrings.html" class="small">Серьги</a>
    <a href="./rings.html" class="small">Кольца</a>
    <a href="./jewerly.html" class="small">Ювелирные изделия</a>
    <a href="./index.hmtl#collections" class="small">Коллекции</a>
  </section>
  <section>
    <p class="bold">Коллекции</p>
    <a href="./hwayang.html" class="small">HwaYang</a>
    <a href="./yeonhwa.html" class="small">YeonHwa</a>
  </section>
  <section>
    <p class="bold">Подписаться на рассылку</p>
    <p class="small">
      Присылайте мне новости, обновления и предложения BOSEOK.
    </p>
    <form>
      <label for="news-email">email</label>
      <input
        type="email"
        id="news-email"
        placeholder="Ваш email"
        autocomplete="email"
      />
      <button type="submit">
        <img src="./assets/footer/arrow.png" alt=">" />
      </button>
    </form>
    <div class="links">
      <a href="https://vk.com">
        <img src="./assets/footer/vk.png" alt="vk"
      /></a>
      <img src="./assets/footer/email.png" alt="email" />
    </div>
  </section>
`;

mainNode.insertAdjacentElement('beforebegin', header);
mainNode.insertAdjacentElement('afterend', footer);
