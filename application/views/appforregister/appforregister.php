<div class="col">
    <h1 class="text-center mb-3 px-2">Заявка на регистрацию</h1>
    <h3 class="text-center mb-5 px-2">Мы свяжемся с вами в течение рабочего дня и зарегистрируем аккаунт</h3>
</div>

<div class="col-10 col-md-4 col-lg-3 col-xxl-2 mx-auto">

    <form action='appforregister' method='post' enctype='multipart/form-data'>

        <div class="row m-0 mb-4 align-items-center">
            <!-- <label for="input_name" class="col-12 text-center mb-2">Имя</label> -->
            <input type="text" class="name col mx-auto form-control input-height shadow-none px-4" name='name' placeholder="Имя*" id="input_name" required>
        </div>
        <div class="row m-0 mb-4 align-items-center">
            <!-- <label for="input_phone" class="col-12 text-center mb-2">Телефон</label> -->
            <input type="tel" class="tel col mx-auto form-control input-height shadow-none px-4" name='phone' placeholder="Телефон*" id="input_phone" minlength="10" required>
        </div>
        <div class="row m-0 mb-4 align-items-center">
            <!-- <label for="input_mail" class="col-12 text-center mb-2">Почта</label> -->
            <input type="email" class="col mx-auto form-control input-height shadow-none px-4" name='mail' placeholder="E-mail" id="input_mail">
        </div>        
        <div class="row m-0 mb-5 pb-2 align-items-center" id="rate">
            <label for="input_tarif" class="col-12 text-center mb-2">Тариф</label>
            <!-- <input type="text" class="col mx-auto form-control input-height shadow-none px-4" name='tarif' placeholder="Ваш тариф" id="input_tarif"> -->
            <select class="col mx-auto form-control input-height shadow-none px-4" name="tarif" id="input_tarif" style="border-radius: 100px;">
                <!-- <option value="1">Старт 3 месяца</option>
                <option value="2">Бизнес 3 месяца</option>
                <option value="3">Бизнес 6 месяцев</option>
                <option value="4">Бизнес 12 месяцев</option>
                <option value="5">Корпорация 3 месяца</option>
                <option value="6">Корпорация 6 месяцев</option>
                <option value="7">Корпорация 12 месяцев</option>
                <option value="8">VIP 3 месяца</option>
                <option value="9">VIP 6 месяцев</option>
                <option value="10">VIP 12 месяцев</option> -->
            </select>
        </div>  
       
        <div class="row m-0 mb-4 align-items-center">
            <button type="submit" class="check-submit btn btn-primary shadow-none input-height" id="btn_submit">Отправить</button>
            <!-- data-bs-toggle="modal" data-bs-target="#exampleModal" -->
            <!-- <button type="submit" class="btn btn-primary shadow-none">Оставить заявку</button> -->
        </div>
       
    </form>

</div>

<!-- <div class="col-10 mx-auto">
    <div class="col mx-auto my-5">
        <p>Нажимая "Отправить", Вы принимаете
        <a href="http://yourich.ru/politics/personal-data" target="_blank">Политику обработки персональных данных</a>,
        <a href="http://yourich.ru/politics/agreement-personal-data" target="_blank">Согласие на обработку персональных данных</a>,
        <a href="http://yourich.ru/politics/agreement-newssubscribe" target="_blank">Согласие на получение новостной и рекламной рассылки</a>,
        <a href="http://yourich.ru/politics/agreement-cookie" target="_blank">Согласие на обработку файлов cookie</a>,
        <a href="http://yourich.ru/politics/offer" target="_blank">Публичную оферту</a>,
        <a href="http://yourich.ru/politics/termsuse" target="_blank">Пользовательское соглашение</a>
        </p>
    </div>
</div> -->