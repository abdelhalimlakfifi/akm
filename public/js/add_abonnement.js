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
    let _token = $("input[name=_token]").val();

    let checkedValues = []
    $('input:checkbox[name=checkBoxes]:checked').each(function(){
        checkedValues.push($(this).val());
    });
    if(checkedValues.length > 0)
    {
        $.ajax({
        url: "/admin/post/subscriber/add",
            type: "POST",
            data: {
                fullname,
                email,
                phone,
                cin,
                sex,
                birthday,
                price,
                numOfMonths,
                checkedValues,
                _token
            },
            success: function(res){
    
            },
            error: function(res){
    
            }
        })
    } else {
        alert("المرجو اختيار على الاقل شعبة واحدة");
    }
}