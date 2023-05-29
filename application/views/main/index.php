<!-- Scrollspy block -->
<!-- <div id="list-example" class="list-group">
  <a class="list-group-item list-group-item-action" href="#list-item-1">First block</a>
  <a class="list-group-item list-group-item-action" href="#list-item-2">Carousel-block</a>
  <a class="list-group-item list-group-item-action" href="#list-item-3">Masonry-block</a>
  <a class="list-group-item list-group-item-action" href="#list-item-4">Price-block</a>
</div> -->

<!-- <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="10" class="scrollspy-example" tabindex="0">
</div> -->





<!-- First block -->
<div class=" col-12 col-lg-8 px-4 py-5 mx-auto" id="list-item-1">
  <div class="text-center mb-4">
    <h1 class="fw-bold">Развивайте свой бизнес в <nobr>онлайн-продажах</nobr> c помощью единого сервиса</h1>
    <h1 class="fw-bold">MoreMoney</h1>
  </div>
  <div class="text-center mb-4">
    <h4 class="fw-normal mb-4">Сервис MoreMoney поможет вам эффективно управлять своим бизнесом.</h4>
    <div class="row d-flex justify-content-center m-0">
      <div class="col-12  d-flex align-items-center justify-content-center m-3">
      <a href="/appforregister" target="_blank">  <button type="button " class="btn btn-primary btn-lg shadow-none" id="try_free">Попробовать бесплатно</button></a>
        <!-- 
        <button type="button" class="btn btn-primary btn-lg mx-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Получить консультацию</button>
        -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-sm modal-dialog-centered">

            <div class="modal-content">
              <div class="modal-header  text-center">
                <h5 class="modal-title" id="exampleModalLabel">Телефон</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <!-- добавлено -->
              <!-- <div class="modal-header  text-center">
                <h5 class="modal-title" id="exampleModalLabel2">Имя</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div> -->

              <form action='callme' method='post' enctype='multipart/form-data'>
                <div class="modal-body">

                  <div class="mb-2">

                    <input type="" class="form-control w-100" id="recipient-name" name="phone" style="max-width: 100%;">
                    <!-- добавлено -->
                    <!-- <input type="" class="form-control w-100" id="recipient-name" name="name" style="max-width: 100%;"> -->
                  </div>


                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
                  <button type="submit" class="btn btn-primary">Позвоните Мне!</button>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>


<!-- Carousel-block -->
<div id="carouselExampleCaptions" class="carousel slide mb-5 pb-5" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../../../public/images/shop.jpg" class="d-block w-100 " alt="...">
      <div class="carousel-caption text-start d-flex flex-column justify-content-center h-100" style="top: 0">
        <h2>Современный <br>
          <nobr>интернет-магазин</nobr>
        </h2>

      </div>
    </div>
    <div class="carousel-item">
      <img src="../../../public/images/market.jpg" class="d-block w-100" alt="..." style="background-color: black;">
      <div class="carousel-caption text-end  d-flex flex-column justify-content-center h-100" style="top: 0">
        <h2>
          <nobr>Интеграция с </nobr><br>маркетплейсами
        </h2>

      </div>
    </div>
    <div class="carousel-item">
      <a href="https://moremoney/advertising">
        <img src="../../../public/images/ads.jpg" class="d-block w-100 " alt="..." style="background-color: black;">
        <div class="carousel-caption text-end d-flex flex-column justify-content-center h-100" style="top: 0">
          <h2>Управление рекламой<br> на маркетплейсах</h2>
          <!-- <p class="d-none d-md-block">Автоматическая установка<br> актуальных рекламных ставок</p> -->
        </div>
      </a>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<!-- YouRich-union-block -->

 <!-- Let's-start-block -->
