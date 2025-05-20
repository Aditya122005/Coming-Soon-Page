let hours = 2;
let minutes = 5;
let seconds = 0;

const FULL_DASH_ARRAY = 408;

function updateTime() {
    if (seconds === 0) {
        if (minutes === 0) {
            if (hours > 0) {
                hours--;
                minutes = 59;
            }
        } else {
            minutes--;
            seconds = 59;
        }
    } else {
        seconds--;
    }

    $("#hours").text(hours);
    $("#minutes").text(minutes);
    $("#seconds").text(seconds);

    const hourPercent = (hours / 2) * 100;
    const minutePercent = (minutes / 59) * 100;
    const secondPercent = (seconds / 59) * 100;

    $("#hours-circle").css("strokeDashoffset", FULL_DASH_ARRAY - (FULL_DASH_ARRAY * hourPercent) / 100);
    $("#minutes-circle").css("strokeDashoffset", FULL_DASH_ARRAY - (FULL_DASH_ARRAY * minutePercent) / 100);
    $("#seconds-circle").css("strokeDashoffset", FULL_DASH_ARRAY - (FULL_DASH_ARRAY * secondPercent) / 100);
}

function formatTime(unit) {
    return unit < 10 ? '0' + unit : unit;
}

function initCircles() {
    $(".progress").each(function() {
        $(this).css("strokeDasharray", FULL_DASH_ARRAY);
        $(this).css("strokeDashoffset", 0);
    });
}

initCircles();
setInterval(updateTime, 1000);

$(".register-btn").on("click", function () {
    $(".form").show();
    $("#formModal").show();
});

$(".close-btn").on("click", function () {
    $("#formModal").hide();
});

$(window).on("click", function (event) {
    if ($(event.target).is("#formModal")) {
        $("#formModal").hide();
    }
});

const registerBtn = $('.register-btn');
const formModal = $('#formModal');
const closeBtn = $('.close-btn');
const form = $('#registrationForm');
const thankYouModal = $('#thankYouModal');
const closeThankYouBtn = $('.close-thankyou-btn');

registerBtn.on('click', () => {
    formModal.show();
});

closeBtn.on('click', () => {
    formModal.hide();
});

closeThankYouBtn.on('click', () => {
    thankYouModal.hide();
});

$(window).on('click', (event) => {
    if ($(event.target).is(formModal)) {
        formModal.hide();
    } else if ($(event.target).is(thankYouModal)) {
        thankYouModal.hide();
    }
});

$('#form_submit').on("click", function (e) {
    e.preventDefault();

    const form = $('#registrationForm')[0];       // Get the raw DOM element
    const formData = new FormData(form);   

    $.ajax({
        url: base_url+"welcome/send",
        method: "POST",
        data: formData,
        processData: false,
        contentType: false,
        success: function(res) {
            console.log(res);
        },
        error: function(err) {
            alert("Error: " + err);
        }
    });

    $('#registrationForm')[0].reset();

    formModal.hide();
    thankYouModal.show();
});