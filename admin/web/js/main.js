$(document).ready(function () {
    // eraseCookie('tr-body-toggle');
    // alert ($.cookie());
    // $.removeCookie('tr-body-class'); // => true
    // console.log($.cookie());
    // $.removeCookie('name'); // => true
    // JS Code
    // krajeeDialog.confirm("Are you really sure you want to do this?", function (result) {
    //     if (result) { // ok button was pressed
    //         // execute your code for confirmation
    //     } else { // confirmation was cancelled
    //         // execute your code for cancellation
    //     }
    // });
    // $('.dropdown-toggle').dropdown();
    // alert(999);

});
$(function () {
    var body_menu = $('#nav-menu').data('menu');
    var element = $('ul li a').filter(function () {
        if (body_menu != undefined && this.dataset.menu == body_menu) {
            return true;
        }
    }).addClass('active').parent();
    while (true) {
        if (element.is('li')) {
            element.addClass('active');
            element.children('a').addClass('text-aqua');
            element = element.parent().addClass('in').parent();
        } else {
            break;
        }
    }

    // $('.dropdown-toggle').dropdown();

    $('body').tooltip({
        selector: '[data-toggle="tooltip"]',
    });

    // /**
    //  * sile bar collaspend
    //  */
    // if (!$.cookie('tr-body-class')) {
    //     $('body').addClass('sidebar-collapse');
    // }
    // $('#a-sidebar-toggle').click(function () {
    //     var body_class = $('body').attr('class');
    //     if (body_class.search('sidebar-collapse') != -1) {
    //         $.cookie('tr-body-class', 1);
    //     } else {
    //         $.removeCookie('tr-body-class');
    //     }
    // });
});

$(document).on("click", "a[data-name=crud-button]", function (e) {
    if ("undefined" !== $(this).attr('data-size')) {
        $('#index-crud-modal .modal-dialog').addClass($(this).attr('data-size'));
    }
    $('#index-crud-modal .modal-header').append('<h4 class="modal-title">' + $(this).attr('data-title') + '</h4>');
    $('#index-crud-modal').modal('show').find('#crud-detail-content').load($(this).attr('data-url'));
});

$(document).on('hidden.bs.modal', '#index-crud-modal', function () {
    $('#crud-detail-content').empty();
    $('#index-crud-modal .modal-header h4').remove();
});
/**
 * delete
 */
$(document).on("click", "a[data-name=delete]", function (e) {
    var $url = $(this).attr('data-url');
    krajeeDialog.confirm('Are you sure you want to delete ' + $(this).attr('data-title') + '?', function (result) {
        if (result) { // ok button was pressed
            console.log($url);
            $.ajax({
                type: "POST",
                cache: false,
                url: $url,
                dataType: "json",
                success: function (data) {
                    if (!data.status) {
                        alert(data);
                    } else {
                        $.pjax.reload({container: "#index-list"});  //Reload GridView
                    }
                }
            });
        }
    });
});

$(document).on('beforeSubmit', 'form#create-update-form', function () {
    var form = $(this);
    // return false if form still have some validation errors
    if (form.find('.has-error').length) {
        return false;
    }
    // submit form
    $.ajax({
        url: form.attr('action'),
        type: 'post',
        data: form.serialize(),
        success: function (response) {
            if (response.status) {
                $('#index-crud-modal').modal('hide');
                $.pjax.reload({container: "#index-list"});  //Reload GridView
            } else {
                alert(response);
            }
        },
        error: function () {
            console.log('internal server error');
        }
    });
    return false;
});