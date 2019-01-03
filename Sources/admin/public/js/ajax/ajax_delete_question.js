function deleteAjax(id){
    isOk = confirm("Bạn có muốn xóa ?");
    if(isOk){
        $.ajax({
            type: 'post',
            url: 'models/delete_question.php',
            data: {delete_id: id},
            success: function(data){
                $('#delete-'+id).hide('slow');
            }
        })
    }
}