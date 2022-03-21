    // $('#article_form').submit(function (event){
    //     console.log("111");
    //     event.preventDefault();
    //     $.ajax({
    //         url:'/admin/post/article/create',
    //         type:'POST',
    //         data:new FormData(this),
    //         dataType:'JSON',
    //         contentType: false,
    //         cache: false,
    //         processData: false,
    //         success:function(data)
    //                 {
    //                     alert("Done")
    //                 }
    //     })
    // })

function formSubmit(event){
    event.preventDefault();
    let formData        = new FormData();
    var principleImage  = $('#principle_image').prop('files')[0];
    let _token          = $("input[name=_token]").val();
    let TotalFiles           = $('#files')[0].files.length;
    let files = $('#files')[0];
    for (let i = 0; i < TotalFiles; i++) {
        formData.append('files' + i, files.files[i]);
        }

    formData.append('principleImage', principleImage);
    formData.append('_token', _token);
    formData.append('totalFiles', TotalFiles);
    
    // var images = $('#files').prop('files');
    // console.log(principleImage, images);
    $.ajax({
        url:'/admin/post/article/create',
        dataType:'text',
        cache       : false,
        contentType : false,
        processData : false,
        data        : formData,
        type: "post",
        success: function (output) {
            console.log(output);
            alert("Done")
        }
    })
}