@extends('layouts.sidebar')

@section('content')
<script src="{{ asset('js/index.js') }}"></script>
<script>
    replaceClass('categorie');

</script>
<!-- ======================================================================================== -->
<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="catModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">إضافة شعبة</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" dir="rtl">
                <form id="categorieForm">
                    @csrf
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label float-left">إسم الشعبة :</label>
                        <input type="text" class="form-control" name="label" id="label">
                    </div> 
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">وصف الشعبة :</label>
                        <textarea class="form-control" name="description" id="description"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">غلق </button>
                        <button type="button" class="btn btn-primary" id="submitButton" onclick="submit()">إضافة </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- ======================================================================================== -->


<div class="position-relative">
    <button type="button" class="btn btn-success position-absolute top-0 end-50" data-toggle="modal"
        data-target="#catModal">
        إضافة شعبة
    </button>
</div>
<div class="container mt-5">
    <table id="catTable" class="stripe row-border order-column" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>إسم الشعبة</th>
                <th>وصف الشعبة</th>
                <th> عدد المشتركين </th>
                <th> فعل </th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $categorie)
            <tr>
                <td>{{ $categorie->id }}</td>
                <td>{{ $categorie->label }}</td>
                <td>{{ $categorie->description }}</td>
                <td> 0000 </td>
                <td>
                    <a href="" class="btn btn-outline-primary"> Update</a>
                    <a href="" class="btn btn-danger"> Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
    <script>
        $(document).ready(function () {
            $('#catTable').DataTable({
                scrollY: 300,
                scrollX: true,
                scrollCollapse: true,
                paging: true,
                fixedColumns: true
            });
        });

        // document.getElementById('categorieForm').submit();

        function test(){
                let label = $("#label").val();
                let description = $("#description").val();
                // let _token = $("input[name=_token]").val();
                console.log(label, description, _token);
        }
        // $("form#categorieForm").submit(function (e) {
        //     console.log("test");
        //     e.preventDefault();
        //     // let label = $("#label").val();
        //     // let description = $("#description").val();
        //     // let _token = $("input[name=_token]").val();

        //     // $.ajax({
        //     //     url: "{{ route('post.add.categorie') }}",
        //     //     type: "POST",
        //     //     data: {
        //     //         label: label,
        //     //         description: description,
        //     //         _token: _token,
        //     //     },
        //     //     success: function (response) {
                    

        //     //         if (response) {
        //     //             Swal.fire(
        //     //                 'تم الحفض بنجاح',
        //     //                 '',
        //     //                 'success'
        //     //             )
        //     //             $("#categorieForm")[0].reset();
        //     //             var table = document.getElementById("catTable");
        //     //             var row = table.insertRow(0);
        //     //             var id = row.insertCell(0);
        //     //             id.innerHTML = response.id;
        //     //             var label = row.insertCell(1);
        //     //             label.innerHTML = response.label;
        //     //             var description = row.insertCell(2);
        //     //             description.innerHTML = response.description
        //     //             var numSub = row.insertCell(3);
        //     //             numSub.innerHTML = '0000'
        //     //             var actions = row.insertCell(4);
        //     //             actions.innerHTML = ' <a href="" class="btn btn-outline-primary"> Update</a> <a href="" class="btn btn-danger"> Delete</a> '

        //     //         }
        //     //     }
        //     // })
        // })

    </script>
@endsection
