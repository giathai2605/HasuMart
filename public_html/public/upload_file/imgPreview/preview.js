        $(function() {
    function readURL(input, selector) {
        if (input.files && input.files[0]) {
            let reader = new FileReader();

            reader.onload = function(e) {
                $(selector).attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#logo").change(function() {
        readURL(this, '#image_preview');
    });
    $("#image").change(function() {
        readURL(this, '#image_preview');
    });

});
