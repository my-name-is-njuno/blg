var url_roott = $('#url_root').val()
$("#contactForm-desktop-app").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        formErrorSoft();
        submitMSGsoft(false, "Did you fill in the form properly?");
    } else {
        // everything looks good!
        event.preventDefault();
        submitForm_web();
    }
});


function submitForm_web(){
    // Initiate Variables With Form Content
    var name_desktop_app = $("#name-desktop-app").val();
    var email_desktop_app = $("#email-desktop-app").val();
    var number_desktop_app = $("#number-desktop-app").val();
    var typ_desktop_app = $("#type-desktop-app").val();
    var msg_subject_desktop_app = "New Software Request" + name_desktop_app;
    var description_desktop_app = $("#description-desktop-app").val();


    $.ajax({
        type: "POST",
        url: url_roott+"emails/send_soft_email",
        data: "name=" + name_desktop_app + "&email=" + email_desktop_app + "&msg_subject=" + msg_subject_desktop_app + "&description=" + description_desktop_app + "&typ=" + typ_desktop_app + "&number=" + number_desktop_app,
        success : function(text){
            if (text == "success"){
                formSuccessSoft();
            } else {
                formErrorSoft();
                submitMSGsoft(false,text);
            }
        }
    });
}

function formSuccessSoft(){
    $("#contactForm-desktop-app")[0].reset();
    submitMSGsoft(true, "Message Submitted!")
}

function formErrorSoft(){
    $("#contactForm-desktop-app").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass();
    });
}

function submitMSGsoft(valid, msg){
    if(valid){
        var msgClasses = "h3 text-center tada animated text-success";
    } else {
        var msgClasses = "h3 text-center text-danger";
    }
    $("#msgSubmit-desktop-app").removeClass().addClass(msgClasses).text(msg);
}