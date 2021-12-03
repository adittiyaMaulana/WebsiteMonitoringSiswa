// untuk bagian click pada row table masing-masing
$(document).ready(function ($) {
    $("*[data-href]").on("click", function () {
        window.location = $(this).data("href");
    });
});

// Untuk tableOrangTua
$(document).ready(function () {
    $("#tableOrangTua").DataTable({
        order: [[0, "desc"]], //sorting dari besar ke kecil
    });
});

// untuk tableguru
$(document).ready(function () {
    $("#tableGuru").DataTable();
});

// untuk tableguru
$(document).ready(function () {
    $("#tableAdmin").DataTable();
});