<div class="col-12 col-lg-8 row my-5 py-5 mx-auto " id="start-block">

  <div class="col pb-5">
    <h2 class="text-center text-uppercase">Начать легко</h2>
  </div>

  <div class="row p-0 m-0">
    <div class="col-12 col-lg-6">
      <div class="row hover-img" data-hover-img="../../../public/images/start-block-register.png" data-hover-id=1>
        <div class="col-3">
          <div class="num_of_circle_block d-flex align-items-center justify-content-center my-1">
            <span class="num_of_circle">1</span>
          </div>
        </div>
        <div class="col-9">
          <h4>Зарегистрируйтесь</h4>
          <p>Заполнение анкеты займет не более 2 минут</p>
        </div>
      </div>
      <div class="row hover-img" data-hover-img="../../../public/images/start-block-goods.png" data-hover-id=2>
        <div class="col-3">
          <div class="num_of_circle_block d-flex align-items-center justify-content-center my-1">
            <span class="num_of_circle">2</span>
          </div>
        </div>
        <div class="col-9">
          <h4>Добавьте товары</h4>
          <p>Вручную или загрузите из файла</p>
        </div>
      </div>
      <div class="row hover-img" data-hover-img="../../../public/images/start-block-marketplace.png" data-hover-id=3>
        <div class="col-3">
          <div class="num_of_circle_block d-flex align-items-center justify-content-center my-1"><span class="num_of_circle">3</span></div>
        </div>
        <div class="col-9">
          <h4>Подключите маркетплейсы</h4>
          <p>Достаточно ввести API, остальное сделаем мы</p>
        </div>
      </div>
      <div class="row hover-img" data-hover-img="../../../public/images/start-block-sell.png" data-hover-id=4>
        <div class="col-3">
          <div class="num_of_circle_block d-flex align-items-center justify-content-center my-1"><span class="num_of_circle">4</span></div>
        </div>
        <div class="col-9">
          <h4>Продавайте и анализируйте</h4>
          <p>Мы обеспечим вас необходимым функционалом</p>
        </div>
      </div>
    </div>
    <div class="laptop_register d-none d-lg-flex col-lg-6">
      <div class=" d-flex align-items-center justify-content-center">
        <img class="img-fluid img-for-laptop" src="../../../public/images/start-block-register.png" alt="step1">
      </div>
    </div>
  </div>
</div>





<!-- Store-block -->
<!-- <div class="col-12 col-lg-8 row py-5 mt-3 mb-5 mx-auto back_radius">
  <div class="row m-0 p-0">
    <div class="col-12 col-lg-6 d-flex align-items-center justify-content-center">
      <img class="img-fluid" src="../../../public/images/laptop-store.png" alt="laptop">
    </div>
    <div class="col-12 col-lg-6 p-0 px-lg-4">
      <h3 class="text-center px-2 text-md-center text-lg-start">Предлагаем готовый <nobr>интернет-магазин</nobr></h3>
      <br>
      <ul class="ul-decor-block">
        <li>Начните с гибкого шаблона и настройте его в соответствии со своим стилем и потребностями с помощью готовых тем и модулей</li>
        <li>Организуйте функционал всех страниц, от каталога и категорий до заказа и оплаты</li>
      </ul>
    </div>
  </div>
</div> -->


<!-- Benefits-block -->
<div class="col-12 col-md-10 col-lg-8 row row-cols-1 my-5 px-0 mx-auto anchor-for-header" data-name-header="Маркетплейсы" id="benefits-block">

  <div class="row m-0 py-4">
    <div class="col-12 col-lg-4 py-5 d-flex align-items-center justify-content-center">
      <h2 class="text-center text-uppercase text-lg-end m-0">Подключаем маркетплейсы</h2>
    </div>
    <div class="col-12 col-lg-4 py-5 d-flex align-items-center justify-content-center">
      <img class="col-12 py-auto" src="../../../public/images/ozon_logo.png" alt="ozon">
    </div>
    <div class="col-12 col-lg-4 py-5 d-flex align-items-center justify-content-center">
      <img class="col-10 py-auto" src="../../../public/images/wildberries_logo.png" alt="wildberries">
    </div>
  </div>

  
</div>


