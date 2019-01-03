function deleteAjax(id){
    isOk = confirm("Bạn có muốn xóa ?");
    if(isOk){
        $.ajax({
            type: 'post',
            url: 'models/delete_exam.php',
            data: {delete_id: id},
            success: function(data){
                console.log(data);
                $('#delete-'+id).hide('slow');
            }
        })
    }
}