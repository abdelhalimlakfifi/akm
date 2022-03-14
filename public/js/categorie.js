$(document).ready(function () {
    $('#catTable').DataTable({
        scrollY: 300,
        scrollX: true,
        scrollCollapse: true,
        paging: true,
        fixedColumns: true
    });
});

function clickSub(action)
{
    let label = null;
    let description = null;
    let url = null;
    let _token = $("input[name=_token]").val();
    if(action == 'add')
    {
        label = $("#label").val();
        description = $("#description").val();
        url = "/admin/post/categorie/add";
    } else if(action == 'update'){
        

        label = $("#labelUpdate").val();
        description = $("#descriptionUpdate").val();
        let id = document.getElementById('idUpdated').innerHTML;
        console.log(id);
        url = `/admin/post/categorie/update/${id}`;
    }
    
    $.ajax({
        url: url,
        type:"POST",
        data:{
            label: label,
            description: description,
            _token:_token
        },
        success: function (response) 
        {
            if (response) {
                Swal.fire(
                    'تم الحفض بنجاح',
                    '',
                    'success'
                );
                if(action == 'add')
                {
                    let errorArea = document.getElementById("errorMessage");
                    errorArea.setAttribute("hidden", true);
                    console.log(response);
                    $("#categorieForm")[0].reset();
                    var table = document.getElementById("catTable");
                    var row = table.insertRow(0);
                    var id = row.insertCell(0);
                    id.innerHTML = response.id;
                    var label = row.insertCell(1);
                    label.innerHTML = response.label;
                    var description = row.insertCell(2);
                    description.innerHTML = response.description
                    var numSub = row.insertCell(3);
                    numSub.innerHTML = '0000'
                    var actions = row.insertCell(4);
                    actions.innerHTML = `<a href="" class="btn btn-outline-primary"> Update</a> <a href="/admin/post/categorie/delete/${response.id}" class="btn btn-danger"> Delete</a> `
                } else {
                    document.location.reload(true)
                }
            }
        },
        error: function(res)
        {
            let errors = res.responseJSON.errors;
            let errorArea = document.getElementById("errorMessage");
            errorArea.removeAttribute("hidden");
            errorArea.innerHTML = errors.label[0]
        }
    })
}

function actionCat(id, action, row)
{
    if(action == 'delete'){
        let url = '/admin/post/categorie/delete/' + id;
        let _token = $("input[name=_token]").val();
        Swal.fire({
            title: 'هل أنت واثق؟',
            text: "لن تتمكن من التراجع عن هذا!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'تراجع',
            confirmButtonText: 'نعم ، احذفها!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url:url,
                    type:"delete",
                    data:{
                        _token:_token
                    },
                    success: function (res){
                        var i = row.parentNode.parentNode.rowIndex;
                        document.getElementById("catTable").deleteRow(i);
                        Swal.fire(
                            'تم الحذف بنجاح !',
                            '',
                            'success'
                        );
                    }
                })
                
            }
        })
    } else if(action == 'update'){
        // labelUpdate
        // descriptionUpdate
        var i = row.parentNode.parentNode.rowIndex;
        var label = document.getElementById('catTable').rows[i].cells[1].innerHTML;
        var description = document.getElementById('catTable').rows[i].cells[2].innerHTML;
        
        document.getElementById('labelUpdate').value = label;
        document.getElementById('descriptionUpdate').innerHTML = description;
        document.getElementById('idUpdated').innerHTML = id;

        $('#catUpdateModal').modal('show');
    }
}