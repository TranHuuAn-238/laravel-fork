@extends('frontend.layout-order-music')

@push('stylesheets')
    <style>
        .inputType {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            border-radius:15px;
            box-shadow: 4px 4px 10px rgba(0,0,0,0.2);
        }
        .inputType:focus {
            outline: none;
        }
        ::placeholder {
            font-style: oblique;
        }
        .spanRequire {
            color: red;
        }
    </style>
@endpush

@section('content')
    
<!-- Modal -->
<div class="modal fade" id="order" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Information of song</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div>
            <form action="{{ route('handle.create.order') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div>
                        <label for="">User</label>
                        <input type="text" name="" class="inputType" value="Userrr" style="color: red; font-weight: bold;" disabled>
                    </div>
                    <div>
                        <label for="">Name of song <span class="spanRequire">*</span></label>
                        <input type="text" name="name_song" class="inputType" placeholder="e.g. Đứa nào làm em buồn">
                    </div>
                    <div>
                        <label for="">Link youtube of song <span class="spanRequire">*</span></label>
                        <input type="text" name="link_song" class="inputType" placeholder="">
                    </div>
                    <div>
                        <label for="">Message (Optional)</label>
                        <textarea name="message" id="" cols="30" rows="5" class="inputType" style="resize: none;" placeholder="Some messages..."></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Order</button>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>

<div id="latestalbum" class="hero pad">
    <div class="container">
        <!-- hero content -->
        <div class="hero-content ">
            <!-- heading -->
            <h2>Waiting list of songs</h2>
            <hr>
            <!-- paragraph -->
            {{-- <p>We sing the best <strong class="theme-color">Songs</strong> and now we control the world best <strong class="theme-color">Music</strong>.</p> --}}
            @if (session('nameSong'))
                <p>You ordered successfully the song <strong class="theme-color">"{{ session('nameSong') }}"</strong>, please wait for admin approval</p>    
            @endif
        </div>
        <!-- hero play list -->
        <div class="hero-playlist">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <!-- music album image -->
                    <div class="figure">
                        <!-- image -->
                        <img class="img-responsive" src="{{ asset('frontend/img/album/1.jpg') }}" alt="" />
                        <!-- disk image -->
                        <img class="img-responsive disk" src="{{ asset('frontend/img/album/disk.png') }}" alt="" />
                    </div>
                    <!-- album details -->
                    <div class="album-details">
                        <!-- title -->
                        {{-- <h4>Perfect Melodi</h4> --}}
                        <!-- composed by -->
                        {{-- <h5>By Himanshu</h5> --}}
                        <!-- paragraph -->
                        <p>Lorem Ipsum has been the industry's standard dummy text ever since 1500.</p>
                        <!-- button -->
                        <!-- Button trigger modal -->

                        <style>
                            .btnHover {
                                background-color: #f23030;
                                border: none;
                            }
                            .btnHover:hover {
                                background-color: #d12323;
                            }
                        </style>
                        <button type="button" class="btnHover" data-toggle="modal" data-target="#order">
                            <a href="#" class="btn btn-lg btn-theme" id="playNowBtn"><i class="fa fa-play"></i>&nbsp; Order Ngay</a>
                        </button>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <!-- play list -->
                    <div class="playlist-content">
                        <ul class="list-unstyled">
                            @foreach ($ordersList as $order)
                                <li class="playlist-number">
                                    <!-- song information -->
                                    <div class="song-info">
                                        <!-- song title -->
                                        <h4>{{ $order->name_song }}</h4>
                                        <p><strong>Người đặt</strong>: Title </p>
                                    </div>
                                    <!-- music icon -->
                                    <div class="music-icon">
                                        <a href="#"><i class="fa fa-play"></i></a>
                                        <a href="#"><i class="fa fa-pause"></i></a>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection