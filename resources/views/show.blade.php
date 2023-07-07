@extends('master')
@section('title')
    Register Data Record
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/formListStyle.css') }}" />
@endsection

@section('content')
    {{-- <div class="img">
        <img src="{{ asset('paymentImg/logo2.png') }}" alt="">
    </div> --}}
    <div class="body">
        <div class="container1">
            <header>Java Zoom Batch 20 Registration</header>
            {{-- <input type="text" name="regId" value="{{ $dataList['id'] }}"> --}}
            <div class="content">
                <h3 class="text-white mt-5 mb-3">Your data has been saved.</h3>
                <p class="text-white">You can fill out this form only once. <br> In fact, if you think that the data in this
                    form you filled out was wrong, you can click on "<em>Check your data...</em>" button below, check again
                    and edit your data instantly...</p>
            </div>

            <div class="data-toggle my-5">

                <p>
                    <button class="btn btn-outline-info text-white" type="button" data-mdb-toggle="collapse"
                        data-mdb-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
                        Check your data...
                    </button>
                </p>
                <div>
                    <div class="collapse collapse-vertical" id="collapseWidthExample">
                        <div style="width: 100%; background-color: #06061e;">
                            <div class="data-list mb-5">
                                <table class="table fw-bold mb-3">
                                    <tr>
                                        <td scope="row" class="label">Email</td>
                                        <td scope="col" class="data">- {{ $dataList['email'] }}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row" class="label">Full Name</td>
                                        <td scope="col" class="data">- {{ $dataList['name'] }}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row" class="label">Phone Number</td>
                                        <td scope="col" class="data">- {{ $dataList['phone'] }}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row" class="label">Facebook Acc (Profile Link)</td>
                                        <td class="col" class="data">- {{ $dataList['fb_acc'] }}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row" class="label">Current Job</td>
                                        <td class="col" class="data">- {{ $dataList['job'] }}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row" class="label">School & University</td>
                                        <td class="col" class="data">- {{ $dataList['school'] }}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row" class="label">လေ့လာခဲ့ဖူးသော Programming languages</td>
                                        <td class="col" class="data">- {{ $dataList['programming'] }}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row" class="label">လေ့လာခဲ့ဖူးသော Frameworks</td>
                                        <td class="col" class="data">- {{ $dataList['framework'] }}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row" class="label">လေ့လာခဲ့ဖူးသော Web development titles</td>
                                        <td class="col" class="data">- {{ $dataList['web'] }}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row" class="label">Class Type</td>
                                        <td class="col" class="data">- {{ $dataList['class'] }}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row" class="label">Paid Fees from</td>
                                        <td class="col" class="data">- {{ $dataList['payment'] }}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row" class="label">Total Amount</td>
                                        <td class="col" class="data">- {{ $dataList['amount'] }}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row" class="label">Payment Screenshot</td>
                                        <td class="col" class="data">
                                            - @if ($dataList['screenshot'] == null)
                                                <img src="{{ asset('no_photo_error.jpg') }}" alt="screenshot"
                                                    class="img-thumnail" width="50%">
                                            @else
                                                <img src="{{ asset('storage/form/' . $dataList['screenshot']) }}"
                                                    class="img-thumnail" alt="no image" width="50%">
                                            @endif
                                        </td>
                                    </tr>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="btn-section text-end">
                <a href="{{ route('formPage#edit', $dataList['id']) }}" class="text-decoration-none">
                    <button class="btn btn-primary me-3 p-3"><i class="fa-solid fa-square-pen fs-5 text-white"></i> Go to
                        Edit</button>
                </a>
                <a href="{{ route('formPage#register') }}" class="text-decoration-none">
                    <button class="btn text-white p-3"><i class="fa-brands fa-wpforms fs-5 text-white"></i> Go Form</button>
                </a>
            </div>
        </div>
    </div>

    </div>
@endsection
