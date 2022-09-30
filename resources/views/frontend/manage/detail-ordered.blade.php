@extends('frontend.manage.layout-manage')

@section('title', 'Detail Ordered')

@push('stylesheets')
    <style>
        .wrap {
            display: flex;
            align-items: center;
        }
        .labelText {
            float: right;
        }
        .inputText {
            width: 75%;
            height: 40px;
        }
    </style>
@endpush

@section('content')
<div class="container">
    <div class="hero-content">
        <!-- heading -->
        <h3>Detail order songs</h3>
        <hr>
        @if (session('notif'))
            <p style="color: green">{{ session('notif') }}</p>
        @endif
    </div>
    <!-- hero play list -->
    <div class="hero-playlist">
        <div class="row wrap">
            <div class="col-md-3">
                <label for="" class="labelText">Order time</label>
            </div>
            <div class="col-md-9">
                <p>{{ date('d/m/Y H:i:s', strtotime($order->created_at)) }}</p>
            </div>
        </div>
        <br>
        <div class="row wrap">
            <div class="col-md-3">
                <label for="" class="labelText">Name song</label>
            </div>
            <div class="col-md-9">
                <input class="inputText" type="text" value="{{ $order->name_song }}" disabled>
            </div>
        </div>
        <br>
        <div class="row wrap">
            <div class="col-md-3">
                <label for="" class="labelText">Link song</label>
            </div>
            <div class="col-md-9">
                <input class="inputText" type="text" value="{{ $order->link_song }}" disabled>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3">
                <label for="" class="labelText">Messages</label>
            </div>
            <div class="col-md-9">
                <textarea name="" id="" cols="30" rows="5" style="resize: none; width: 75%" placeholder="This song don't have messages..." disabled>{{ $order->message }}</textarea>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3">
                <label for="" class="labelText">Approval</label>
            </div>
            <div class="col-md-9">
                {{-- @if ($order->banned == App\Models\Order::BANNED) --}}
                {{-- use aliases in config\app.php --}}
                @if ($order->banned == Order::BANNED)
                    <label class="label label-danger">Rejected</label>
                @elseif($order->approved_at != null)
                    <label class="label label-success">Approved</label>
                @elseif($order->approved_at == null)
                    <label class="label label-info">Pending</label>
                @endif
            </div>
        </div>
        <br>
        @if ($order->banned != Order::BANNED)
            <div class="row">
                <div class="col-md-3">
                    <label for="" class="labelText">Status play</label>
                </div>
                <div class="col-md-9">
                    @if ($order->approved_at != null && $order->status == 0)
                        <p style="color: blue;"><strong> Still pending</strong></p>
                    @elseif($order->approved_at != null && $order->status == 1)
                        <p style="color: green;"><strong> Played</strong></p>
                    @elseif($order->approved_at == null)
                        <p style="color: blue;"><strong> Still pending</strong></p>
                    @endif
                </div>
            </div>
        @endif
        <br>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-9">
                @if ($order->banned != 1 && $order->approved_at == null)
                <a href="{{ route('frontend.manage.edit.ordered', ['id' => $order->id]) }}" class="btn btn-primary">Edit</a>
                &nbsp;
                |
                &nbsp;
                @endif        
                <a onclick="return confirm('Are u sure want to delele \'{{ $order->name_song }}\' song?')" href="{{ route('handle.delete.order', ['id' => $order->id]) }}" class="btn btn-danger">Delete</a>
                &nbsp;
                |
                &nbsp;
                <a href="{{ route('frontend.back') }}" class="btn btn-warning">Back</a>
            </div>
        </div>
    </div>
</div>
@endsection