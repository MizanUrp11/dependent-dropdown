$(document).ready(function () {
    $(document).on('change','#division',function () { 
        var division = $('#division').val();
        $.ajax({
            type: "POST",
            url: "ajax.php",
            data: {
                'division':division
            },
            success: function (response) {
             $('#district').replaceWith(response);
                $('#upazila').val('');
                $('#union').val('');
            }
        });
     })

    $(document).on('change','#district',function () { 
        var district = $('#district').val();
        $.ajax({
            type: "POST",
            url: "ajax.php",
            data: {
                'district': district
            },
            success: function (response) {
             console.log(response);   
             $('#upazila').replaceWith(response);
                $('#union').val('');
            }
        });
     })

    $(document).on('change','#upazila',function () { 
        var upazila = $('#upazila').val();
        $.ajax({
            type: "POST",
            url: "ajax.php",
            data: {
                'upazila': upazila
            },
            success: function (response) {
             console.log(response);   
             $('#union').replaceWith(response);
            }
        });
     })
});