// $(document).ready(function(event) {
//     event.preventDefault();
//     $('#send_group_chat').click(function() {
//         var messages = $('#group_chat_message').html();
//         alert(messages);
//         var from_user_id = $('#from_user_id').val();
//         var from_user_id = $('#from_user_id').val();

//         if (messages != '') {
//             $.ajax({
//                 url: "insert.php",
//                 type: "POST",
//                 async: false,
//                 data: {
//                     "fromuser_id": fromuser_id,
//                     "touser_id": touser_id,
//                     "messages": messages

//                 },
//                 success: function(data) {
//                     $('#group_chat_message').html('');

//                 }
//             })
//         }
//     });
$(document).ready(function() {

    $("#send_group_chat").click(function(event) {
        event.preventDefault();
        var message = $('#group_chat_message').html();
        var from_id = $("#from_id").val();
        var to_id = $("#to_id").val();


        if (message != '') {

            $.ajax({
                url: "insert.php",
                type: "POST",
                async: false,
                data: {
                    "from_id": from_id,
                    "to_id": to_id,
                    "message": message

                },
                success: function(data) {
                    $('#group_chat_message').html('');
                }
            });
        }
    })
    $("#uploadFile").click(function(event) {
        var image = $('#uploadImage').html();
        alert(suja);
        $('#group_chat_message').html(image);
    });
    // $('#uploadFile').on('change', function() {
    //     var image = $('#uploadImage').val();
    //     alert(suja);
    //     $('#group_chat_message').html();

    //     // $('#uploadImage').ajaxForm({
    //     //     target: "#group_chat_message",
    //     //     resetForm: true
    //     // });
    // });

});