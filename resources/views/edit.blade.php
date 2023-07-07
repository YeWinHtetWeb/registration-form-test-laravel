@extends('master')
@section('title')
    Register Data Record
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/formEditStyle.css') }}" />
@endsection

@section('content')
    {{-- <div class="img">
        <img src="{{ asset('paymentImg/logo2.png') }}" alt="">
    </div> --}}
    <div class="body">
        <div class="container1">
            <header>Java Zoom Batch 20 Registration</header>
            <form action="{{ route('formPage#update') }}" method="post" enctype="multipart/form-data">
                @csrf


                <input type="hidden" name="regId" value="{{ $editData['id'] }}">
                <div class="data-list mb-5">
                    <table class="table fw-bold mb-3">
                        <tr>
                            <td scope="row" class="label">Email</td>
                            <td scope="col">
                                <input type="email" name="regEmail"
                                    class="@error('regName')
                                is-invalid
                            @enderror"
                                    value="{{ $editData['email'] }}" placeholder="Enter your email..." />
                                @error('regName')
                                    <small class="invalid-feedback">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td scope="row" class="label">Full Name</td>
                            <td scope="col">
                                <input type="text" name="regName" class="" value="{{ $editData['name'] }}"
                                    placeholder="Enter your full name..." />
                            </td>
                        </tr>
                        <tr>
                            <td scope="row" class="label">Phone Number</td>
                            <td scope="col">
                                <input type="number" name="regPhone" class="" value="{{ $editData['phone'] }}"
                                    placeholder="Enter your phone number..." />
                            </td>
                        </tr>
                        <tr>
                            <td scope="row" class="label">Facebook Acc (Profile Link)</td>
                            <td class="col">
                                <input type="text" name="regFb" class="" value="{{ $editData['fb_acc'] }}"
                                    placeholder="Enter your facebook acc..." />
                            </td>
                        </tr>
                        <tr>
                            <td scope="row" class="label">Current Job</td>
                            <td class="col">
                                <input type="text" name="regJob" class="" value="{{ $editData['job'] }}"
                                    placeholder="Enter your current job..." />
                            </td>
                        </tr>
                        <tr>
                            <td scope="row" class="label">School & University</td>
                            <td class="col">
                                <input type="text" name="regSchool" class="" value="{{ $editData['school'] }}"
                                    placeholder="Enter your school & university..." />
                            </td>
                        </tr>
                        <tr>
                            <td scope="row" class="label">လေ့လာခဲ့ဖူးသော Programming languages</td>
                            <td class="col">

                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="checkbox" name="regLanguages[]" value="javascript"
                                        id="js" @if (Str::contains($editData['programming'], 'javascript')) checked @endif />
                                    <label class="form-check-label" for="js">JavaScript</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="regLanguages[]" value="java"
                                        id="java" @if (Str::contains($editData['programming'], 'java')) checked @endif />
                                    <label class="form-check-label" for="java">Java</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="regLanguages[]" value="dart"
                                        id="dart" @if (Str::contains($editData['programming'], 'dart')) checked @endif />
                                    <label class="form-check-label" for="dart">Dart</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="regLanguages[]" value="python"
                                        id="python" @if (Str::contains($editData['programming'], 'python')) checked @endif />
                                    <label class="form-check-label" for="python">Python</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="regLanguages[]" value="kotlin"
                                        id="kot" @if (Str::contains($editData['programming'], 'kotlin')) checked @endif />
                                    <label class="form-check-label" for="kot">Kotlin</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="regLanguages[]" value="c"
                                        id="c" @if (Str::contains($editData['programming'], 'c')) checked @endif />
                                    <label class="form-check-label" for="c"> C </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="regLanguages[]" value="cplus"
                                        id="cPlus" @if (Str::contains($editData['programming'], 'cplus')) checked @endif />
                                    <label class="form-check-label" for="cPlus">C++</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="regLanguages[]" value="cshap"
                                        id="cShap" @if (Str::contains($editData['programming'], 'csharp')) checked @endif />
                                    <label class="form-check-label" for="cShap">C#</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="regLanguages[]" value="php"
                                        id="php" @if (Str::contains($editData['programming'], 'php')) checked @endif />
                                    <label class="form-check-label" for="php">Php</label>
                                </div>

                                <div class="btn-click1">
                                    <div class="form-check">
                                        <input class="form-check-input input-parent" type="checkbox" id="other1" />
                                        <label class="form-check-label" for="other1">Other </label>

                                        <div class=" other-btn1 d-none">
                                            <input type="text" name="regLanguages[]" id="other1"
                                                class="form-control" placeholder="Other Language..." />
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row" class="label">လေ့လာခဲ့ဖူးသော Frameworks</td>
                            <td class="col">
                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="checkbox" value="laravel" name="regFrames[]"
                                        id="html" @if (Str::contains($editData['framework'], 'laravel')) checked @endif />
                                    <label class="form-check-label" for="html">Laravel</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="css" name="regFrames[]"
                                        id="css" @if (Str::contains($editData['framework'], 'css')) checked @endif />
                                    <label class="form-check-label" for="css">Css</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="js" name="regFrames[]"
                                        id="js1" @if (Str::contains($editData['framework'], 'js')) checked @endif />
                                    <label class="form-check-label" for="js1">JavaScript</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="jquery" name="regFrames[]"
                                        id="jQ" @if (Str::contains($editData['framework'], 'jquery')) checked @endif />
                                    <label class="form-check-label" for="jQ">JQuery</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="bootstrap" name="regFrames[]"
                                        id="bootS" @if (Str::contains($editData['framework'], 'bootstrap')) checked @endif />
                                    <label class="form-check-label" for="bootS">BootStrap</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="tailwind css"
                                        name="regFrames[]" id="tailW"
                                        @if (Str::contains($editData['framework'], 'tailwing css')) checked @endif />
                                    <label class="form-check-label" for="tailW">Tailwind Css</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="vue" name="regFrames[]"
                                        id="vue" @if (Str::contains($editData['framework'], 'vue')) checked @endif />

                                    <label class="form-check-label" for="vue">Vue</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="react js" name="regFrames[]"
                                        id="reactJ" @if (Str::contains($editData['framework'], 'react js')) checked @endif />
                                    <label class="form-check-label" for="reactJ">React Js</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="angular js"
                                        name="regFrames[]" id="angularJ"
                                        @if (Str::contains($editData['framework'], 'angular js')) checked @endif />
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
                            </td>
                        </tr>
                        <tr>
                            <td scope="row" class="label">လေ့လာခဲ့ဖူးသော Web development titles</td>
                            <td class="col">
                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="checkbox" name="regWebs[]" value="html"
                                        id="laravel" @if (Str::contains($editData['web'], 'html')) checked @endif />
                                    <label class="form-check-label" for="laravel">Html</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="regWebs[]" value="android"
                                        id="android" @if (Str::contains($editData['web'], 'android')) checked @endif />
                                    <label class="form-check-label" for="android">Android</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="regWebs[]" value="flutter"
                                        id="fl" @if (Str::contains($editData['web'], 'flutter')) checked @endif />
                                    <label class="form-check-label" for="fl">Flutter</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="regWebs[]" value="react js"
                                        id="reactJs" @if (Str::contains($editData['web'], 'react js')) checked @endif />
                                    <label class="form-check-label" for="reactJs">React Js</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="regWebs[]"
                                        value="react native" id="reactN"
                                        @if (Str::contains($editData['web'], 'react native')) checked @endif />
                                    <label class="form-check-label" for="reactN">React Native</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="regWebs[]" value="swift"
                                        id="swift" @if (Str::contains($editData['web'], 'swift')) checked @endif />
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
                            </td>
                        </tr>
                        <tr>
                            <td scope="row" class="label">Class Type</td>
                            <td class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="regClass[]" value="basic"
                                        id="basic" @if (Str::contains($editData['class'], 'basic')) checked @endif />
                                    <label class="form-check-label" for="basic"> Basic </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="regClass[]"
                                        value="intermediate" id="inter"
                                        @if (Str::contains($editData['class'], 'intermediate')) checked @endif />
                                    <label class="form-check-label" for="inter">Intermediate</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="regClass[]" value="advanced"
                                        id="adv" @if (Str::contains($editData['class'], 'advanced')) checked @endif />
                                    <label class="form-check-label" for="adv"> Advanced </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="regClass[]" value="package"
                                        id="package" @if (Str::contains($editData['class'], 'package')) checked @endif />
                                    <label class="form-check-label" for="package">Package <br> ( Basic + Intermediate +
                                        Advanced )</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row" class="label">Paid Fees from</td>
                            <td class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="regPaid[]" value="kbz"
                                        id="kpay" @if (Str::contains($editData['payment'], 'kbz')) checked @endif />
                                    <label class="form-check-label" for="kpay"> KBZ Pay </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="regPaid[]" value="wave"
                                        id="wave" @if (Str::contains($editData['payment'], 'wave')) checked @endif />
                                    <label class="form-check-label" for="wave">Wave Pay</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="regPaid[]"
                                        value="kpay and wave" id="kAndW"
                                        @if (Str::contains($editData['payment'], 'kpay and wave')) checked @endif />
                                    <label class="form-check-label" for="kAndW">KBZ pay & Wave pay</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="regPaid[]" value="cash"
                                        id="cash" @if (Str::contains($editData['payment'], 'cash')) checked @endif />
                                    <label class="form-check-label" for="cash"> Cash </label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row" class="label">Total Amount</td>
                            <td class="col">
                                <input type="number" name="regAmount" id="name" class=""
                                    value="{{ $editData['amount'] }}" placeholder="Enter your Amount..." />
                            </td>
                        </tr>
                        <tr>
                            <td scope="row" class="label">Payment Screenshot</td>
                            <td class="col">
                                @if ($editData['screenshot'] == null)
                                    <img src="{{ asset('no_photo_error.jpg') }}" alt="screenshot" class="img-thumnail"
                                        width="50%">
                                @else
                                    <img src="{{ asset('storage/form/' . $editData['screenshot']) }}"
                                        class="img-thumnail" alt="no image" width="50%">
                                @endif
                                <input type="file" name="regSs" id="job" class="form-control" />
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="text-end">

                    <button class="btn bg-danger text-light ms-2"><i class="fa-solid fa-wrench"></i> Update My
                        Data</button>
                    {{-- <input type="submit" value="Update Data" class="btn bg-danger text-light ms-2"> --}}
                </div>
            </form>
            <a href="{{ route('formPage#show', $editData['id']) }}" class="text-decoration-none">
                <button class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i> Back</button>
            </a>
        </div>
    </div>

    </div>
@endsection
