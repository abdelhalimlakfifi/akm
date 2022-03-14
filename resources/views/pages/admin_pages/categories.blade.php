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
                        <button type="button" class="btn btn-primary" onclick="clickSub('add')">إضافة </button>
                    </div>
                </form>
                <div class="alert alert-danger" id="errorMessage" role="alert" hidden>
                    
                </div>
            </div>

        </div>
    </div>
</div>
<div class="modal fade" id="catUpdateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">تحديث الشعبة</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#catUpdateModal').modal('hide')">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" dir="rtl">
                <form id="categorieForm">
                    @csrf
                    <p id="idUpdated" hidden></p>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label float-left">إسم الشعبة :</label>
                        <input type="text" class="form-control" name="labelUpdate" id="labelUpdate">
                    </div> 
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">وصف الشعبة :</label>
                        <textarea class="form-control" name="descriptionUpdate" id="descriptionUpdate"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" onclick="$('#catUpdateModal').modal('hide')">غلق </button>
                        <button type="button" class="btn btn-primary" onclick="clickSub('update')">تحديث </button>
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
                    <!-- <a href="" class="btn btn-outline-primary"> Update</a> -->
                    
                    <!-- <a href='/admin/post/categorie/delete/{{{ $categorie->id }}}' class="btn btn-danger"> Delete</a> -->
                    <button class="btn btn-outline-primary" onclick="actionCat({{ $categorie->id }}, 'update', this)"> Update </button>
                    <button class="btn btn-danger" onclick="actionCat({{ $categorie->id }}, 'delete', this)"> Delete </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
    <script src="{{ asset('js/categorie.js') }}"></script>
@endsection
