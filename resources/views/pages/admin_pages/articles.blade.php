@extends('layouts.sidebar')

@section('content')
<script src="{{ asset('js/index.js') }}"></script>
<script>
    replaceClass('article');

</script>
<div class="container d-flex justify-content-center" dir="rtl">
    

    <form method="post" action="/test" class="w-50">
        @csrf
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
            <textarea class="form-control" id="contentTextArea" name="contentTextArea" rows="3"></textarea>
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

        <button type="submit">Submit</button>
    </form>

    <script src="https://cdn.tiny.cloud/1/01wxryr029aln5mghl92gqyxeip775dkfzelzlrsi9uvau00/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector:'#contentTextArea'
        })
    </script>
</div>
@endsection
