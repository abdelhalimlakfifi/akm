function formSubmit(event) {

    event.preventDefault();
    let sex = $('#sex').val();
    if (parseInt(sex) === 0) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'المرجو إختيار الجنس',
        })
        return
    } else {
        // alert('done');
        let checkedValues = []
        $('input:checkbox[name=checkBoxes]:checked').each(function () {
            checkedValues.push($(this).val());
        });
        if (checkedValues.length > 0) {
            let formData = new FormData();
            let fullname = $('#fullname').val();
            formData.append('fullname', fullname);
            let email = $('#email').val();
            formData.append('email', email);
            let phone = $('#phone').val();
            formData.append('phone', phone);
            let cin = $('#cin').val();
            formData.append('cin', cin);
            let sex = $('#sex').val();
            formData.append('sex', sex);
            let birthday = $('#birthday').val();
            formData.append('birthday', birthday);
            let price = $('#price').val();
            formData.append('price', price);
            let numOfMonths = $('#numOfMonths').val();
            formData.append('numOfMonths', numOfMonths);
            let _token = $("input[name=_token]").val();
            formData.append('_token', _token);
            let file = $('#image').prop('files')[0];
            formData.append('image', file);
            formData.append('checkedValues', checkedValues);
            $.ajax({
                url: "/admin/post/subscriber/add",
                type: "POST",
                dataType: 'text',
                cache: false,
                contentType: false,
                processData: false,
                data: formData,
                success: function (res) {
                    Swal.fire(
                        'تم الحفض بنجاح',
                        '',
                        'success'
                    );
                },
                error: function (res) {
                    console.log(res);

                }
            })
        } else {
            alert("المرجو اختيار على الاقل شعبة واحدة");
        }
    }
}
