function showSolution(id)
{
    var solution = $('#solution-'+id);
    if(solution.css('display') == 'block'){
        solution.css('display','none');
    }
    else solution.css('display','block');
}