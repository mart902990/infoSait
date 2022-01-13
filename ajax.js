$(document).ready(function () {
    $('.butNumber').on('click', myAjax2);

});
function myAjax() {
    $.get(                   // $.post
        "backend.php",
        {
            "a": $('#num1').val(),
        },
        function (data) { //  передаем и загружаем данные с сервера с помощью HTTP запроса методом post
            console.log(data);

        }

    );
}
function myAjax2() {
    $.ajax({
        url: "backend.php",
        type: "GET",
        data: {
            "a": $('#num1').val()
        },
        success: function (data) {
            $('#message').html(data);
            console.log(data);
        }
    });

}