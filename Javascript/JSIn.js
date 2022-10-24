$(document).ready(function (e) {
    $("#Materias").click(function (e) {
        $(".ContenidoPrincipal").attr("src", "Funcionalidades/FuncMaterias.php");
    });
    $("#tutoria").click(function (e) {
        $(".ContenidoPrincipal").attr("src", "Funcionalidades/signup_tutoria.php");
    });
    $("#fichasestudio").click(function (e) {
        $(".ContenidoPrincipal").attr("src", "Funcionalidades/ficha.php");
    });
    $("#subrayado").click(function (e) {
        $(".ContenidoPrincipal").attr("src", "Funcionalidades/highlighter.php");
    });
    $("#test").click(function (e) {
        $(".ContenidoPrincipal").attr("src", "Funcionalidades/test.php");
    });
    $("#MenuSub").click(function (e) {
        $(".ContenidoPrincipal").attr("src", "Funcionalidades/highlighter.php");
    });
    $("#MenuFich").click(function (e) {
        $(".ContenidoPrincipal").attr("src", "Funcionalidades/ficha.php");
    });
    $("#MenuTut").click(function (e) {
        $(".ContenidoPrincipal").attr("src", "Funcionalidades/signup_tutoria.php");
    });
    $("#MenuTest").click(function (e) {
        $(".ContenidoPrincipal").attr("src", "Funcionalidades/test.php");
    });
});