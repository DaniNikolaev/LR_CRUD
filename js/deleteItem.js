$( document ).ready(function() {
    $(".delete").click(function(){
        if (window.confirm("Удалить запись?")) {
            window.location.replace('/LR_CRUDS/'+$(this).attr("data-EntityName")+'/'+$(this).attr("data-itemId")+'/delete');

        }
    });
});
