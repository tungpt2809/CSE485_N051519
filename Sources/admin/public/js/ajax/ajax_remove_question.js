function removeQuestion(quest, exam){
    $.ajax({
        type: 'post',
        url: 'models/remove_question.php',
        data: {
            remove_qid: quest,
            remove_eid: exam
        },
        success: function(data){
            $('#add-'+quest+'-'+exam).show('slow');
            $('#remove-'+quest+'-'+exam).hide('slow');
        }
    })
}