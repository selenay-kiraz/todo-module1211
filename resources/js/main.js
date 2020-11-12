// $.ajax({
//        type:'GET',
//        url: "http://oc.test/api/todos",
//        success: function(todo){
//            console.log('success', todo);
//        }
//    });
function yenile() {
    var service = 'http://oc.test/api/todos';
    $(document).ready(function () {
        $.ajax({
            type: "GET",
            url: service,
            data: "{}",
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            cache: false,
            success: function (data) {
                var trHTML = '';
                console.log(data)
                $.each(data, function (i, item) {
                    trHTML += '<tr><td>' + item.id + '</td><td>' + item.user_id_id + '</td><td>' + item.name + '</td></tr>';
                });
                $('#todo').append(trHTML);
            },
            error: function (msg) {
                alert(msg.responseText);
            },
        });
    });
}


$(document).ready(function () {
    $("#btn-add").on("click", function () {
        var name = $("input[name=name]").val();

        $.ajax({
            url: "/api/ekle",
            type: "POST",
            data: {
                name: $("input[name=name]").val()
            },
            success: function (response) {
                console.log(response)
                $('#exampleModal').modal('hide')
                // alert("Todo kaydedildi!");
            },
            error: function (error) {
                console.log(error)
            }
        });
    });
});
$(document).on('click', '.add', function (e) {
    var name = $(this).attr("data-name");
    $('#name_u').val(name);
});


// $(document).on('click','#btn-add', function add (e) {
//     var service = "http://oc.test/todos/ekle";
//     $.ajax({
//         type: "GET",
//         url: service,
//         data: {},
//         success: function(data){
//             var trHTML = '';
//             if(data.statusCode===200){
//                 $('#todo').modal('hide');
//                 alert('Veri başarıyla eklendi!');
//                 location.reload();
//             }
//             else if(data.statusCode===201){
//                 alert(data);
//             }
//         }
//     });
// });

// if(data.statusCode==200){
//     $('#addEmployeeModal').modal('hide');
//     alert('Data added successfully !');
//     location.reload();
// }
// else if(data.statusCode==201){
//     alert(data);
// }