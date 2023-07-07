@extends('master')
@section('title')
    Code Wall Technology
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/formStyle.css') }}" />
@endsection

@section('content')
    {{-- <div class="img">
        <img src="{{ asset('paymentImg/logo2.png') }}" alt="">
    </div> --}}
    <div class="body">
        <div class="container1">
            <header>Java Zoom Batch 20 Registration</header>

            <form action="{{ route('formPage#create') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form first">

                    <div class="details personal mb-4">
                        <span class="title">Personal Info</span>
                        {{-- <input type="hidden" name="regId"> --}}

                        <div class="fields">
                            <div class="input-field form-floating">
                                <input type="text" name="regName" id="name" value="{{ old('regName') }}"
                                    class="form-control @error('regName')
                                is-invalid
                            @enderror"
                                    placeholder=" " />
                                <label for="name">Full Name</label>
                                @error('regName')
                                    <small class="invalid-feedback" style="margin-top: 70px; font-size: 11px;">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>

                            <div class="input-field form-floating">
                                <input type="email" name="regEmail" id="email" value="{{ old('regEmail') }}"
                                    class="form-control @error('regEmail')
                                is-invalid
                            @enderror"
                                    placeholder=" " />
                                <label for="email">Email</label>
                                @error('regEmail')
                                    <small class="invalid-feedback" style="margin-top: 70px; font-size: 11px;">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>

                            <div class="input-field form-floating">
                                <input type="number" name="regPhone" id="phone" value="{{ old('regPhone') }}"
                                    class="form-control @error('regPhone')
                                is-invalid
                            @enderror"
                                    placeholder=" " />
                                <label for="phone">Phone Number</label>
                                @error('regPhone')
                                    <small class="invalid-feedback" style="margin-top: 70px; font-size: 11px;">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>

                            <div class="input-field form-floating">
                                <input type="text" name="regJob" id="job" value="{{ old('regJob') }}"
                                    class="form-control @error('regJob')
                                is-invalid
                            @enderror"
                                    placeholder=" " />
                                <label for="job">Current Job</label>
                                @error('regJob')
                                    <small class="invalid-feedback" style="margin-top: 70px; font-size: 11px;">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>

                            <div class="input-field form-floating">
                                <input type="text" name="regSchool" id="school" value="{{ old('regSchool') }}"
                                    class="form-control @error('regSchool')
                                is-invalid
                            @enderror"
                                    placeholder=" " />
                                <label for="school">School & University</label>
                                @error('regSchool')
                                    <small class="invalid-feedback" style="margin-top: 70px; font-size: 11px;">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>

                            <div class="input-field form-floating">
                                <input type="text" name="regFb" id="fb" value="{{ old('regFb') }}"
                                    class="form-control @error('regFb')
                                is-invalid
                            @enderror"
                                    placeholder=" " />
                                <label for="fb">Facebook account (Profile Link)</label>
                                @error('regFb')
                                    <small class="invalid-feedback" style="margin-top: 70px; font-size: 11px;">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>

                        </div>
                    </div>

                    <div class="details ID mt-3">
                        <span class="title">Educational Background</span>
                        <div class="fields">

                            <div class="checkbox-group mb-4 position-parent1">
                                <span class="label">လေ့လာခဲ့ဖူးသော <br> Programming languages :</span>
                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="checkbox" name="regLanguages[]" value="javascript"
                                        id="js" />
                                    <label class="form-check-label" for="js">JavaScript</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="regLanguages[]" value="java"
                                        id="java" />
                                    <label class="form-check-label" for="java">Java</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="regLanguages[]" value="dart"
                                        id="dart" />
                                    <label class="form-check-label" for="dart">Dart</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="regLanguages[]" value="python"
                                        id="python" />
                                    <label class="form-check-label" for="python">Python</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="regLanguages[]" value="kotlin"
                                        id="kot" />
                                    <label class="form-check-label" for="kot">Kotlin</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="regLanguages[]" value="c"
                                        id="c" />
                                    <label class="form-check-label" for="c"> C </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="regLanguages[]" value="cplus"
                                        id="cPlus" />
                                    <label class="form-check-label" for="cPlus">C++</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="regLanguages[]" value="cshap"
                                        id="cShap" />
                                    <label class="form-check-label" for="cShap">C#</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="regLanguages[]" value="php"
                                        id="php" />
                                    <label class="form-check-label" for="php">Php</label>
                                </div>
                                <div class="btn-click1">
                                    <div class="form-check">
                                        <input class="form-check-input input-parent" type="checkbox" id="other1" />
                                        <label class="form-check-label" for="other1">Other </label>

                                        <div class=" other-btn1 d-none">
                                            <input type="text" name="regLanguages[]" id="other1"
                                                class="form-control" placeholder="Other Language" />
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="checkbox-group mb-4 position-parent2">
                                <span class="label">လေ့လာခဲ့ဖူးသော <br> Frameworks :</span>
                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="checkbox" value="laravel" name="regFrames[]"
                                        id="html" />
                                    <label class="form-check-label" for="html">Laravel</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="css" name="regFrames[]"
                                        id="css" />
                                    <label class="form-check-label" for="css">Css</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="js" name="regFrames[]"
                                        id="js1" />
                                    <label class="form-check-label" for="js1">JavaScript</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="jquery" name="regFrames[]"
                                        id="jQ" />
                                    <label class="form-check-label" for="jQ">JQuery</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="bootstrap" name="regFrames[]"
                                        id="bootS" />
                                    <label class="form-check-label" for="bootS">BootStrap</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="tailwind css"
                                        name="regFrames[]" id="tailW" />
                                    <label class="form-check-label" for="tailW">Tailwind Css</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="vue" name="regFrames[]"
                                        id="vue" />

                                    <label class="form-check-label" for="vue">Vue</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="react js" name="regFrames[]"
                                        id="reactJ" />
                                    <label class="form-check-label" for="reactJ">React Js</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="angular js"
                                        name="regFrames[]" id="angularJ" />
                                    <label class="form-check-label" for="angularJ">Angular Js</label>
                                </div>
                                <div class="btn-click2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="other2" />
                                        <label class="form-check-label" for="other2">Other</label>
                                    </div>

                                    <div class="other-btn2 d-none">
                                        <input type="text" name="regFrames[]" id="other2" class="form-control"
                                            placeholder="Other Framework" />
                                    </div>
                                </div>
                            </div>
                            <div class="checkbox-group position-parent3 ">
                                <span class="label">လေ့လာခဲ့ဖူးသော <br> Web development titles :</span>
                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="checkbox" name="regWebs[]" value="html"
                                        id="laravel" />
                                    <label class="form-check-label" for="laravel">Html</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="regWebs[]" value="android"
                                        id="android" />
                                    <label class="form-check-label" for="android">Android</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="regWebs[]" value="flutter"
                                        id="fl" />
                                    <label class="form-check-label" for="fl">Flutter</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="regWebs[]" value="react js"
                                        id="reactJs" />
                                    <label class="form-check-label" for="reactJs">React Js</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="regWebs[]"
                                        value="react native" id="reactN" />
                                    <label class="form-check-label" for="reactN">React Native</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="regWebs[]" value="swift"
                                        id="swift" />
                                    <label class="form-check-label" for="swift">Swift</label>
                                </div>
                                <div class="btn-click3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="other3" />
                                        <label class="form-check-label" for="other3">Other</label>
                                    </div>

                                    <div class="other-btn3 d-none">
                                        <input type="text" name="regWebs[]" id="other4" class="form-control"
                                            placeholder="Other Title" />
                                    </div>
                                </div>

                            </div>

                        </div>
                        <button class="nextBtn">
                            <span class="btnText">Next</span>
                            <i class="fa-solid fa-right-long"></i>
                        </button>
                    </div>
                </div>

                <div class="form second">
                    <div class="details address">
                        <span class="title">Class Enrollment</span>

                        <div class="fields">
                            <div class="radio-check-group mb-3">
                                <span
                                    class="label  @error('regClass')
                                is-invalid
                            @enderror">Class
                                    Type</span>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="regClass[]" value="basic"
                                        id="basic" />
                                    <label
                                        class="form-check-label  @error('regClass')
                                is-invalid
                            @enderror"
                                        for="basic"> Basic </label>

                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="regClass[]"
                                        value="intermediate" id="inter" />
                                    <label
                                        class="form-check-label  @error('regClass')
                                is-invalid
                            @enderror"
                                        for="inter">Intermediate</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="regClass[]" value="advanced"
                                        id="adv" />
                                    <label
                                        class="form-check-label  @error('regClass')
                                is-invalid
                            @enderror"
                                        for="adv"> Advanced </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="regClass[]" value="package"
                                        id="package" />
                                    <label
                                        class="form-check-label  @error('regClass')
                                is-invalid
                            @enderror"
                                        for="package">Package <br> ( Basic + Intermediate +
                                        Advanced )</label>
                                </div>
                                @error('regClass')
                                    <small class="invalid-feedback" style="margin-top: 1px; font-size: 11px;">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>
                            <div class="radio-check-group w-50 mb-3" style="width: 300px;">
                                <span
                                    class="label @error('regPaid')
                                is-invalid
                            @enderror">Paid
                                    Fees from</span>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="regPaid[]" value="kbz"
                                        id="kpay" />
                                    <label
                                        class="form-check-label @error('regPaid')
                                is-invalid
                            @enderror"
                                        for="kpay"> KBZ Pay </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="regPaid[]" value="wave"
                                        id="wave" />
                                    <label
                                        class="form-check-label @error('regPaid')
                                is-invalid
                            @enderror"
                                        for="wave">Wave Pay</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="regPaid[]"
                                        value="kpay and wave" id="kAndW" />
                                    <label
                                        class="form-check-label @error('regPaid')
                                is-invalid
                            @enderror"
                                        for="kAndW">KBZ pay & Wave pay</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="regPaid[]" value="cash"
                                        id="cash" />
                                    <label
                                        class="form-check-label @error('regPaid')
                                is-invalid
                            @enderror"
                                        for="cash"> Cash </label>
                                </div>
                                @error('regPaid')
                                    <small class="invalid-feedback" style="margin-top: 1px; font-size: 11px;">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>
                            <div class="input-field form-floating">
                                <input type="number" name="regAmount" id="job"
                                    class="form-control @error('regAmount')
                                is-invalid
                            @enderror"
                                    placeholder=" " />
                                <label for="job" class="fw-bold">Total Amount</label>
                                @error('regAmount')
                                    <small class="invalid-feedback" style="margin-top: 70px; font-size: 11px;">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>
                            <div class="input-field ss-field">
                                <span class="fw-bold label">Payment Screenshot ပို့ရန်....</span>
                                <input type="file" name="regSs" id="job" class="form-control" />
                            </div>

                        </div>
                    </div>

                    <div class="zoom-rules">
                        <span class="title">Zoom Class စည်းမျဥ်းများ</span>

                        <div class="input-field form-check">
                            <label class="p-3 rules">
                                ၁။ သင်တန်းတက်မည့် ကျောင်းသားသည် Laptop သို့မဟုတ် Desktop ရှိရမည်။ <br> ၂။ သင်တန်းတွင် Camera
                                ဖွင့်ထားရမည်။ လုံလောက်တဲ့ အကြောင်းပြချက်မရှိဘဲ Camera ပိတ်ထားလျှင် အမှတ်လျှော့မည်။ <br> ၃။
                                Online Class တက်ရောက်ချိန်တွင် အစားစားခြင်း(လုံးဝ)
                                ခွင့်မပြုပါ။ ရေ၊ ကော်ဖီ၊ အချိုရည်များကို ခွင့်ပြုပေးသည်။ <br> ၄။ ကျောင်းသူ
                                ကျောင်းသူများ၏ကိုယ်ရေးကိုယ်တာအချက်အလက်များကို ကျောင်းမှ တာဝန်ယူဖြေရှင်းပေးမည်မဟုတ်ပါ။ <br>
                                ၅။ တစ်လလျှင် ခွင့်ဖြင့်နှစ်ရက်သာပျက်ခွင့်ရှိမည်။
                                တစ်လအတွင်းနှစ်ရက်ထက်ကျော်လွန်ပါကသင်တန်းမှထုတ်ပယ်မည်ဖြစ်ပြီး
                                အတန်းသစ်တွင် သင်တန်းကြေးတစ်ဝက်ဖြင့် ပြန်လည်တက်ရောက်နိုင်မည်။ (ပထမလမှာကတည်းက ထုတ်ပယ်ခံရလျှင်
                                သင်တန်းကြေး ၄ သောင်းပြန်လည်ပေးသွင်းရမည်။ ဒုတိယလမှာ ထုတ်ပယ်ခံရလျှင်
                                သင်တန်းကြေး၅သောင်းပြန်လည်ပေးသွင်းရမည်။ Intermediate and Advanced
                                ပြန်လည်တက်ပေးရမည်။ တတိယလမှာထုတ်ပယ်ခံရလျှင် သင်တန်းကြေး ၄ သောင်းပြန်လည်ပေးသွင်းရမည်။ Advanced
                                ပြန်လည်တက်ပေးရမည်။) <br> ၆။ အပတ်စဉ်စစ်သော Assignment
                                နှင့်လစဉ်စစ်သောစာမေးပွဲများကိုဖြေဆိုရမည်။
                                ထိုအမှတ်များကိုကြည့်ပြီးလုပ်ငန်းခွင်ဝင်နိုင်ရန်အခြား
                                Company မှ OJT ခေါ်ယူသောအခါ ဦးစားပေးစဉ်းစားပေးမည် ဖြစ်ပါသည်။ <br> ၇။ Certificate
                                မရှိသောကျောင်းသားများ၊ အတန်းပြီးဆုံးအောင် မတက်သောကျောင်းသားများအနေဖြင့် Recording Video
                                Lessons များကိုတစ်နှစ်သာ Access ခွင့်ရရှိမှာဖြစ်ပါသည်။ <br> ၈။ သင်တန်းကြေး
                                ခွဲသွင်းသောကျောင်းသားများအနေဖြင့်လစဉ် 10% ပိုမို ပေးဆောင်ရမည်။
                            </label>

                        </div>
                        <div class="form-check mt-3">
                            <input type="checkbox" name="rule" id="rule" value="yes"
                                class="form-check-input @error('rule')
                                is-invalid
                            @enderror" />
                            <label for="rule" class="form-check-label"> စည်းကမ်းများကို သဘောတူပါသည်။</label>
                            @error('rule')
                                <small class="invalid-feedback" style="font-size: 11px;">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>

                        <div class="buttons">
                            <div class="backBtn">
                                <i class="fa-solid fa-right-long"></i>
                                <span class="btnText">Back</span>
                            </div>

                            <button class="sumbit">
                                <span class="btnText">Submit</span>
                                <i class="fa-solid fa-right-to-bracket"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
