
$(function () {
    /*=======================
                UI Slider Range JS
    =========================*/
    $("#slider-range").slider({
        range: true,
        min: 1000,
        max: 100000,
        values: [10000, 100000],
        slide: function (event, ui) {
            $("#amount").val("Rp." + ui.values[0] + " - Rp." + ui.values[1]);
        }
    });
    $("#amount").val("Rp." + $("#slider-range").slider("values", 0) +
        " - Rp." + $("#slider-range").slider("values", 1));
});
