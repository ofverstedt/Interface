/**
 * Created by linasjogren on 2015-04-16.
 */
$(document).ready(function(){

    $('.header').click(function(){
            $(this).siblings('.child-'+this.id).toggle('fast');
        });
    $('tr[class^=child-]').hide().children('tr');
});