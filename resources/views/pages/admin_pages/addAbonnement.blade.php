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

<h1 class="text-center">إضافة مشترك</h1>
<div class="text-center">
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#catModal">
        إضافة مشترك
    </button>
</div>
<div class="container text-center">
    <div class="row text-center">
        <div class="col-6 col-md-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row align-items-center">

    </div>
    <div class="row align-items-end">

    </div>
</div>

<script src="{{ asset('js/categorie.js') }}"></script>
@endsection
