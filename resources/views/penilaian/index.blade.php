@extends('layout')
@section('title', 'Penilaian')
@section('content')
<div class="card">

    <div class="card-header">
        @if (session()->has('errors'))
        <div class="col-12">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                @if ($errors->any())
                @foreach ($errors->all() as $error)
                <strong>{{ $error }}</strong>
                @endforeach
                @endif
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        @elseif (session()->has('success'))
        <div class="col-12">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('success') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        @endif
    </div>
    <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
            <thead>
                <tr>
                    {{-- <th style="width: 10px">#</th> --}}
                    <th>Nama</th>
                    @foreach ($datakriteria as $item)
                    <th>{{ $item->description }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach ($normalisasi as $key => $item)
                    @if ($key+1 == count($normalisasi))
                        <tr class="bg-red">
                            <td>{{ $item[count($item)-1] }}</td>
                            @for ($i = 0; $i <= count($item)-2; $i++) <td>{{ $item[$i] }}</td>
                                @endfor
                        </tr>
                    @else
                        <tr>
                            <td>{{ $item[count($item)-1] }}</td>
                            @for ($i = 0; $i <= count($item)-2; $i++) <td>{{ $item[$i] }}</td>
                                @endfor
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">

    </div>
</div>
@endsection
@push('js')
<script>

</script>
@endpush
