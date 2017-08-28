@extends('layouts.app')

@section('content')
    <div class="main_section">
        <div class="container">
            <div class="chat_container">
                <div class="col-sm-3 chat_sidebar">
                    <div class="row">
                        <div id="custom-search-input">
                            <div class="input-group col-md-12">
                                <input type="text" class="  search-query form-control" placeholder="Conversation"/>
                                <button class="btn btn-danger" type="button">
                                    <span class=" glyphicon glyphicon-search"></span>
                                </button>
                            </div>
                        </div>
                        <div class="member_list">
                            <ul class="list-unstyled">

                                @foreach($chats as $chat)
                                    <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img src="http://via.placeholder.com/50x50" alt="User Avatar" class="img-circle">
                                    </span>
                                        <div class="chat-body clearfix">
                                            <div class="header_sec">
                                                <strong class="primary-font">{{$chat->name}}</strong> <strong
                                                        class="pull-right">
                                                    21:30h</strong>
                                            </div>
                                            <div class="contact_sec">
                                                <span class="badge pull-right">5</span>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach

                                <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img src="http://via.placeholder.com/50x50" alt="User Avatar" class="img-circle">
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header_sec">
                                            <strong class="primary-font">User 1</strong> <strong
                                                    class="pull-right">
                                                21:30h</strong>
                                        </div>
                                        <div class="contact_sec">
                                            <span class="badge pull-right">5</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--chat_sidebar-->


                <div class="col-sm-9 message_section">
                    <div class="row">
                        <div class="new_message_head">
                            <div class="pull-left">
                                <button>Conversation</button>
                            </div>
                            <div class="pull-right">
                                <div class="dropdown">
                                    <button class="dropdown-toggle" type="button" id="dropdownMenu1"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-cogs" aria-hidden="true"></i> Actions
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                        <li><a href="#">Action 1</a></li>
                                        <li><a href="#">Action 2</a></li>
                                        <li><a href="#">Action 3</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!--new_message_head-->

                        <div class="chat_area">
                            <ul class="list-unstyled">
                                <li class="left clearfix">
                                    <span class="chat-img1 pull-left">
                                        <img src="http://via.placeholder.com/50x50" alt="User Avatar" class="img-circle">
                                    </span>
                                    <div class="chat-body1 clearfix">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam efficitur orci sed porttitor imperdiet. Praesent imperdiet tellus elit, vel tincidunt arcu auctor sed. Donec pellentesque risus ut dignissim tempus. Sed non egestas massa.
                                        </p>
                                        <div class="chat_time pull-right">21:30h</div>
                                    </div>
                                </li>
                                <li class="left clearfix admin_chat">
                                    <span class="chat-img1 pull-right">
                                        <img src="http://via.placeholder.com/50x50" alt="User Avatar" class="img-circle">
                                    </span>
                                    <div class="chat-body1 clearfix">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam efficitur orci sed porttitor imperdiet. Praesent imperdiet tellus elit, vel tincidunt arcu auctor sed. Donec pellentesque risus ut dignissim tempus. Sed non egestas massa.
                                        </p>
                                        <div class="chat_time pull-left">21:33h</div>
                                    </div>
                                </li>


                            </ul>
                        </div><!--chat_area-->
                        <div class="message_write">
                            <textarea class="form-control" placeholder="type a message"></textarea>
                            <div class="clearfix"></div>
                            <div class="chat_bottom">
                                <a href="#" class="pull-right btn btn-success">
                                    Send</a></div>
                        </div>
                    </div>
                </div> <!--message_section-->
            </div>
        </div>
    </div>
@endsection