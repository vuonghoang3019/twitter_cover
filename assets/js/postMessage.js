$(function(){
    $(document).on('click','#send',function(){
        var message = $('#msg').val();
        var get_id = $(this).data('user');
        $.post('http://localhost:81/twitter/core/ajax/messages.php',{sendMessage:message,get_id:get_id},function(data){
            getMessages();
            $('#msg').val('');
        });
    });     
    $(document).on('keyup','.search-user',function(){
        $('.message-recent').hide();
        var search = $(this).val();
        $.post('http://localhost:81/twitter/core/ajax/searchUserInMsg.php',{search:search},function(data){
           $('.message-body').html(data);
        });
    });
});