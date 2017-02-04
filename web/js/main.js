/**
 * Created by alex on 29/11/16.
 */
$(document).ready(function() {
    $('select').material_select();

    $( "#chassebundle_user_satisfaction_0" ).before( '<img id="satisfaction1" src="/img/red-smiley.png" />' );
    $( "#chassebundle_user_satisfaction_1" ).before( '<img id="satisfaction2" src="/img/lightred-smiley.png" />' );
    $( "#chassebundle_user_satisfaction_2" ).before( '<img id="satisfaction3" src="/img/lightgren-smiley.png" />' );
    $( "#chassebundle_user_satisfaction_3" ).before( '<img id="satisfaction4" src="/img/green-smiley.png" />' );
});