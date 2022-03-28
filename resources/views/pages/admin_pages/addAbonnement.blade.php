@extends('layouts.sidebar')

@section('content')

<!--  -->

<div class="container w-50 p-3">
    <form>
        <!-- Text input for full name -->
        <div class="form-outline mb-4">
            <label class="form-label" for="form6Example3">الاسم الكامل</label>
            <input type="text" id="form6Example3" class="form-control" />
        </div>

        <!-- Text input for email -->
        <div class="form-outline mb-4">
            <label class="form-label" for="form6Example4">البريد الالكتروني</label>
            <input type="text" id="form6Example4" class="form-control" />
        </div>

        <!-- 2 column grid layout with text inputs for the Phone & CIN -->
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="form6Example1">رقم الهاتف</label>
                    <input type="text" id="form6Example1" class="form-control" />
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="form6Example2">ر.ب.و | CIN</label>
                    <input type="text" id="form6Example2" class="form-control" />
                </div>
            </div>
        </div>

        <!-- 2 column grid layout with text inputs for the Phone & CIN -->
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <label for="form6Example1" class="form-label">الجنس</label>
                    <select id="form6Example1" class="form-control">
                        <option selected>...إختر</option>
                        <option value="male">ذكر</option>
                        <option value="female">أنثى</option>
                    </select>

                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="form6Example1">تاريخ الازدياد</label>
                    <input type="date" id="form6Example1" class="form-control" />
                </div>
            </div>
        </div>

        <!-- 2 column grid layout with text inputs for the Phone & CIN -->
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="form6Example1">مساهمة للشهر</label>
                    <input type="number" id="form6Example1" class="form-control" />
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="form6Example1">عدد الشهور المؤداة</label>
                    <input type="number" id="form6Example1" class="form-control" />
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <label class="text-white mb-3 lead">Where do you live?</label>
                        <!-- Multiselect dropdown -->
                        <select multiple data-style="bg-white rounded-pill px-4 py-3 shadow-sm "
                            class="selectpicker w-100">
                            <option>United Kingdom</option>
                            <option>United States</option>
                            <option>France</option>
                            <option>Germany</option>
                            <option>Italy</option>
                        </select><!-- End -->
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="form6Example1">عدد الشهور المؤداة</label>
                    <input type="number" id="form6Example1" class="form-control" />
                </div>
            </div>
        </div>




        <!-- <div class="form-outline mb-4">
            <input class="form-check-input me-2" type="checkbox" value="" id="form6Example8" checked />
            <label class="form-check-label" for="form6Example8"> Create an account? </label>
        </div>
        <div class="form-outline mb-4">
            <input class="form-check-input me-2" type="checkbox" value="" id="form6Example8" checked />
            <label class="form-check-label" for="form6Example8"> Create an account? </label>
        </div>
        <div class="form-outline mb-4">
            <input class="form-check-input me-2" type="checkbox" value="" id="form6Example8" checked />
            <label class="form-check-label" for="form6Example8"> Create an account? /label>
        </div> -->
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Place order</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
</script>
<script src="{{ asset('multiselect-dropdown.js')}}"></script>

@endsection
