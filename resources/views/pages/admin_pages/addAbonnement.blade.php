@extends('layouts.sidebar')

@section('content')

<div class="container w-50 p-3">
    <form id="addAbonnement" onsubmit="return formSubmit(event);" enctype="multipart/form-data">
        <!-- Text input for full name -->
        <div class="form-outline mb-4">
            <label class="form-label" for="fullname">الاسم الكامل</label>
            <input type="text" id="fullname" name="fullname" class="form-control" required/>
        </div>

        <!-- Text input for email -->
        <div class="form-outline mb-4">
            <label class="form-label" for="email">البريد الالكتروني</label>
            <input type="email" id="email" name="email" class="form-control" />
        </div>

        <!-- 2 column grid layout with text inputs for the Phone & CIN -->
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="phone">رقم الهاتف</label>
                    <input type="text" id="phone" name="phone" class="form-control" required />
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="cin">ر.ب.و | CIN</label>
                    <input type="text" id="cin" name="cin" class="form-control" required />
                </div>
            </div>
        </div>

        <!-- 2 column grid layout with text inputs for the Phone & CIN -->
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <label for="sex" class="form-label">الجنس</label>
                    <select id="sex" name="sex" class="form-control" required>
                        <option selected>...إختر</option>
                        <option value="male">ذكر</option>
                        <option value="female">أنثى</option>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="birthday">تاريخ الازدياد</label>
                    <input type="date" id="birthday" name="birthday" required class="form-control" />
                </div>
            </div>
        </div>

        <!-- 2 column grid layout with text inputs for the Phone & CIN -->
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="price">مساهمة للشهر</label>
                    <input type="number" id="price" class="form-control" required />
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="numOfMonths">عدد الشهور المؤداة</label>
                    <input type="number" id="numOfMonths" class="form-control" required/>
                </div>
            </div>
        </div>

        @foreach($domains as $domain)
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <input class="form-check-input me-2 checkBoxes" type="checkbox" name="checkBoxes" value="{{ $domain[0]['id'] }}" id="{{ $domain[0]['id'] }}"  />
                    <label class="form-check-label" for="{{ $domain[0]['id'] }}"> {{ $domain[0]['label'] }}</label>
                </div>
            </div>
            @isset($domain[1])
            <div class="col">
                <div class="form-outline">
                    <input class="form-check-input me-2 checkBoxes" type="checkbox" name="checkBoxes" value="{{ $domain[1]['id'] }}" id="{{ $domain[1]['id'] }}"  />
                    <label class="form-check-label" for="{{ $domain[1]['id'] }}"> {{ $domain[1]['label']}}</label>
                </div>
            </div>
            @endisset
        </div>
        @endforeach
        <button type="submit" class="btn btn-primary btn-block mb-4">حفظ</button>
    </form>
</div>

<script src="{{ asset('js/add_abonnement.js') }}"></script>

@endsection