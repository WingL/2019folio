$("#hire").on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        formError();
        submitMSG(false, "Did you fill in the form properly?");
    } else {
        // everything looks good!
        event.preventDefault();
        submitHire();
    }
});

function submitHire(){
    // Initiate Variables With Form Content
    var company = $("#company-name").val();
    var name = $("#person-name").val();
    var email = $("#email").val();
    var message = $("#role-detail").val();
   
    $.ajax({
        type: "POST",
        url: "php/hireme.php",
        data: "company-name=" + company + "&person-name=" + name + "&email=" + email + "&message=" + message,
        success : function(text){
            console.log("formsuccess?", text)
            if (text == "success"){
                formSuccess();
                console.log("formsuccess!!")
            } else {
                formError();
                submitHire(false,text);
            }
        }
    });

    function formSuccess(){
    $("#hire")[0].reset();
    submitMSG(true, "Love to hear from you!")
}

function submitMSG(valid, msg){
    if(valid){
        var msgClasses = "h3 text-center tada animated text-success";
    } else {
        var msgClasses = "h3 text-center text-danger";
    }
    $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
}
    
}



$("#thought").on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        formError();
        submitMSG(false, "Did you fill in the form properly?");
    } else {
        // everything looks good!
        event.preventDefault();
        submitThought();
    }
});

function submitThought(){
    // Initiate Variables With Form Content
    var fname = $("#feedback-name").val();
    var femail = $("#feedback-email").val();
    var fdetail = $("#feedback-detail").val();
    var fmessage = $("#feedback-message").val();
   
    $.ajax({
        type: "POST",
        url: "php/thought.php",
        data: "feedback-name=" + fname + "&feedback-email=" + femail + "&feedback-detail=" + fdetail + "&feedback-message=" + fmessage,
        success : function(text){
            console.log("formsuccess?", text)
            if (text == "success"){
                formSuccess();
                console.log("formsuccess!!")
            } else {
                formError();
                submitThought(false,text);
            }
        }
    });


function formSuccess(){
    $("#thought")[0].reset();
    submitMSG(true, "Love to hear from you!")
}



function submitMSG(valid, msg){
    if(valid){
        var msgClasses = "h3 text-center tada animated text-success";
    } else {
        var msgClasses = "h3 text-center text-danger";
    }
    $("#ThoughtSubmit").removeClass().addClass(msgClasses).text(msg);
}

}