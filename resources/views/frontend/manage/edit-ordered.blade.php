@extends('frontend.manage.layout-manage')

@section('title', 'Edit Ordered')

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
        <h3>Edit order songs</h3>
        <hr>
    </div>
    <!-- hero play list -->
    <div class="hero-playlist">
        <form action="{{ route('handle.edit.order', ['id' => $order->id]) }}" method="POST">
            @csrf
            <div class="row wrap">
                <div class="col-md-3">
                    <label for="" class="labelText">Name song</label>
                </div>
                <div class="col-md-9">
                    <input class="inputText form-control" type="text" name="name_song" value="{{ $order->name_song }}">
                </div>
            </div>
            @error('name_song')
            <div class="row wrap">
                <div class="col-md-3"></div>
                <div class="col-md-9">
                    <div class="alert alert-danger" style="width: 75%;">{{ $message }}</div>
                </div>
            </div>
            @enderror 
            <br>
            <div class="row wrap">
                <div class="col-md-3">
                    <label for="" class="labelText">Link song</label>
                </div>
                <div class="col-md-9">
                    <input class="inputText form-control" type="text" name="link_song" value="{{ $order->link_song }}">
                </div>
            </div>
            @error('link_song')
                <div class="row wrap">
                    <div class="col-md-3"></div>
                    <div class="col-md-9">
                        <div class="alert alert-danger" style="width: 75%;">{{ $message }}</div>
                    </div>
                </div>
            @enderror
            <br>
            <div class="row">
                <div class="col-md-3">
                    <label for="" class="labelText">Messages</label>
                </div>
                <div class="col-md-9">
                    <textarea name="message" id="" cols="30" rows="5" style="resize: none; width: 75%" class="form-control" placeholder="Type some messages here...">{{ $order->message }}</textarea>
                </div>
            </div>
            <br>
            
            
            <br>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-9">
                    @if ($order->banned != 1 && $order->approved_at == null)
                    <button type="submit" class="btn btn-info">Save</button>
                    &nbsp;
                    |
                    &nbsp;
                    @endif        
                    <a href="{{ route('frontend.cancel', ['id' => $order->id]) }}" class="btn btn-warning">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection