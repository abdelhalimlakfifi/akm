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
            Swal.fire(
                'تم الحفض بنجاح',
                '',
                'success'
            );
            document.getElementById('article_form').reset();
        }
    })
}

function cancel()
{
    document.getElementById('article_form').reset();
}