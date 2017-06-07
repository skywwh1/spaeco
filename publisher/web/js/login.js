/**
 * Created by iven on 2017/6/6.
 */

$(document).on('change', '#logintype', function () {

    // alert($(this).val());
    var type = $(this).val();
    if ("a" === type) {
        $(location).attr('href', 'http://advertiser.spaeco.com/site/login');
    }
})