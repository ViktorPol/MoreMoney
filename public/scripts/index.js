document.addEventListener("DOMContentLoaded", ready);

function ready(){

let setImgArea = document.querySelector('.img-for-laptop');
let hoverArea = document.querySelectorAll('.hover-img');
let setImgUnionBlock = document.querySelector('.img-union-block');
let setTextArea = document.querySelector('.text-for-decision');
let setTextNormalArea = document.querySelector('.text-for-decision-normal');
let hoverRegisterArea = document.querySelectorAll('.hover-union');
let countAutoChange = 0;
let countAutoChangeUnion = 0;

// Register-block
hoverArea.forEach(element => {
    element.addEventListener("mouseover", function(){                       //Событие когда мышка находится над блоком
      clearInterval(my_set_interval_id);                                    //Убираем setInterval по id
      setImgArea.src = this.dataset.hoverImg;                               //Изменение картинки в блоке
      countAutoChange = Number(this.dataset.hoverId);                       //Изменение счетчика
      hoverArea.forEach(element => {                                        //Удаление заливки со всех блоков с цифрами
        element.children[0].children[0].classList.remove('hover-circle');
      });
      this.children[0].children[0].classList.add('hover-circle')            //Заливка блока с цифрой
    } , true);
    element.addEventListener("mouseout", function(){                        //Событие когда мышка ушла из блока
      // my_set_interval_id = setInterval(autoChange, 5000);                   //Запускаем setInterval
      this.children[0].children[0].classList.remove('hover-circle')         //Удаление заливки с блока с цифрой
    } , true);
});


// Автоматическая смена блоков в Register-block
let my_set_interval_id = setInterval(autoChange, 4000);                               //Запуск функции с заданным интервалом

function autoChange() {
    hoverArea.forEach(element => {                                                    //Удаление заливки со всех блоков с цифрами
      element.children[0].children[0].classList.remove('hover-circle');
    });
    if(countAutoChange == hoverArea.length) {                                         //Обнуление счетчика при достижении последнего блока
      countAutoChange = 0;
    }
    setImgArea.src = hoverArea[countAutoChange].dataset.hoverImg;                     //Изменение картинки в блоке
    hoverArea[countAutoChange].children[0].children[0].classList.add('hover-circle'); //Заливка блока с цифрой
    countAutoChange++;                                                                //Увеличение счетчика на 1  
};


// union-block
hoverRegisterArea.forEach(element => {
    element.children[0].addEventListener("mouseover", function(){         //Событие когда мышка находится над блоком
      clearInterval(my_set_interval_id_Union);                            //Убираем setInterval по id
      hoverRegisterArea.forEach(element => {                              //Удаление заливки со всех блоков с цифрами
        element.children[0].classList.remove('hover-circle');
      });
      setImgUnionBlock.src = element.dataset.hoverImg;                    //Изменение картинки в блоке
      countAutoChangeUnion = Number(this.dataset.hoverId);                //Изменение счетчика
      setTextArea.innerHTML = element.dataset.hoverText;                  //Изменение текста в первом блоке
      setTextNormalArea.innerHTML = element.dataset.hoverTextNormal;      //Изменение текста во втором блоке
    } , true);
    element.children[0].addEventListener("mouseout", function(){          //Событие когда мышка ушла из блока
      // my_set_interval_id_Union = setInterval(autoChangeUnion, 5000);      //Запускаем setInterval
    } , true);
});


// Автоматическая смена блоков в union-block
let my_set_interval_id_Union = setInterval(autoChangeUnion, 4000);                                    //Запуск функции с заданным интервалом

function autoChangeUnion() {
    hoverRegisterArea.forEach(element => {                                                            //Удаление заливки со всех блоков с цифрами
      element.children[0].classList.remove('hover-circle');
    });
    if(countAutoChangeUnion == hoverRegisterArea.length) {                                            //Обнуление счетчика при достижении последнего блока
      countAutoChangeUnion = 0;
    }
    setImgUnionBlock.src = hoverRegisterArea[countAutoChangeUnion].dataset.hoverImg;                  //Изменение картинки в блоке
    setTextArea.innerHTML = hoverRegisterArea[countAutoChangeUnion].dataset.hoverText;                //Изменение текста в первом блоке
    setTextNormalArea.innerHTML = hoverRegisterArea[countAutoChangeUnion].dataset.hoverTextNormal;    //Изменение текста во втором блоке
    hoverRegisterArea[countAutoChangeUnion].children[0].classList.add('hover-circle');                //Заливка блока с цифрой
    countAutoChangeUnion++;                                                                           //Увеличение счетчика на 1
};




}