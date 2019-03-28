function ajax_getCorrectScore(personId,scoreWrapperElement) {
    $.ajax({
        type: "POST",
        url: site_url + "/scoreboard/ajaxGetScore",
        data: {personId: personId},
        success: function (result) {
            scoreWrapperElement.html(result);
        },
        error: function (xhr, status, error) {
            console.log("-- ERROR IN AJAX --\n\n" + xhr.responseText);
        }
    });
}

$(document).ready(function () {
    $('img').click(function () {
        const personId=$(this).data('id');
        const scoreWrapperElement=$('.score-wrapper-'+personId);
        ajax_getCorrectScore(personId,scoreWrapperElement);
    });
});