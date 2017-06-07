/**
 * Created by iven on 2017/6/6.
 */

$(document).on('change', '#logintype', function () {

    // alert($(this).val());
    var type = $(this).val();
    if ("b" === type) {
        $(location).attr('href', 'http://publisher.spaeco.com/site/login');
    }
})