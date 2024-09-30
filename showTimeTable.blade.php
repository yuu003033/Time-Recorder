@extends('layouts.app')

@section('content')

<div class="container" style="border:1px solid; padding: 0;height:auto;">
  <header>
    <div class="row d-flex">
        <div class="justify-content-center text-center">
            <h1 class="header text-white" style="background-color: #2c5282; padding: 10px; margin:0;">マイタイムレコーダー</h1>
        </div>
    </div>
  </header>
  
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
    <div class="d-flex flex-column mb-3" style="margin:10px;">
      <table class="table table-bordered">
          <thead class="table-warning">
            <tr>
              <th scope="col">#</th>
              <th scope="col">月日曜日</th>
              <th scope="col">出勤時刻</th>
              <th scope="col">退勤時刻</th>
              <th scope="col">休憩開始</th>
              <th scope="col">休憩終了</th>
            </tr>
          </thead>
        <tbody class="table-group-divider">
          <tr class="table-secondary">
          <th scope="row"><a href="">編集</a></th>
            <td>9月1日（日）</td>
            <td>11:00</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr class="table-secondary">
            <th scope="row"><a href="">編集</a></th>
            <td>9月2日（月）</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>Jacob</td>
            <td>Thornton</td>
          </tr>
          <tr class="table-secondary">
            <th scope="row">編集</th>
            <td>9月1日（日）</td>
            <td>Thornton</td>
            <td>@fat</td><td>Jacob</td>
            <td>Thornton</td>
          </tr>
          <tr class="table-secondary">
            <th scope="row">編集</th>
            <td>9月1日（日）</td>
            <td>Thornton</td>
            <td>@fat</td><td>Jacob</td>
            <td>Thornton</td>
          </tr>
          <tr class="table-secondary">
            <th scope="row">編集</th>
            <td>9月1日（日）</td>
            <td>Thornton</td>
            <td>@fat</td><td>Jacob</td>
            <td>Thornton</td>
          </tr>
          <tr class="table-secondary">
            <th scope="row">編集</th>
            <td>9月1日（日）</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>Jacob</td>
            <td>Thornton</td>
          </tr>
          <tr class="table-secondary">
            <th scope="row">編集</th>
            <td>9月1日（日）</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>Jacob</td>
            <td>Thornton</td>
          </tr>
          <tr class="table-secondary">
            <th scope="row">編集</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>Jacob</td>
            <td>Thornton</td>           
          </tr> 
        </tbody>
      </table>
    </div>
  </main>
</div>
@endsection