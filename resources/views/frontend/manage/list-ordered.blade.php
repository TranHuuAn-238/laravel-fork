@extends('frontend.manage.layout-manage')

@section('title', 'List Ordered')

@push('stylesheets')
    <style>
        .pagination{
            display: flex;
            justify-content: center;
        }
        .backToOrder {
            margin-left: 195px;
            font-size: 16px;
            font-style: oblique;
        }
    </style>
@endpush

@section('content')
<div class="container">
    <!-- hero content -->
    <div class="hero-content">
        <!-- heading -->
        <h3>Your order songs</h3>
        <hr>
        <!-- paragraph -->
        {{-- <p>We sing the best <strong class="theme-color">Songs</strong> and now we control the world best <strong class="theme-color">Music</strong>.</p> --}}
        
    </div>
    <!-- hero play list -->
    <div class="hero-playlist">
        <div class="row">
            <div class="col-md-8 col-sm-8 col-md-offset-2">
                <!-- play list -->
                <div class="playlist-content">
                    <ul class="list-unstyled">
                        @foreach ($ordersListByUser as $orderByUser)
                            <li class="playlist-number">
                                <!-- song information -->
                                <div class="song-info">
                                    <!-- song title -->
                                    <h4>{{ $orderByUser->name_song }}</h4>
                                    <p><strong>Thời gian đặt</strong>: {{ date('d-m-Y H:i:s' ,strtotime($orderByUser->created_at)) }} &nbsp;|&nbsp;<strong>Status</strong>: </p>
                                </div>
                                <!-- music icon -->
                                <div class="music-icon">
                                    <a href="#"><i class="fa fa-eye"></i></a>
                                    {{-- <a href="#"><i class="fa fa-pause"></i></a> --}}
                                </div>
                                <div class="clearfix"></div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class="backToOrder">
            <a href="{{ route('frontend.home.index') . '#listofsongs'}}"> ->Back to order songs...</a>
        </div>
    </div>

    <div>
        {!! $ordersListByUser->links() !!}
        {{-- {{ $ordersListByUser->appends(['sort' => 'department'])->links("pagination::bootstrap-4") }} --}}
    </div>
</div>
@endsection