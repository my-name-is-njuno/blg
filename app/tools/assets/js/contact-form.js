var url_roottt = $('#url_root').val()
$("#contactForm-contact").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        formErrorrr();
        submitMSGcc(false, "Did you fill in the form properly?");
    } else {
        // everything looks good!
        event.preventDefault();
        submitFormmm();
    }
});


function submitFormmm(){
    // Initiate Variables With Form Content
    var name = $("#name-contact").val();
    var email = $("#email-contact").val();
    var msg_subject = "New Message" + name;
    var message = $("#message-contact").val();


    $.ajax({
        type: "POST",
        url: url_root+"emails/send_message_email",
        data: "name=" + name + "&email=" + email + "&msg_subject=" + msg_subject + "&message=" + message,
        success : function(text){
            if (text == "success"){
                formSuccessss();
            } else {
                formErrorrr();
                submitMSGcc(false,text);
            }
        }
    });
}

function formSuccessss(){
    $("#contactForm-contact")[0].reset();
    submitMSGcc(true, "Message Submitted!")
}

function formErrorrr(){
    $("#contactForm-contact").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass();
    });
}

function submitMSGcc(valid, msg){
    if(valid){
        var msgClasses = "h3 text-center tada animated text-success";
    } else {
        var msgClasses = "h3 text-center text-danger";
    }
    $("#msgSubmit-contact").removeClass().addClass(msgClasses).text(msg);
}