@extends('layouts.app')

@section('content')

<div class="container" style="border:1px solid; padding: 0;height:auto;">
    <div class="row d-flex">
        <div class="justify-content-center text-center">
            <h1 class="header text-white" style="background-color: #2c5282; padding: 10px; margin:0;">マイタイムレコーダー</h1>
        </div>
    </div>
    <aside>
        <div class="float-start">
            <ul class="nav flex-column" style="background-color: #f5f5f5;">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">
                    <img src="{{ asset('img/home/home_icon.png') }}" alt="Home icon" class="img-fluid" style="width:3.2rem;"></a></li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">
                    <img src="{{ asset('img/clock/clock_icon.png') }}" alt="clock icon" class="img-fluid" style="width:2.8rem;"></a></li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">
                    <img src="{{ asset('img/file/file_icon.png') }}" alt="File icon" class="img-fluid" style="width:2.8rem;"></a></li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                    <img src="{{ asset('img/file_pen/file_pen.png') }}" alt="clock icon" class="img-fluid" style="width:3.2rem;"></a></li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                    <img src="{{ asset('img/file_show/file_show_icon.png') }}" alt="file_show icon" style="width:3rem;"></a></li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                    <img src="{{ asset('img/cloud_download/download_icon.png') }}" alt="file_show icon" style="width:3rem;"></a></li>
            </ul>
        </div>
    </aside>
    <main>
        <div class="d-flex flex-column mb-3" style="background-color:#D9D9D9;margin:10px;">
            <div class="p-2" style="background-color:#777778; margin:20px;">
                <div class="justify-content-center text-center text-white" style="">
                    <p class="fs-5" style="margin:0;">2024年9月10日(火)</p>
                    <p class="fs-1">11:00:00</p>
                </div>
                <div class="justify-content-center text-center text-white">
                    <ul class="list margin:0;">
                        <li class="list-group-item">出勤　11:00:00</li>
                        <li class="list-group-item">休憩　11:00:00</li>
                        <li class="list-group-item">再入　11:00:00</li>
                        <li class="list-group-item">退勤　11:00:00</li>
                    </ul>
                </div>
            </div>
            <div class="row row-cols row-cols-md-4 g-4" style="margin:10px;">
                    <div class="col" style="margin-top:0;">
                        <div class="card">
                        <img src="{{ asset('img/office_icon.png') }}" class="card-img-top" alt="Home icon" style="width:2.5rem;margin:0.5rem;">
                            <div class="card-body" style="padding-bottom:0;padding-top:0;">
                                <p class="card-title fs-1 fw-bold" style="margin-bottom:0;">出勤</p>
                            </div>
                        </div> 
                    </div>
                    
                    <div class="col" style="margin-top:0;">
                        <div class="card" style="">
                            <img src="{{ asset('img/home/home_icon.png') }}" class="card-img-top" alt="Home icon" style="width:4rem; margin:0.6rem;">
                            <div class="card-body" style="padding-bottom:0;">
                                <p class="card-title fs-1 fw-bold" style="margin-bottom:0;">退勤</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col" style="margin-top:0;">
                        <div class="card" style="">
                            <img src="{{ asset('img/break_icon.png') }}" class="card-img-top" alt="break icon" style="width:2.8rem;margin:0.5rem;">
                            <div class="card-body" style="padding-bottom:0;padding-top:0;">
                                <p class="card-title fs-1 fw-bold" style="margin-bottom:0;">休憩</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col" style="margin-top:0;">
                        <div class="card">
                            <img src="{{ asset('img/return_icon.png') }}" class="card-img-top" alt="return icon" style="width:2.8rem;margin:0.5rem;">
                            <div class="card-body"style="padding-bottom:0;padding-top:0;">
                                <p class="card-title fs-1 fw-bold" style="margin-bottom:0;">再入</p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </main>
    
</div>
@endsection
