(function(w, d, s, l, i) {
  w[l] = w[l] || [];
  w[l].push({
      'gtm.start':
          new Date().getTime(),
      event: 'gtm.js'
  });
  var f = d.getElementsByTagName(s)[0],
      j = d.createElement(s),
      dl = l != 'dataLayer' ? '&l=' + l : '';
  j.async = true;
  j.src =
      'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
  f.parentNode.insertBefore(j, f);
})(window, document, 'script', 'dataLayer', 'GTM-W7478ZW');

document.addEventListener("DOMContentLoaded", ready);

function ready(){

// Circle-progress block
let circles = document.querySelectorAll('.progress-ring__circle');

circles.forEach(element => {
    let percent = +element.parentNode.parentNode.children[1].children[0].innerHTML;
    let radius = element.r.baseVal.value;
    let circumference = 2 * Math.PI * radius;
    
    element.style.strokeDasharray = `${circumference} ${circumference}`;
    element.style.strokeDashoffset = circumference;

    let offset = circumference - percent / 100 * circumference;
    element.style.strokeDashoffset = offset;
});


// Кнопка наверх - появление через заданное кол-во пикселей
$(document).on("scroll", window, function () {
    if ($(window).scrollTop()>1000) 
    {
        $(".uphome").show();
    }
    else
    {
        $(".uphome").hide();
    }
});


// Anchor for header Автоматические заголовки
let arrayAnchor = document.querySelector('.anchor-array');
let sizeAnchor = document.querySelector('.anchor-size');
let setAnchors = document.querySelectorAll('.anchor-for-header');
        
  window.addEventListener("load", function() {
    setAnchors.forEach(element => {
      arrayAnchor.insertAdjacentHTML("beforeend", 
        `<li class= 'nav-item'>
            <a class='nav-link anchors-link' href='#${element.id}'>${element.dataset.nameHeader}</a>
        </li>`);

      // Автоматическое увеличение padding-top конкретного блока на величину sticky-оглавления при клике 
      let anchorsLink = document.querySelectorAll('.anchors-link');
      anchorsLink.forEach(element => {
          let idLink = element.innerHTML;
          element.addEventListener("click", function(){
              setAnchors.forEach(element => {
                if(idLink == element.dataset.nameHeader) {
                  element.style.paddingTop = sizeAnchor.offsetHeight+'px';
                }
              });
          });
      });
    });

  });




//Смена стоимости тарифа
let toggle_button = document.querySelectorAll('.priceblock .toggle .button');
let tarif_name = document.querySelectorAll('.tarif .header .level_1');
let tarif_price = document.querySelectorAll('.tarif .header .level_3');
let tarif_button = document.querySelectorAll('.tarif .buttoncompany a');

tarifperiod = ['3 месяца','6 месяцев','12 месяцев'];
tarifname = ['Старт', 'Бизнес', 'Корпорация', 'VIP'];
priceset = 	[	
	['7 800 &#8381;', '14 850 &#8381;', '25 470 &#8381;', '89 970 &#8381;'],		//3 месяца
	['7 800 &#8381;', '26 730 &#8381;', '45 846 &#8381;', '161 946 &#8381;'],	  //6 месяцев
	['7 800 &#8381;', '47 520 &#8381;', '81 504 &#8381;', '287 904 &#8381;'],		//12 месяцев
];

function defaultvalue () {                                                    //значения по умолчанию

  toggle_button.forEach((element, index) => {                                 //месяцы                              
		element.innerHTML = tarifperiod[index];
	});
  tarif_name.forEach((element, index) => {                                    //тарифы
		element.innerHTML = tarifname[index];
  });
	tarif_price.forEach((element, index) => {                                   //цены
		element.innerHTML = priceset[0][index];
	});
	tarif_button.forEach((element, index) => {                                  //ссылки
    element.href = '/appforregister?tarif='+tarifname[index]+' '+tarifperiod[0];
	});

}

defaultvalue();

toggle_button.forEach((element, i) => {                                       //нажатия на кнопку месяцы
	element.addEventListener("click", function(){

		toggle_button.forEach(element => {                                        //изменение фона
			element.style = 'background: inherit; color: black; transition: background 0.2s linear, color 0.2s linear;';						
		});
		element.style = 'background: #78bebe; color: white; transition: background 0.2s linear, color 0.2s linear;';

		tarif_price.forEach((element, index) => {                                 //изменение цены
			element.innerHTML = priceset[i][index];
		});

    tarif_button.forEach((element, index) => {                                //изменение ссылки
      element.href = '/appforregister?tarif='+tarifname[index]+' '+tarifperiod[i];
    });
		
    tarif_button[0].href = '/appforregister?tarif='+tarifname[0]+' '+tarifperiod[0];                             //исключение тариф Старт

	});
});

//тарифы
let select = document.querySelector('select');

for (let index = 0; index < tarifname.length; index++) {
  for (let i = 0; i < tarifperiod.length; i++) {
    if(index == 0) {                                                          //исключение тариф Старт
      select.innerHTML = `<option value='${tarifname[index]} ${tarifperiod[0]}'>${tarifname[index]} ${tarifperiod[0]}</option>`;
    }
    else {
      select.innerHTML += `<option value='${tarifname[index]} ${tarifperiod[i]}'>${tarifname[index]} ${tarifperiod[i]}</option>`;
    }
  }
}

//разбор url-строки
let params = window
    .location
    .search
    .replace('?','')
    .split('&')
    .reduce(
        function(p,e){
            let a = e.split('=');
            p[ decodeURIComponent(a[0])] = decodeURIComponent(a[1]);
            return p;
        },
        {}
    );
    
//выбор тарифа по get параметру
// console.log(select[1].value);
for (let i = 0; i < select.length; i++) {
  if(select[i].value == params['tarif']) {
    select[i].selected = true;
    break;
  }
}

}

