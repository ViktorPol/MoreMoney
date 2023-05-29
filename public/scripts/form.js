$(document).ready(function () {
    $('form').submit(function (event) {
        var json;
        event.preventDefault();
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (result) {
                json = jQuery.parseJSON(result);
                if (json.url) {
                    window.location.href = json.url;
                } else {
                    // Получаем доступ к модальному блоку в шаблоне 
                    let modal = document.querySelector('.modal');
                    let modal_message = document.querySelector('.modal-body');
                    let modal_footer = document.querySelector('.modal-footer');
                    // Вставка сообщения в тело блока
                    modal_message.children[0].innerHTML = json.message;

                    let alert = $(".alert");
                    alert.html(json.message);

                    if (json.status == "sendok") {
                        const truck_modal = document.querySelector('#exampleModal');
                        const modal = bootstrap.Modal.getInstance(truck_modal);    
                        modal.hide();
                    }

                    if (json.status == "application-success") {
                        // modal.classList.add('d-block');
                        // modal_footer.addEventListener("click", function() {
                        //     modal.classList.remove('d-block');
                        //     $('form')[0].reset();
                        //     window.location.href = "/congrats"
                        // })
                        window.location.href = "/congrats"
                        // setTimeout(function () {
                        //     window.location.href = "/congrats"
                        // }, 2000);
                    }

                    if (json.status == "application-failed") {
                        modal.classList.add('d-block');
                        modal_footer.addEventListener("click", function() {
                            modal.classList.remove('d-block');
                        })
                    }

                    // if (json.status == "login-failed") {
                    //     alert.addClass("alert-danger");
                    // }

                    alert.css("display", "block");
                    setTimeout(function () {
                        alert.css("display", "none");
                    }, 4000);




                }
            },
        });
    });



});