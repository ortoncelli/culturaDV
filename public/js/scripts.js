$(window).ready(function () {
    $(".btn-destroy").click(function (e) {
        if (!confirm("Deseja excluir esse Registro?")) {
            e.preventDefault();
            return false;
        }
    });
});
