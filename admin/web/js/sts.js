/**
 * Created by iven on 2017/5/9.
 */

$(document).ready(function () {
    $("input[type=hidden]").parent("div").removeClass();
});
$(document).on('click', 'button[data-original-title="Remove"]', function () {
    $(this).parents("div[class='col-lg-6']").first().fadeOut("slow", function () {
        $(this).remove();
    });
});
$(document).on('change', 'select[name="open_cap"]', function () {
    if ($('select[name="open_cap"]').val() == 1) {
        $('input[name="Deliver[daily_cap]"]').val('-1').attr("readonly", "readonly");
    } else if ($('select[name="open_cap"]').val() == 0) {
        $('input[name="Deliver[daily_cap]"]').attr("readonly", false);
        $('input[name="Deliver[daily_cap]"]').val('');
    }
});

$('#sts-submit-button').on('click', function () {
    $('.sts-form').each(function () {
        $(this).submit();
    });
});
$('.sts-form').each(function () {
    var form = $(this);
    $('body').on('beforeSubmit', 'form#' + form.attr('id'), function () {
        // form = $(this);
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
                // $('#campaign-detail-content').append(response.Success+'<br>');
                // $('#campaign-detail-modal').modal('show');
            }
        });
        return false;
    }).on('submit', function (e) {
        e.preventDefault();
    });
});