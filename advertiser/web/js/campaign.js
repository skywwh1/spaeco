/**
 * Created by iven on 2017/6/2.
 */
// alert(99);
$('#publisher-div').hide();

$('#campaign-publisher').change(function () {
    var val = $(this).val();
    if(val == '0'){
        $('#publisher-div').show();
    }else{
        $('#publisher-div').hide();

    }
});