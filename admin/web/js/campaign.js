/**
 * Created by iven on 2017/4/29.
 */
$(document).on('change', 'select[name="open_cap"]', function () {
    if ($('select[name="open_cap"]').val() == 1) {
        $('input[name="Campaign[daily_cap]"]').val('-1').attr("readonly", "readonly");
    } else if ($('select[name="open_cap"]').val() == 0) {
        $('input[name="Campaign[daily_cap]"]').attr("readonly", false);
        $('input[name="Campaign[daily_cap]"]').val('');
    }
});
