@extends('layouts.sidebar')
@section('content')
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
<!-- ======================================================================================== -->

<h1>Test</h1>
<div class="position-relative">
    <button type="button" class="btn btn-success position-absolute top-0 end-50" data-toggle="modal"
        data-target="#catModal">
        إضافة مشترك    
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
            
            <!-- <tr>
                <td></td>
                <td></td>
                <td></td>
                <td> 0000 </td>
                <td> 
                    <button class="btn btn-outline-primary" onclick="actionCat(, 'update', this)"> Update </button>
                    <button class="btn btn-danger" onclick="actionCat(, 'delete', this)"> Delete </button>
                </td>
            </tr> -->
            
        </tbody>
    </table>
</div>
    <script src="{{ asset('js/categorie.js') }}"></script>
@endsection
