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

        <!-- Message input -->
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form6Example8" checked />
                    <label class="form-check-label" for="form6Example8"> Create an account? </label>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form6Example8" checked />
                    <label class="form-check-label" for="form6Example8"> Create an account? </label>
                </div>
            </div>
        </div>
        <<div class="form-outline mb-4">
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
        </div>
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Place order</button>
    </form>
</div>


@endsection
