function characterLimitation(element,characters){
     if(element.val().length>characters){
                        element.val(element.val().substr(0, characters));
                }
}
   
       $(document).ready(function() {
            $('#srch-term').keyup(function () {
                var valThis = $(this).val().toLowerCase();
                    $('#Question > div').each(function () {
                        var text = $(this).text().toLowerCase();
                        (text.indexOf(valThis) >= 0) ? $(this).show() : $(this).hide();
                        if (valThis == ""){
                          $(this).css("background-color", "white");
                      }else{
                        $(this).css("background-color", "yellow");
                    }
                    });

            });
        });