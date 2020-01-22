@extends('layouts.admin')
@section('container')


<div class="modal fade" id="modal-notifications" tabindex="-1" role="dialog" aria-labelledby="modal-notifications" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="row no-gutters">
                    <div class="col-lg-5">
                        <div class="hero-wrapper bg-composed-wrapper bg-plum-plate h-100 rounded-left">
                            <div class="flex-grow-1 w-100 d-flex align-items-center">
                                <div class="bg-composed-wrapper--image rounded-left" style="background-image: url('../admin/img/hero-bg/hero-1.html');"></div>
                                <div class="bg-composed-wrapper--bg bg-second opacity-5 rounded-left"></div>
                                <div class="bg-composed-wrapper--content p-5">
                                    <div class="d-flex align-items-center">
                                        <span class="badge badge-pill badge-second px-4 h-auto py-1">New release</span>
                                        <span class="text-white-50 pl-3" data-toggle="tooltip" data-placement="right" title="More info placeholder!">
                                        <i class="far fa-question-circle"></i>
                                    </span>
                                    </div>
                                    <div class="text-white mt-3">
                                        <h1 class="display-4 my-3 font-weight-bold">
                                            Wonderful serenity has possession
                                        </h1>
                                        <p class="font-size-md mb-0 text-white-50">
                                            A free hour, when our power of choice is untrammelled and when nothing prevents.
                                        </p>
                                        <div class="divider border-2 my-4 border-light opacity-2 rounded w-25"></div>
                                        <div>
                                            <a href="#" class="btn btn-warning">
                                            <span class="btn-wrapper--label">
                                                Browse gallery
                                            </span>
                                                <span class="btn-wrapper--icon">
                                                <i class="fas fa-arrow-right"></i>
                                            </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hero-footer pb-4">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a class="nav-link font-size-lg text-white-50" data-toggle="tooltip" href="#" title="Facebook">
                                            <i class="fab fa-facebook-square"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link font-size-lg text-white-50" data-toggle="tooltip" href="#" title="Twitter">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link font-size-lg text-white-50" data-toggle="tooltip" href="#" title="Google+">
                                            <i class="fab fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link font-size-lg text-white-50" data-toggle="tooltip" href="#" title="Instagram">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <ul class="nav nav-line mx-3 my-4" id="notifications-tabs-1" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" id="notifications-tab-1" data-toggle="tab" href="#notifications-content-1" role="tab" aria-controls="notifications-tab-1" aria-selected="false">
                                    Overview
                                    <div class="divider"></div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="notifications-tab-2" data-toggle="tab" href="#notifications-content-2" role="tab" aria-controls="notifications-tab-2" aria-selected="false">
                                    Sign in
                                    <div class="divider"></div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" id="notifications-tab-3" data-toggle="tab" href="#notifications-content-3" role="tab" aria-controls="notifications-tab-3" aria-selected="true">
                                    Recent Activity
                                    <div class="divider"></div>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content px-4">
                            <div class="tab-pane fade" id="notifications-content-1" role="tabpanel" aria-labelledby="notifications-content-1">
                                <div class="row">
                                    <div class="col-md-6 col-lg-4">
                                        <div class="card card-box text-black-50 mb-5 p-3">
                                            <div class="display-3 text-black font-weight-bold">
                                                31
                                            </div>
                                            <div class="divider mt-2 mb-3 border-2 w-25 bg-first rounded border-first"></div>
                                            <div class="font-weight-bold font-size-sm text-uppercase">
                                                Implemented
                                                <br>
                                                bugfixes
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="card card-box text-black-50 mb-5 p-3">
                                            <div class="display-3 text-black font-weight-bold">
                                                68
                                            </div>
                                            <div class="divider mt-2 mb-3 border-2 w-25 bg-success rounded border-success"></div>
                                            <div class="font-weight-bold font-size-sm text-uppercase">
                                                Unresolved
                                                <br>
                                                tickets
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="card card-box text-black-50 mb-5 p-3">
                                            <div class="display-3 text-black font-weight-bold">
                                                57
                                            </div>
                                            <div class="divider mt-2 mb-3 border-2 w-25 bg-warning rounded border-warning"></div>
                                            <div class="font-weight-bold font-size-sm text-uppercase">
                                                Support
                                                <br>
                                                requests
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-box mb-5">
                                    <div class="card-body">
                                        <div class="text-left">
                                            <div class="mt-1">
                                                <i class="far fa-lemon font-size-xxl text-danger"></i>
                                            </div>
                                            <div class="mt-3 line-height-sm">
                                                <b class="font-size-lg text-black">3,568</b>
                                                <span class="text-black-50">clicks</span>
                                            </div>
                                        </div>
                                        <div class="progress mt-3">
                                            <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-outline-primary mb-4" data-dismiss="modal" aria-label="Close">
                                    Close modal
                                </button>
                            </div>
                            <div class="tab-pane fade" id="notifications-content-2" role="tabpanel" aria-labelledby="notifications-content-2">
                                <div class="card m-0 shadow-none border-0">
                                    <div class="card-header d-block p-3 pt-0 rounded bg-light">
                                        <div class="text-muted text-center mb-3">
                                            <small>Sign in with</small>
                                        </div>
                                        <div class="text-center">
                                            <button class="btn btn-facebook mr-2" type="button">
                                                <span class="btn-wrapper--icon">
                                                    <i class="fab fa-facebook"></i>
                                                </span>
                                                <span class="btn-wrapper--label">
                                                    Facebook
                                                </span>
                                            </button>
                                            <button class="btn btn-twitter ml-2" type="button">
                                                <span class="btn-wrapper--icon">
                                                    <i class="fab fa-twitter"></i>
                                                </span>
                                                <span class="btn-wrapper--label">
                                                    Twitter
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-center text-muted mb-3">
                                            <small>Or sign in with credentials</small>
                                        </div>
                                        <form>
                                            <div class="form-group mb-3">
                                                <div class="input-group input-group-alternative">
                                                    <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="far fa-envelope"></i>
                                                    </span>
                                                    </div>
                                                    <input class="form-control" placeholder="Email" type="email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group input-group-alternative">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-unlock-alt"></i>
                                                        </span>
                                                    </div>
                                                    <input class="form-control" placeholder="Password" type="password">
                                                </div>
                                            </div>
                                            <div class="custom-control custom-control-alternative custom-checkbox">
                                                <input class="custom-control-input" id="customCheckLogin" type="checkbox">
                                                <label class="custom-control-label" for="customCheckLogin">
                                                    <span>Remember me</span>
                                                </label>
                                            </div>
                                            <div class="text-center">
                                                <button type="button" class="btn btn-second my-2">Sign in</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show active" id="notifications-content-3" role="tabpanel" aria-labelledby="notifications-content-3">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card card-box mb-5">
                                            <div class="card-indicator bg-first"></div>
                                            <div class="card-body px-4 py-3">
                                                <div class="pb-3 d-flex justify-content-between">
                                                    <a href="#">
                                                        Presentation site design
                                                    </a>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-start">
                                                    <div class="badge badge-first px-3">On hold</div>
                                                    <div class="font-size-sm text-danger px-2">
                                                        <i class="far fa-clock mr-1"></i>
                                                        14:22
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="card card-box mb-5">
                                            <div class="card-indicator bg-success"></div>
                                            <div class="card-body px-4 py-3">
                                                <div class="pb-3 d-flex justify-content-between">
                                                    <a href="#">
                                                        Create UI mockups
                                                    </a>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-start">
                                                    <div class="badge badge-success px-3">Fixed</div>
                                                    <div class="font-size-sm text-dark px-2">
                                                        <i class="far fa-clock mr-1"></i>
                                                        09:41
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline-list mb-5">
                                    <div class="timeline-item timeline-item-icon">
                                        <div class="timeline-item--content">
                                            <div class="timeline-item--icon-wrapper bg-danger text-white">
                                                <i class="far fa-gem"></i>
                                            </div>
                                            <h4 class="timeline-item--label mb-2 font-weight-bold">1998</h4>
                                            <p>
                                                Bill Clinton's presidential scandal makes it online.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="timeline-item">
                                        <div class="timeline-item--content">
                                            <div class="timeline-item--icon"></div>
                                            <h4 class="timeline-item--label mb-2 font-weight-bold">Java exam day</h4>
                                            <p>
                                                Bill Clinton's presidential scandal makes it online.
                                            </p>
                                            <div class="avatar-wrapper-overlap mt-2 mb-1">
                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                    <div class="avatar-icon"><img src="admin/img/avatars/avatar1.jpg" alt=""></div>
                                                </div>
                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                    <div class="avatar-icon"><img src="admin/img/avatars/avatar7.jpg" alt=""></div>
                                                </div>
                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                    <div class="avatar-icon"><img src="admin/img/avatars/avatar1.jpg" alt=""></div>
                                                </div>
                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                    <div class="avatar-icon"><img src="admin/img/avatars/avatar2.jpg" alt=""></div>
                                                </div>
                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                    <div class="avatar-icon"><img src="admin/img/avatars/avatar6.jpg" alt=""></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="timeline-item">
                                        <div class="timeline-item--content">
                                            <div class="timeline-item--icon"></div>
                                            <h4 class="timeline-item--label mb-2 font-weight-bold">
                                                Business investor meeting
                                                <span class="badge badge-neutral-info text-info ml-2">New</span>
                                            </h4>
                                            <p>
                                                Mosaic, the first graphical browser, is introduced to the average consumer.
                                            </p>
                                            <div class="mt-2">
                                                <button class="btn btn-sm btn-primary" type="button">Submit Report</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-labelledby="search-modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-white d-block text-center">
                <h6 class="display-4 font-weight-bold">Search</h6>
                <p class="text-black-50 mb-0">Use the form below to search for files</p>
            </div>
            <div class="modal-body bg-light">
                <div class="p-5">
                    <div class="input-group">
                        <input type="search" class="form-control" placeholder="Search terms here..." />
                        <div class="input-group-append">
                            <button class="btn btn-primary border-0" type="button">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer d-block text-center">
                <button type="button" class="btn btn-link btn-link-dark" data-dismiss="modal">Close search box</button>
            </div>
        </div>
    </div>
