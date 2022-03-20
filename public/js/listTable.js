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

// untuk tableadmin
$(document).ready(function () {
    $("#tableAdmin").DataTable();
});
