$(document).ready(function () {

    var navListItems = $('div.setup-panel div a'),
        allWells = $('.setup-content'),
        allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
            $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('active').addClass('nrml');
            $item.addClass('active');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function () {
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for (var i = 0; i < curInputs.length; i++) {
            if (!curInputs[i].validity.valid) {
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.active').trigger('click');
});



$(document).ready(function() {

    $(".wlc").hide();

    setTimeout(function () {
        $(".wrapper").hide(1000);
        $(".wlc").show(1000);

    }, 3000);

});

  
    //console.log("seif");
      /* $('#categories').on('change',function(e){
        console.log("seif");
    });
         console.log("seif");*/

         $(document).ready(function(){
$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
            $('.categories').change(function(){
                
                
                    var select=$('.categories').val();
                          var token = $("input[name='_token']").val();
                    console.log(select); 

                   
$.ajax({
    url:"creat",
    method:"POST",
    //dataType:"json",
    data:{select:select, _token:token},
    cache: false,
    success:function(){
        alert(select);

    
}
                   });

            });


         });


