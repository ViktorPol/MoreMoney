//маска ввода для телефона
document.addEventListener("DOMContentLoaded", function () {
    var nameInputs = document.querySelector('.name');
    var phoneInputs = document.querySelectorAll('.tel');

    nameInputs.addEventListener('input', () => { // добавляем обработчик события input
        const regExp = /[^а-яА-ЯёЁ\s]/g; // задаем регулярное выражение, которое не соответствует русским буквам и пробелам
        const firstChar = nameInputs.value.charAt(0); // получаем первый символ
        const isSpace = /\s/.test(firstChar); // проверяем, является ли первый символ пробелом
        if (isSpace) {
          nameInputs.value = nameInputs.value.trim(); // удаляем все пробелы в начале и в конце строки
        }
        nameInputs.value = nameInputs.value.replace(regExp, ''); // заменяем все символы, не соответствующие русским буквам и пробелам, на пустую строку
    });

    var getInputNumbersValue = function (input) {
        // Return stripped input value — just numbers
        return input.value.replace(/\D/g, '');
    }

    var onPhonePaste = function (e) {
        var input = e.target,
            inputNumbersValue = getInputNumbersValue(input);
        var pasted = e.clipboardData || window.clipboardData;
        if (pasted) {
            var pastedText = pasted.getData('Text');
            if (/\D/g.test(pastedText)) {
                // Attempt to paste non-numeric symbol — remove all non-numeric symbols,
                // formatting will be in onPhoneInput handler
                input.value = inputNumbersValue;
                return;
            }
        }
    }

    var onPhoneInput = function (e) {
        var input = e.target,
            inputNumbersValue = getInputNumbersValue(input),
            selectionStart = input.selectionStart,
            formattedInputValue = "";

        if (!inputNumbersValue) {
            return input.value = "";
        }

        if (input.value.length != selectionStart) {
            // Editing in the middle of input, not last symbol
            if (e.data && /\D/g.test(e.data)) {
                // Attempt to input non-numeric symbol
                input.value = inputNumbersValue;
            }
            return;
        }

        if (["7", "8", "9"].indexOf(inputNumbersValue[0]) > -1) {
            if (inputNumbersValue[0] == "9") inputNumbersValue = "8" + inputNumbersValue;
            var firstSymbols = (inputNumbersValue[0] == "8") ? "8" : "8";
            formattedInputValue = input.value = firstSymbols + " ";
            if (inputNumbersValue.length > 1) {
                formattedInputValue += '(' + inputNumbersValue.substring(1, 4);
            }
            if (inputNumbersValue.length >= 5) {
                formattedInputValue += ') ' + inputNumbersValue.substring(4, 7);
            }
            if (inputNumbersValue.length >= 8) {
                formattedInputValue += '-' + inputNumbersValue.substring(7, 9);
            }
            if (inputNumbersValue.length >= 10) {
                formattedInputValue += '-' + inputNumbersValue.substring(9, 11);
            }
        } 
        // Иностранные номера
        // else {
        //     formattedInputValue = '+' + inputNumbersValue.substring(0, 16);
        // }
        input.value = formattedInputValue;
    }
    var onPhoneKeyDown = function (e) {
        // Clear input after remove last symbol
        var inputValue = e.target.value.replace(/\D/g, '');
        if (e.keyCode == 8 && inputValue.length == 1) {
            e.target.value = "";
        }
    }
    for (var phoneInput of phoneInputs) {
        phoneInput.addEventListener('keydown', onPhoneKeyDown);
        phoneInput.addEventListener('input', onPhoneInput, false);
        phoneInput.addEventListener('paste', onPhonePaste, false);
    }

    submitbutton = document.querySelector('.check-submit');
    input_name = document.querySelector('#input_name');

    submitbutton.addEventListener('click', function(event) {

        phoneInputs[0].onfocus = function() {
            phoneInputs[0].classList.remove('error-input');
        }
        if (phoneInputs[0].value.length<17) {
            phoneInputs[0].classList.add('error-input');
            event.preventDefault()
        }

        input_name.onfocus = function() {
            input_name.classList.remove('error-input');
        }
        if (input_name.value.length<1) {
            input_name.classList.add('error-input');
        }

    })
    
})











// window.addEventListener("DOMContentLoaded", function() {
//     [].forEach.call( document.querySelectorAll('.tel'), function(input) {
//     var keyCode;
//     function mask(event) {
//         event.keyCode && (keyCode = event.keyCode);
//         var pos = this.selectionStart;
//         if (pos < 3) event.preventDefault();
//         var matrix = "+7 (___) ___ ____",
//             i = 0,
//             def = matrix.replace(/\D/g, ""),
//             val = this.value.replace(/\D/g, ""),
//             new_value = matrix.replace(/[_\d]/g, function(a) {
//                 return i < val.length ? val.charAt(i++) || def.charAt(i) : a
//             });
//         i = new_value.indexOf("_");
//         if (i != -1) {
//             i < 5 && (i = 3);
//             new_value = new_value.slice(0, i)
//         }
//         var reg = matrix.substr(0, this.value.length).replace(/_+/g,
//             function(a) {
//                 return "\\d{1," + a.length + "}"
//             }).replace(/[+()]/g, "\\$&");
//         reg = new RegExp("^" + reg + "$");
//         if (!reg.test(this.value) || this.value.length < 5 || keyCode > 47 && keyCode < 58) this.value = new_value;
//         if (event.type == "blur" && this.value.length < 5)  this.value = ""
//     }

//     input.addEventListener("input", mask, false);
//     input.addEventListener("focus", mask, false);
//     input.addEventListener("blur", mask, false);
//     input.addEventListener("keydown", mask, false)

//   });

// });