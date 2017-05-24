/**
 * Created by iven.wu on 1/30/2017.
 */
$(function () {

    $(document).on("click", "button[data-view=0]", function(e) {
        // alert('aaa');
        $('#campaign-detail-modal').modal('show').find('#campaign-detail-content').load($(this).attr('value'));
        //$.pjax.reload({container:"#countries"});  //Reload GridView

    });
    $('#campaign-detail-modal').on('hidden.bs.modal', function () {
        // do something…
        $.pjax.reload({container:"#countries"});  //Reload GridView
    })


});
$(document).ready(function () {
    $('.dropdown-toggle').dropdown();
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