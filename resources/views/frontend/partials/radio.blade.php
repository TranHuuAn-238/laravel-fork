<div class="events parallax-three pad" id="radio">
    <div class="container">
        <!-- default heading -->
        <div class="default-heading-shadow">
            <!-- heading -->
            <h2>Radio</h2>
        </div>
        <!-- events element -->
        <div class="events-element">
            <div class="row" style="display: flex; justify-content: center;">
                <div class="col-md-6 col-sm-6">
                    <!-- event item -->
                    <div class="events-item ">
                        <!-- image container -->
                        <div class="figure">
                            <!-- event date -->
                            <div class="event-date">
                                {{ date('d', strtotime($radio->radio_time)) }} <span class="emonth">{{ date('M', strtotime($radio->radio_time)) }}</span>
                                <div class="clearfix"></div>
                                <!-- time -->
                                <span class="etime">{{ date('h:i a', strtotime($radio->radio_time)) }}</span>
                            </div>
                            <!-- event location -->
                            <span class="event-location"><i class="fa fa-map-marker"></i> Zinza Technology</span>
                            <!-- image -->
                            <img class="img-responsive" src="{{ asset('frontend/img/event/1.jpg') }}" alt="" />
                            <!-- image hover -->
                            <div class="img-hover">
                                <!-- hover icon -->
                                <a href="{{ $radio->link_drive }}" target="_blank"><i class="fa fa-play-circle"></i></a>
                            </div>
                        </div>
                        <!-- event information -->
                        <div class="event-info">
                            <!-- event title -->
                            <h3>{{ $radio->title }}</h3>
                            <!-- horizontal line --><hr />
                            <!-- paragraph -->
                            <p>{{ $radio->content }} </p>
                            <!-- buy ticket button link -->
                            {{-- <button href="#bookTicket" class="btn btn-lg btn-theme" data-toggle="modal" >Book Ticket</button> --}}
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-6 col-sm-6">
                    <!-- event item -->
                    <div class="events-item ">
                        <!-- image container -->
                        <div class="figure">
                            <!-- event date -->
                            <div class="event-date">
                                31 <span class="emonth">Jan</span>
                                <div class="clearfix"></div>
                                <!-- time -->
                                <span class="etime">09:45 pm</span>
                            </div>
                            <!-- event location -->
                            <span class="event-location"><i class="fa fa-map-marker"></i> Romania</span>
                            <!-- image -->
                            <img class="img-responsive" src="{{ asset('frontend/img/event/2.jpg') }}" alt="" />
                            <!-- image hover -->
                            <div class="img-hover">
                                <!-- hover icon -->
                                <a href="#"><i class="fa fa-play-circle"></i></a>
                            </div>
                        </div>
                        <!-- event information -->
                        <div class="event-info">
                            <!-- event title -->
                            <h3>Rock Music Festival at City Life Mall</h3>
                            <!-- horizontal line --><hr />
                            <!-- paragraph -->
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, sed doconsect etur eiusmod teme et dolore magna aliqua... <a href="#">more</a></p>
                            <!-- buy ticket button link -->
                            <button href="#bookTicket" class="btn btn-lg btn-theme" data-toggle="modal" >Book Ticket</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <!-- event item -->
                    <div class="events-item ">
                        <!-- image container -->
                        <div class="figure">
                            <!-- event date -->
                            <div class="event-date">
                                14 <span class="emonth">Feb</span>
                                <div class="clearfix"></div>
                                <!-- time -->
                                <span class="etime">10:30 am</span>
                            </div>
                            <!-- event location -->
                            <span class="event-location"><i class="fa fa-map-marker"></i> New Delhi</span>
                            <!-- image -->
                            <img class="img-responsive" src="{{ asset('frontend/img/event/3.jpg') }}" alt="" />
                            <!-- image hover -->
                            <div class="img-hover">
                                <!-- hover icon -->
                                <a href="#"><i class="fa fa-play-circle"></i></a>
                            </div>
                        </div>
                        <!-- event information -->
                        <div class="event-info">
                            <!-- event title -->
                            <h3>Fashion Show Light At Hollywood</h3>
                            <!-- horizontal line --><hr />
                            <!-- paragraph -->
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, sed doconsect etur eiusmod teme et dolore magna aliqua... <a href="#">more</a></p>
                            <!-- buy ticket button link -->
                            <button href="#bookTicket" class="btn btn-lg btn-theme" data-toggle="modal" >Book Ticket</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <!-- event item -->
                    <div class="events-item ">
                        <!-- image container -->
                        <div class="figure">
                            <!-- event date -->
                            <div class="event-date">
                                31 <span class="emonth">Mar</span>
                                <div class="clearfix"></div>
                                <!-- time -->
                                <span class="etime">10:00 pm</span>
                            </div>
                            <!-- event location -->
                            <span class="event-location"><i class="fa fa-map-marker"></i> New Delhi</span>
                            <!-- image -->
                            <img class="img-responsive" src="{{ asset('frontend/img/event/4.jpg') }}" alt="" />
                            <!-- image hover -->
                            <div class="img-hover">
                                <!-- hover icon -->
                                <a href="#"><i class="fa fa-play-circle"></i></a>
                            </div>
                        </div>
                        <!-- event information -->
                        <div class="event-info">
                            <!-- event title -->
                            <h3>Fashion Show Light At Hollywood</h3>
                            <!-- horizontal line --><hr />
                            <!-- paragraph -->
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, sed doconsect etur eiusmod teme et dolore magna aliqua... <a href="#">more</a></p>
                            <!-- buy ticket button link -->
                            <button href="#bookTicket" class="btn btn-lg btn-theme" data-toggle="modal" >Book Ticket</button>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>