@extends('layouts.sidebar')

@section('content')
<script src="{{ asset('js/index.js') }}"></script>
<script>
    replaceClass('article');

</script>
<div class="container d-flex justify-content-center" dir="rtl">
    

    <form id="article_form" onsubmit="return formSubmit(event);" class="w-50" enctype="multipart/form-data">
        @csrf
        <div class="form-group text-center">
            <h2>كتابة مقال</h2>
        </div>
        <div class="form-group">
            <label for="title">عنوان</label>
            <input type="text" name="title" required class="form-control" id="title" placeholder="عنوان">
        </div>
        <div class="form-group mt-3 mb-3">
            <label for="files"> إختيار الصورة الرئسية </label>
            <input type="file" name="principle_image" class="form-control-file" id="principle_image" accept="image/png, image/gif, image/jpeg">
        </div>
        <div class="form-group mt-3 mb-3">
            <label for="files"> إختيار صور </label>
            <input type="file" name="files[]" class="form-control-file" id="files" multiple accept="image/png, image/gif, image/jpeg, video/mp4,video/x-m4v,video/*">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">  </label>
            <textarea class="form-control" id="contentTextArea" name="contentTextArea" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect2">Example multiple select</label>
            <select class="form-control" id="exampleFormControlSelect2" name="domain">
                @foreach($domains as $domain)
                    <option value="{{ $domain->id }}">{{ $domain->label }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit">Submit</button>
    </form>
    <script src="{{ asset('js/articles.js') }}"></script>
    <script src="https://cdn.tiny.cloud/1/01wxryr029aln5mghl92gqyxeip775dkfzelzlrsi9uvau00/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector:'#contentTextArea'
        })
    </script>
</div>
@endsection
