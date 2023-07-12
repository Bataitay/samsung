@extends('main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Thêm mã khuyến mãi</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('promotion.store') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="code" class="col-md-4 col-form-label text-md-end">Mã khuyến mãi</label>

                            <div class="col-md-6">
                                <input id="code" type="text" class="form-control @error('code') is-invalid @enderror" name="code" value="{{ old('code') }}" required autocomplete="code" autofocus>

                                @error('code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="percent_discount" class="col-md-4 col-form-label text-md-end">Phần trăm giảm</label>

                            <div class="col-md-6">
                                <input id="percent_discount" type="number" class="form-control @error('percent_discount') is-invalid @enderror" name="percent_discount" value="{{ old('percent_discount') }}" required autocomplete="percent_discount">

                                @error('percent_discount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="discount_amount" class="col-md-4 col-form-label text-md-end">Số tiền giảm</label>

                            <div class="col-md-6">
                                <input id="discount_amount" type="number" class="form-control @error('discount_amount') is-invalid @enderror" name="discount_amount" value="old('discount_amount')" required autocomplete="discount_amount">

                                @error('discount_amount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="expired_time" class="col-md-4 col-form-label text-md-end">Ngày hết hạn</label>

                            <div class="col-md-6">
                                <input id="expired_time" type="date" class="form-control" name="expired_time" value="old('expired_time')" required autocomplete="expired_time">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Tạo
                                </button>
                                <a href="{{ route('promotion.index') }}" class="btn btn-danger">
                                    Hủy
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
