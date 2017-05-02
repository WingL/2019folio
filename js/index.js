/*
$(function() {
    $(window).on("scroll", function() {
        if($(window).scrollTop() > 50) {
            $("#menu ul li").css("padding","0");
            $("#name").css("padding","0")
        } else{
            $("#menu ul li").css("padding","40px 0 20px 0");
            $("#name").css("padding","40px 0 20px 0")
        }
    });
}); 
*/



$(document).ready(function () {
    console.log("ready");
    $(".hiremebtn").click(function () {
        $("#hiremepop").show();

    });
    $(".closebtn").click(function () {
        $("#hiremepop").hide();
    });
});

$(document).ready(function () {
    console.log("hiremebtn");
    $('.submit').click(function (event) {
        event.preventDefault();
        submitForm();
    });
        });

    function submitForm(){
        var company = $("#company").val();
        var name = $("#yourname").val();
        var email = $("#email").val();
        var role = $("#role").val();

        console.log("sending mail?")
        $.ajax({
            url: "hireme.php",
            type: 'POST',
            data: {
                company: company,
                name: name,
                email: email,
                role: role,
            },
            
        });console.log("sent mail?")
    };
     



$(document).ready(function () {
    console.log("ready");
    $(".contactbtn").click(function () {
        $("#contactpop").show();

    });
    $(".closebtn").click(function () {
        $("#contactpop").hide();
    });
});

