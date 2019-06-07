@extends('layouts.home')
@section('content')
<div class="section section-tabs">
    <div class="container">

        <div class="row py-4">
            <div class="col-sm-4">
                <h3 class="mb-3">Trends for you</h3>
            </div>
            <div class="col-sm-8 text-right">
                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal2">New Hash</button>
            </div>
        </div>
        <div class="row">
            @foreach($data as $hash)
            <div class="col-sm-12 col-md-12 col-xl-6">
                <!-- Nav tabs -->
                <div class="card">
                    <div class="card-header">
                        <ul class="nav nav-tabs nav-tabs-primary" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active pt-1 pb-1" data-toggle="tab" href="#link1{{$hash->token}}" role="tablist">
                                    #{{$hash->hash}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pt-1 pb-1" data-toggle="tab" href="#link2{{$hash->token}}" role="tablist">
                                    <i class="tim-icons icon-bullet-list-67"></i> Comments
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pt-1 pb-1" data-toggle="tab" href="#link3{{$hash->token}}" role="tablist">
                                    <i class="tim-icons icon-heart-2"></i> Likes
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <!-- Tab panes -->
                        <div class="tab-content tab-space">
                            <div class="tab-pane active" id="link1{{$hash->token}}"> 
<!--                                <img src="{{asset('img/lora.jpg')}}" alt="Raised image" class="img-fluid rounded shadow-lg" style="width: 150px;">-->
                                <p>{{$hash->description}}</p>
                            </div>
                            <div class="tab-pane" id="link2{{$hash->token}}">

                                <ul class="comment-list">
                                    <li class="comment">
                                        <div class="vcard bio">
                                            <img src="{{asset('img/square1.png')}}" alt="Image placeholder">
                                        </div>
                                        <div class="comment-body">
                                            <h3 class="mb-2">John Doe</h3>
                                            <div class="meta">October 03, 2018 at 2:21pm</div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                            <p><a href="#" class="reply">Reply</a></p>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                            <div class="tab-pane" id="link3{{$hash->token}}">
                                <p>Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.
                                    <br />
                                    <br/> Dramatically maintain clicks-and-mortar solutions without functional solutions.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<style>
    .comment-list {
        padding: 0;
        margin: 0;
    }
    .comment-list li {
        padding: 0;
        margin: 0 0 30px 0;
        float: left;
        width: 100%;
        clear: both;
        list-style: none;
    }
    .comment-list li .vcard {
        width: 80px;
        float: left;
    }
    .comment-list li .vcard img {
        width: 50px;
        border-radius: 50%;
    }
    .comment-list li .comment-body {
        float: right;
        width: calc(100% - 80px);
    }
    .comment-list li .comment-body h3 {
        font-size: 20px;
    }
    .comment-list li .comment-body .meta {
        text-transform: uppercase;
        font-size: 13px;
        letter-spacing: .1em;
        color: #e14dca;
    }
    .comment-list li p {
        margin-top: 0;
        margin-bottom: 1rem;
    }
    #searchUI{
        display: none;
        margin: 0;
       
        border-radius: 5px;
        list-style: none;
        padding: 0px;
        overflow: auto;
   
    }
    #searchUI li{
        cursor: pointer;
        border-bottom: 1px solid #1f2250;
        padding: 0px 10px;
         background: #d74ac1;
        border-top: 1px solid #1f2250;
    }
     #searchUI li:hover{
       background: #616161;
    }
</style>
@endsection
