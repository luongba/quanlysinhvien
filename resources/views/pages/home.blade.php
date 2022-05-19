@extends('master')
@section('content')
    <div class="container">
        <h1 class="text-center m-4">Danh sách sinh viên nhóm 2 KTPMK17A Trường CNTT</h1>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">STT</th>
                <th scope="col">Mã sinh viên</th>
                <th scope="col">Họ tên</th>
                <th scope="col">Ngày sinh</th>
                <th scope="col">Quê quán</th>
                <th scope="col">Lớp học</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
                @if($students !== null)
                @foreach($students as $item => $student)
                <tr>
                    <th scope="row">{{$item + 1}}</th>
                    <td>{{ $student-> msv}}</td>
                    <td>{{ $student-> name}}</td>
                    <td>{{ $student-> birth}}</td>
                    <td>{{ $student-> address}}</td>
                    <td>{{ $student-> class}}</td>
                    <td>
                        <button class="btn btn-outline-warning">Sửa</button>
                        <button class="btn btn-outline-danger">Xóa</button>
                    </td>
                  </tr>
                  @endforeach
                @else
                <h1> Không tìm thấy dữ liệu</h1>
                
                @endif
                
             
              
            </tbody>
          </table>
    </div>
@endsection
