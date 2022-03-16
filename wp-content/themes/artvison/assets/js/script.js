$(document).ready(function () {
    $(".mouse-event-service").mouseover(function () {
        $(this).find('i').removeClass('far').addClass('fas');
    });
    $(".mouse-event-service").mouseleave(function () {
        $(this).find('i').removeClass('fas').addClass('far');

    });
    $(".text-block").mouseover(function () {
        $(this).find('.text-show').hide();
        $(this).find('.text-hover').show();
    });
    $(".text-block").mouseleave(function () {
        $(this).find('.text-show').show();
        $(this).find('.text-hover').hide();
    });

    $(window).scroll(function () {
        var features_top = $("#company").offset().top;
        var top_of_window = $(window).scrollTop();
        if (top_of_window >= features_top) {
            $("#hide-menu").show("slow");
        } else {
            $("#hide-menu").hide("slow");
        }
    });
    $(".button-load").on("click", function (e) {
        document.getElementById("load_products").innerHTML = `<iframe src="${$(this).attr("page")}" class="responsive-iframe"></iframe>`;
        $('#Unloader_products').hide("slow");
        $('.loader_event').show("slow");
    });

    $(".radio-form-options").on("click", function () {
        var target = $(this).attr("data-target");
        if($(`#${target}`).hasClass('show')){
            $(`#${target}`).collapse("hide");
            $(this).css("color", "#212529")
            $(this).css("border-color", "#212529");
            $(this).css("background-color", "#FFF");
        }else{
            $(`#${target}`).collapse("show");
            $(this).css("color", "#FFF")
            $(this).css("border-color", "#212529");
            $(this).css("background-color", "#212529");
        }
    });

    $("#closeButton").on("click", function () {
        $('.loader_event').hide("slow");
        $('#Unloader_products').show("slow");
    });

    $('#telefone').focusout(function(){
		var phone, element;
		element = $(this);
		element.unmask();
		phone = element.val().replace(/\D/g, '');
		if(phone.length > 10) {
			element.mask("(99) 99999-9999");
		} else {
			element.mask("(99) 9999-99999");
		}
    });
})