$( document ).ready(function() {
    $('#chassebundle_job_domain').change(function () {
        var domain = $(this).val();
        $.ajax({
            type: "POST",
            url: "/interview/choose/" + domain,
            dataType: 'json',
            timeout: 3000,
            success: function (response) {
                var jobs = JSON.parse(response.data);
                html = "<option value='' disabled selected>Choisis le métier</option>";
                for (i = 0; i < jobs.length; i++) {
                    html += "<option value='" + jobs[i].id + "'>" + jobs[i].name + "</option>";
                }
                $('#job_choices').html(html).material_select();
            },
            error: function () {
                $('#job_choices').text('Ajax call error');
            }
        });
    });
    $(document).on('change','#job_choices', function (){
        $('#chassebundle_job_name').val($(this).val());
        $('#btn_jobselect').removeClass('disabled');

    })
});