</div>

        <div class="app-content">
            <div class="app-content--inner">
                

            
     <!-- -------------------------- -->
                <div class="card card-box mb-5">
                    <div class="card-header">
                        <div class="card-header--title">
                            
                            <b>Messages table</b>
                        </div>
                        <div class="card-header--actions">
                            <a href="{{route('message.create')}}" class="btn btn-sm btn-primary">New Message</a>
                            <a href="#" class="btn btn-sm btn-success" data-toggle="tooltip" title="Refresh">
                                <i class="fas fa-sync fa-spin"></i>
                            </a>
                        </div>
                    </div>
                    <table id="example" class="table table-hover w-100" data-toggle="datatable">
                        <thead>
                        <tr>
                            <th>sender</th>
                            <th>contenu</th>
                            <th>status</th>
                            <th>reciver</th>

                            <th class="no-sort text-center" style="text-align: left;">Actions</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($message_details as $message_detail)
                        <tr>
                            <td>{{$message_detail->user->name}}</td>
                            <td> {{$message_detail->message->messages_text}} </td>
                            @if( $message_detail->message->status == 0)
                            <td style="color: red"> unseen </td>
                            @else
                            <td style="color: green"> seen </td>
                            @endif
                            <td> {{$message_detail->message->user->name}}  </td>

                            <td class="text-center text-nowrap">
                                
                                <a href="" class="btn btn-first pl-2 pr-2 btn-sm ml-1 mr-1" title="View details">
                                    messages can't be edited once it has been sended
                                </a>
                               <form method="POST" action="{{ route('message.destroy', $message_detail->message->id)}}" style="display: inline;">
                                    {{method_field('DELETE')}}
                                    {{ csrf_field() }}
                                    <input type="Submit" class="btn btn-danger pl-2 pr-2 btn-sm ml-1 mr-1" title="Delete" value="D">
                               </form>
                                    
                                </a>
                            </td>
                        </tr>
                        @endforeach
                                              
                        </tbody>
                       
                    </table>
                </div>
                
            </div>
            <div class="app-footer font-size-sm text-black-50">
   
