@extends('layouts.sidebar')

@section('content')
<script src="{{ asset('js/index.js') }}"></script>
<script>
    replaceClass('article');

</script>
<div class="container d-flex justify-content-center" dir="rtl">
    

    <form class="w-50">
        <div class="form-group text-center">
            <h2>كتابة مقال</h2>
        </div>
        <div class="form-group">
            <label for="title">عنوان</label>
            <input type="text" class="form-control" id="title" placeholder="عنوان">
        </div>
        <div class="form-group mt-3 mb-3">
            
            <label for="files"> إختيار صور </label>
            <input type="file" name="files" class="form-control-file" id="files" multiple accept="image/png, image/gif, image/jpeg, video/mp4,video/x-m4v,video/*">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Example textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect2">Example multiple select</label>
            <select class="form-control" id="exampleFormControlSelect2">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
    </form>


</div>
@endsection
