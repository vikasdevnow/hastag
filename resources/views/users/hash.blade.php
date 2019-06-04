@extends('layouts.home')
@section('content')
<div class="section section-tabs">
    <div class="container">
        <div class="title">
            <h3 class="mb-3">Trends for you</h3>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-xl-6">
              
                <!-- Nav tabs -->
                <div class="card">
                    <div class="card-header">
                        <ul class="nav nav-tabs nav-tabs-primary" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active pt-1 pb-1" data-toggle="tab" href="#link1" role="tablist">
                                    <i class="tim-icons icon-tag"></i> Hash
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pt-1 pb-1" data-toggle="tab" href="#link2" role="tablist">
                                    <i class="tim-icons icon-bullet-list-67"></i> Comments
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pt-1 pb-1" data-toggle="tab" href="#link3" role="tablist">
                                    <i class="tim-icons icon-heart-2"></i> Likes
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <!-- Tab panes -->
                        <div class="tab-content tab-space">
                            <div class="tab-pane active" id="link1">
                                
                                <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits.
                                  
                                </p>
                            </div>
                            <div class="tab-pane" id="link2">
                                <p>Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas.
                                    <br />
                                    <br/>Dynamically innovate resource-leveling customer service for state of the art customer service.</p>
                            </div>
                            <div class="tab-pane" id="link3">
                                <p>Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.
                                    <br />
                                    <br/> Dramatically maintain clicks-and-mortar solutions without functional solutions.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


@endsection
