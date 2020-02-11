$(document).ready(function() {

    function initResetFilterButton() {
        $(".kv-editable-popover button.kv-editable-reset").on("click", function() {
            $(".kv-editable-popover button.close").click();
        });
    }
    initResetFilterButton();

});
