$(function() {
    $(".grid div").animate({height:"100%"},1000);

    $("#sendContact").click(function(){
        var name_el = $("#name");
        var email_el = $("#email");
        var sub_el = $("#sub");
        var text_el = $("#text");

        var name = $.trim(name_el.val());
        if(!name){
            $(name_el).css("background","rgb(255, 231, 231)");
            setTimeout(function() { $(name_el).css("background",""); }, 3000);
            return false;
        }

        var email = $.trim(email_el.val());
        var valid = ValidateEmail(email);
        if(!email || !valid){
            $(email_el).css("background","rgb(255, 231, 231)");
            setTimeout(function() { $(email_el).css("background",""); }, 3000);
            return false;
        }

        var sub = $.trim(sub_el.val());
        if(!sub_el){
            $(name_el).css("background","rgb(255, 231, 231)");
            setTimeout(function() { $(sub_el).css("background",""); }, 3000);
            return false;
        }

        var text = $.trim(text_el.val());
        if(!text){
            $(text_el).css("background","rgb(255, 231, 231)");
            setTimeout(function() { $(text_el).css("background",""); }, 3000);
            return false;
        }

        $.ajax({
            type: "GET",
            url: ajax_url,
            data: {
                action: 'contact',
                name: name,
                sub: sub,
                email: email,
                text: text
            },
            success: function (response) {
                $(".contact-form").html("<h1 class='success'>Success</h1>");
            },
            error: function (e) {
                $(".contact-form").html("<h1 class='error'>Error</h1>");
            }
        });

    });
    $(".morebtn").click(function(){
        var data = {
            'action': 'load_posts_by_ajax'
        };
        $(".morebtn").css("display","none");
        $.post(ajax_url, data, function(response) {
            $('#books .items').append(response);
        });
    });
    $(".searchIcon").click(function(){
        search();
    });

    $("#search_input").on('keyup', function (e) {
        if (e.keyCode == 13) {
            search();
        }
    });

});

function search(){
    $(".morebtn").css("display","none");
    var search = $.trim($("#search_input").val());
    var data = {
        'action': 'load_posts_search',
        'search': search
    };

    $.post(ajax_url, data, function(response) {
        if(!search){
            $(".morebtn").css("display","block");
        }
        $('#books .items').html(response);
    });
}

function ValidateEmail(mail)
{
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail))
    {
        return (true)
    }
    return (false)
}