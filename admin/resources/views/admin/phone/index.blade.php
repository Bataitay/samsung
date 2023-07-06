@extends('admin.main')
@section('content')
<div class="d-flex justify-content-between">
    <h3 class="mb-0">Điện thoại</h3>
    <button class="btn btn-primary" type="submit">Xuất excel</button>
</div>
<table class="table table-bordered border-primary mt-5">
    <thead>
    <tr>
        <th scope="col">Stt</th>
        <th scope="col">Model</th>
        <th scope="col">Mô tả</th>
        <th scope="col">Màu sắc</th>
        <th scope="col">Giá niêm yết</th>
        <th scope="col">Giá ưu đãi hiển thị trên website</th>
        <th scope="col">Tồn kho</th>
    </tr>
    </thead>
    <tbody>
        @foreach($data as $item)
    <tr>
        <td scope="row">{{$loop->iteration}}</td>
        <td>{{$item['Model']}}</td>
        <td>{{$item['description']}}</td>
        <td>{{$item['color']}}</td>
        <td>{{$item['afterTaxPriceDisplay']}}</td>
        <td>{{$item['priceDisplay']}}</td>
        <td>{{$item['stock']}}</td>
    </tr>
        @endforeach
    </tbody>
</table>
@endsection
