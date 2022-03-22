function formSubmit(event)
{
    event.preventDefault();
    tinyMCE.triggerSave();
    let formData        = new FormData();
    var principleImage  = $('#principle_image').prop('files')[0];
    let _token          = $("input[name=_token]").val();
    let TotalFiles           = $('#files')[0].files.length;
    let files = $('#files')[0];
    for (let i = 0; i < TotalFiles; i++) {
        formData.append('files' + i, files.files[i]);
    }

    formData.append('_token', _token);
    formData.append('title', $('#title').val());
    formData.append('principleImage', principleImage);
    formData.append('totalFiles', TotalFiles);
    formData.append('contentTextArea', $('#contentTextArea').val());
    formData.append('domainOption', $('#domainOption').val());
    
    
    $.ajax({
        url:'/admin/post/article/create',
        dataType:'text',
        cache       : false,
        contentType : false,
        processData : false,
        data        : formData,
        type: "post",
        success: function (response) {
            console.log(response);
            console.log();
            Swal.fire(
                'تم الحفض بنجاح',
                '',
                'success'
            );
            document.getElementById('article_form').reset();
        },
        error: function(res)
        {
            errorMessage = ""
            let ifExiste = JSON.parse(res.responseText).errors.hasOwnProperty("title") || JSON.parse(res.responseText).errors.hasOwnProperty("principleImage") || JSON.parse(res.responseText).errors.hasOwnProperty("domainOption") || JSON.parse(res.responseText).errors.hasOwnProperty("contentTextArea")
            
            if(JSON.parse(res.responseText).errors.hasOwnProperty("title")){
                errorMessage += "\nالمرجو إدخال العنوان"
            }
            if(JSON.parse(res.responseText).errors.hasOwnProperty("principleImage")){
                errorMessage += "المرجو ادخال الصورة الرئسية بصيغة JPG/PNJ/JPEG \n"
            }
            if(JSON.parse(res.responseText).errors.hasOwnProperty("domainOption")){
                errorMessage += "\nالمرجو إختيار الشعبة"
            }
            if(JSON.parse(res.responseText).errors.hasOwnProperty("contentTextArea")){
                errorMessage += "المرجو إدخال المحتوى"
            }
            // console.log(errorMessage);
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: errorMessage
            })
        }
    })
}

function cancel()
{
    document.getElementById('article_form').reset();
}