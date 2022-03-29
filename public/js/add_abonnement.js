function formSubmit(event)
{
    event.preventDefault();
    // alert('done');
    let fullname    = $('#fullname').val();
    let email       = $('#email').val();
    let phone       = $('#phone').val();
    let cin         = $('#cin').val();
    let sex         = $('#sex').val();
    let birthday    = $('#birthday').val();
    let price       = $('#price').val();
    let numOfMonths = $('#numOfMonths').val();

    let checkedValues = []
    $('input:checkbox[name=checkBoxes]:checked').each(function(){
        checkedValues.push($(this).val());
    });
    
}