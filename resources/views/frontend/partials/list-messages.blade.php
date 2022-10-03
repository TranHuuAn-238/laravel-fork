<div class="portfolio pad" id="listmessages">
    <style>
        .info-song {
            height: 375px;
            background-color: #DEB887;
            border-right: 1px solid red;
            padding: 50px;
        }
        hr {
            width: 150px;
        }
    </style>
    <div>
        <!-- default heading -->
        <div class="default-heading">
            <!-- heading -->
            <h2>List messages</h2>
        </div>
    </div>
    <!-- portfolio -->
    <div class="portfolio-content" id="portfolioOwl">
        
        @foreach ($ordersList as $order)
            <div class="item">
                <!-- item image -->
                <div class="img-responsive info-song">
                    <p style="text-align: center; font-size: 26px;">
                        {{ $order->name_song }}
                    </p>
                    <hr>
                    <br>
                    <p style="text-align: center; font-size: 16px;">
                        <label for="">User order: </label>
                        {{ $order->username }}
                    </p>
                    <br><br><br><br>
                    <p style="text-align: center; font-style: italic;">(move mouse to see the message)</p>
                </div>
                {{-- <img class="img-responsive" src="{{ asset('frontend/img/portfolio/1.jpg') }}" alt=""> --}}
                <!-- transparent background -->
                <div class="p-transparent"></div>
                <!-- on mouse hover details -->
                <div class="p-hover">
                    <!-- heading /title -->
                    <h3> Message</h3><hr>
                    <!-- project details -->
                    <p>{{ $order->message }}</p>
                    <!-- icon -->
                    {{-- <a href="#"><i class="fa fa-share"></i></a> --}}
                </div>
            </div>
        @endforeach
        
    </div>
    {{-- <div class="text-center">
        <a href="#" class="btn btn-lg btn-theme">View more</a>
    </div> --}}
    <!-- portfolio end -->
</div>