</div>

        </div>
    </div>
</div>
<div id="tip-secondary-2" class="d-none">
    <ul class="list-group list-group-flush text-left bg-transparent">
        <li class="list-group-item rounded-top">
            <div class="align-box-row">
                <div>
                    <div class="avatar-icon-wrapper avatar-icon-md">
                        <div class="avatar-icon rounded-circle"><img
                                src="admin/img/avatars/avatar2.jpg"
                                alt=""></div>
                    </div>
                </div>
                <div class="pl-2">
                    <span class="pb-1 d-block">John Doe</span>
                    <small class="pb-1 text-black-50 d-block">John's bio description here...</small>
                    <div class="divider my-2"></div>
                    <small class="text-black-50">
                        Deadline: <b class="text-danger">12 July 2029</b>
                    </small>
                </div>
            </div>
        </li>
        <li class="list-group-item bg-transparent py-2">
            <div class="align-box-row mb-1">
                <div>
                    <small class="font-weight-bold">Orders</small>
                </div>
                <div class="ml-auto">
                    <div class="font-weight-bold text-success">
                        348
                    </div>
                </div>
            </div>
            <div class="progress-bar-sm progress-bar-animated-alt progress w-100">
                <div class="progress-bar bg-success w-43" role="progressbar" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="align-box-row progress-bar--label mt-1 text-muted">
                <small class="text-dark">0</small>
                <small class="ml-auto">100%</small>
            </div>
        </li>
    </ul>
</div>


@stop