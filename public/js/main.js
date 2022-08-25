$('#js-ajax-test').click(() => {
    var name = $('#name').val();
    var messages = $('#message').val();
    $.ajax({
        type: 'POST',
        dataType: 'json',
        data: {
            action: 'test',
            name: name,
            messages: messages
        },
        success: function (msg) {
           // alert(msg.message);
        }
    })
    
});