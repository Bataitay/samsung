@extends('main')
@section('content')
<div class="card">
     <div class="loan-index d-flex row">
            <div class="title-loan col-md-3">
                <h5 class="card-header">Danh sách mã khuyến mãi</h5>
            </div>
            <div class="col-md-7">
                <form action="" class="row">
                    <div class="input-group input-group-merge col-md-4 search-loan">
                        <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
                        <input type="text" class="form-control" value="{{request()->key_word}}" name="key_word" placeholder="Tìm kiếm" aria-label="Search..."
                            aria-describedby="basic-addon-search31">
                    </div>
                    <div class="btn-search col-md-2">
                        <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                    </div>
                </form>
            </div>
         <div class="col-md-2" style="margin-top: 15px;">
             <a class="btn btn-primary" href="{{ route('promotion.create') }}">Thêm</a>
             <a class="btn btn-success" href="{{ route('export-phone') }}">Xuất excel</a>
         </div>
        </div>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead class="table-dark">
          <tr>
            <th>STT</th>
            <th>Mã khuyến mãi</th>
            <th>Phần trăm giảm (%)</th>
            <th>Số tiền giảm</th>
            <th>Thời gian</th>
            <th>Hành động</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @if ($promotions)

            @foreach ($promotions as $promotion)
          <tr class="item-{{$promotion->id}}">
            <td>{{$loop->iteration}}</td>
            <td>{{$promotion->code}}</td>
            <td>{{$promotion->percent_discount}}</td>
            <td>{{$promotion->discount_amount}}</td>
            <td>{{$promotion->expired_time}}</td>
            @if (auth()->user()->role_id == 1)
            <td class="d-flex">
                <a data-href="{{ route('promotion.destroy', $promotion->id) }}" id="{{ $promotion->id }}"
                    class="sm deleteIcon"><i class="bx bx-trash"></i>
                </a>
            </td>
            @endif
        </tr>
        @endforeach
        @endif

        </tbody>
        <div class="row">
            <div class="col-md-5 offset-md-7">
                <div class="btn-group float-end">
                    {{ $promotions->appends(request()->key_word)->links() }} </div>
            </div>
        </div>
      </table>
    </div>
  </div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js'></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @isset($promotions)
      <script>
          $(document).on('click', '.deleteIcon', function(e) {
              e.preventDefault();
              let id = $(this).attr('id');
              let href = $(this).data('href');
              let csrf = '{{ csrf_token() }}';
              console.log(id);
              Swal.fire({
                  title: 'Are you sure?',
                  text: "You won't be able to revert this!",
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Yes, delete it!'
              }).then((result) => {
                console.log(result);
                  if (result.isConfirmed) {
                      $.ajax({
                          url: href,
                          method: 'delete',
                          data: {
                              _token: csrf
                          },
                          success: function(res) {
                            console.log(res);

                              Swal.fire(
                                  'Deleted!',
                                  'Your file has been deleted.',
                                  'success'
                              )
                              $('.item-'+id).remove();
                          }
                      });
                  }
              })
          });
      </script>
  @endisset
  @endsection
