function addQuestion(quest, exam){
    $.ajax({
        type: 'post',
        url: 'models/add_question.php',
        data: {
            add_qid: quest,
            add_eid: exam
        },
        success: function(data){
            $('#add-'+quest+'-'+exam).hide('slow');
            $('#remove-'+quest+'-'+exam).show('slow');
        }
    })
}