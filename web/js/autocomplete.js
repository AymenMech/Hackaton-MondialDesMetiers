$( document ).ready(function() {

    // Var used to track number of chips already chosen
    var nbrep = 0;

    // Used to disable text field and button when reaching maximum number of words
    function disabchoice () {
        $('#inputword').val("").prop('disabled', true);
        $("#noidea").prop('disabled', true);
    }

    // Used to reenable text field and button
    function enabchoice () {
        $('#inputword').prop('disabled', false);
        $("#noidea").prop('disabled', false);
    }

    // Function used to treat Ajax answer from button and autocomplete and puts chips
    function putchips (word) {
        html = "";
        for (i = 0; i < word.length; i++) {
            if ($('#chassebundle_interview_answers_' + word[i].id).is(':checked')){
            }
            else {
                html +=
                    '<div class="chip tochoose" id="'+ word[i].id +'"> # ' + word[i].word + '</div>'
            }
        }
        $('#wordautocomp').html(html);
    }

    // Ajax function for autocomplete
    $("#inputword").keyup(function(){
        var wordp = $(this).val();
        if ( wordp.length >= 3 ) {
            $.ajax({
                type: "POST",
                url: "/interview/search/" + wordp,
                dataType: 'json',
                timeout: 3000,
                success: function(response){
                    var result = JSON.parse(response.data);
                    putchips(result)},
                error: function() {
                    $('#wordautocomp').text('Ajax call error');
                }
            });
        }
    });

    // Ajax function for help button
    $("#noidea").click(function(){
        var jobid = $('#chassebundle_interview_job').val();
        $.ajax({
            type: "POST",
            url: "/interview/searchhelp/"+ jobid,
            dataType: 'json',
            timeout: 3000,
            success: function(response){
                var result = JSON.parse(response.data);
                putchips(result)},
            error: function() {
                $('#wordautocomp').text('Ajax call error');
            }
        });

    });

    // Allow user to pick and remove chips from his choices
    $(document).on('click', '.chip', function() {
        var chipclicked = '#chassebundle_interview_answers_' + $(this).attr('id');
        if ($(this).hasClass("tochoose")) {
            nbrep++;
            $(chipclicked).prop( "checked", true );
            $(this).addClass('chosen').removeClass('tochoose').append('<i class="close material-icons">close</i>').appendTo($("#chipchosen"));
            $('#wordautocomp').empty();
            if (nbrep == 5) {
                disabchoice();
                $('#nbresponse').html('Tu as atteint le maximum de réponses autorisées.');
            }
            else {
                $('#nbresponse').html('Il te reste encore maximum ' + (5 - nbrep) + ' reponses à donner.');
            }

        }
        else {
            nbrep--;
            $(chipclicked).prop("checked", false);
            $(this).remove();
            if (nbrep == 4) {
                enabchoice();
            }
            $('#nbresponse').html('Il te reste encore jusqu\'à ' + (5-nbrep) + ' reponses à donner.');
        }
    });

    //display the helper on click on question mark

        $('.modal').modal();

});