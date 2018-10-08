$(document).ready(function () {
    $("button").click(function () {
        //$("p").hide(); // element
        //$("#test").hide(); // id
        //$(".test").hide(); // class
    });
    $("#btn1").click(function () {
        alert("Text: " + $("#test").text());
    });
    $("#btn2").click(function () {
        alert("HTML: " + $("#test").html());
    });
    $("#btn3").click(function () {
        alert("Value: " + $("#inputField").val());
    });
    $("#test").mouseover(function () {
        //alert("Testing..."); 
    });
    $(".testing")
});