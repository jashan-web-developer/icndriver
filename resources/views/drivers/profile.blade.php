@extends('layouts.driver')

@push('head_tags')

<link rel='stylesheet' href="{{ asset('/assetss/css/pages/profile.css') }}" data-name="jashan"/>
@endpush

@section('title', 'Profile')
@section('content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">


        <h4 class="py-3 breadcrumb-wrapper mb-4">
            Dashboard
        </h4>


        <!-- Header -->
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="user-profile-header-banner ">
                        <img class="w-100" src="{{ asset('/assetss/img/pages/profile-banner.png') }}" alt="Banner image" class="rounded-top">
                    </div>
                    <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
                        <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
                            <img src="data:image/png;base64,{{ chunk_split(base64_encode($driver->photo->driversphoto) ) }}" alt="user image"
                                class="d-block h-auto ms-0 ms-sm-4 rounded-3 user-profile-img">
                        </div>
                        <div class="flex-grow-1 mt-3 mt-sm-5">
                            <div
                                class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
                                <div class="user-profile-info">
                                    <h4>{{ $driver->firstname }} {{ $driver->lastname }}</h4>
                                    <ul
                                        class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2">
                                        <li class="list-inline-item fw-semibold">
                                            <i class='bx bx-pen'></i> Driver
                                        </li>
                                       
                                        <li class="list-inline-item fw-semibold">
                                            <i class='bx bx-calendar-alt'></i> Joined on {{ $driver->signupdate->toFormattedDateString() }}
                                        </li>
                                    </ul>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Header -->

        <!-- Navbar pills -->
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills flex-column flex-sm-row mb-4">
                    {{-- <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class='bx bx-user'></i>
                            Profile</a></li> --}}
                    {{--   <li class="nav-item"><a class="nav-link" href="pages-profile-teams.html"><i class='bx bx-group'></i> Teams</a></li>
      <li class="nav-item"><a class="nav-link" href="pages-profile-projects.html"><i class='bx bx-grid-alt'></i> Projects</a></li>
      <li class="nav-item"><a class="nav-link" href="pages-profile-connections.html"><i class='bx bx-link-alt'></i> Connections</a></li> --}}
                </ul>
            </div>
        </div>
        <!--/ Navbar pills -->

        <!-- User Profile Content -->
        <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-5">
                <!-- About User -->
                <div class="card mb-4">
                    <div class="card-body">
                        <small class="text-muted text-uppercase">Personal Info</small>
                        <ul class="list-unstyled mb-4 mt-3">
                          
                            <li class="d-flex align-items-center mb-3"><i class="bx bx-user"></i><span
                                class="fw-semibold mx-2">Username:</span> <span>{{ $driver->username }}</span></li>
                                <li class="d-flex align-items-center mb-3"><i class="bx bx-phone"></i><span
                                    class="fw-semibold mx-2">Contact:</span> <span>{{ $driver->phone }}</span></li>
                           
                            <li class="d-flex align-items-center mb-3"><i class="bx bx-envelope"></i><span
                                    class="fw-semibold mx-2">Email:</span> <span>{{ $driver->email }}</span></li>
                                <li class="d-flex align-items-center mb-3"><i class="bx bx-detail"></i><span
                                    class="fw-semibold mx-2">Business URL:</span> <span>{{ $driver->businessurl  }}</span></li>
                        </ul>
                        <small class="text-muted text-uppercase">About</small>
                        <ul class="list-unstyled mb-4 mt-3">
                            {{ $driver->description }}
                        </ul>
                        
                        <small class="text-muted text-uppercase">Vehicle Details</small>

                        <ul class="list-unstyled mb-4 mt-3">
                            
                            <li class="d-flex align-items-center mb-3"><i class='bx bx-car'></i></i></i><span
                                    class="fw-semibold mx-2">4 Seater Vehicle:</span> <span>{{ $driver->{"4seatervehicle"} ? "Yes" : "No" }}</span></li>
                            <li class="d-flex align-items-center mb-3"><i class='bx bx-car'></i></i><span
                                    class="fw-semibold mx-2">8 Seater Vehicle:</span> <span>{{ $driver->{"8seatervehicle"} ? "Yes" : "No" }}</span></li>
                            <li class="d-flex align-items-center mb-3"><i class='bx bx-car'></i></i><span
                                    class="fw-semibold mx-2">Estate Vehicle:</span> <span>{{ $driver->estatevehicle ? "Yes" : "No" }}</span></li>
                            <li class="d-flex align-items-center mb-3"><i class='bx bx-car'></i></i><span
                                class="fw-semibold mx-2">Courier Vehicle:</span> <span>{{ $driver->courier ? "Yes" : "No" }}</span></li>
                                <li class="d-flex align-items-center mb-3"><i class='bx bx-car'></i></i><span
                                    class="fw-semibold mx-2">Easy Access Vehicle:</span> <span>{{ $driver->easyaccessvehicle ? "Yes" : "No" }}</span></li>
                            <li class="d-flex align-items-center mb-3"><i class='bx bx-car'></i></i><span
                                    class="fw-semibold mx-2">AirPort Runs:</span> <span>{{ $driver->airportruns ? "Yes" : "No" }}</span></li>
                            <li class="d-flex align-items-center mb-3"><i class='bx bx-car'></i></i><span
                                    class="fw-semibold mx-2">Wheel Chair Friendly:</span> <span>{{ $driver->wheelchairfriendly ? "Yes" : "No" }}</span></li>
                                    
                        </ul>
                       

                        <small class="text-muted text-uppercase">License</small>
                        <ul class="list-unstyled mb-4 mt-3">
                            <li class="d-flex align-items-center mb-3">

                                <img style="width: 100%; height: auto" src="data:image/png;base64,{{ chunk_split(base64_encode($driver->license->licensephoto) ) }}" alt="">
                            </li>
                            <li class="d-flex align-items-center mb-3"><i class="bx bx-detail"></i><span
                                    class="fw-semibold mx-2">Number:</span> <span>{{ $driver->licensenumber }}</span></li>
                            <li class="d-flex align-items-center mb-3"><i class="bx bx-detail"></i><span
                                    class="fw-semibold mx-2">Expiry:</span> <span>{{ $driver->licenseexpiry->toFormattedDateString()  }}</span></li>
                        </ul>

                        
                       
                    </div>
                </div>
                <!--/ About User -->


                <!-- Payment History -->
                <div class="card card-action mb-4">
                    <div class="card-header align-items-center">
                        <h5 class="card-action-title mb-0">{{ $driver->payments->count() ? "Payment History" : "No Payment History yet" }}</h5>
                       {{--  <div class="card-action-element btn-pinned">
                            <div class="dropdown">
                                <button type="button" class="btn dropdown-toggle hide-arrow p-0"
                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                        class="bx bx-dots-vertical-rounded"></i></button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="javascript:void(0);">Share teams</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Suggest edits</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Report bug</a></li>
                                </ul>
                            </div>
                        </div> --}}
                    </div>
                    <div class="card-body payment-history">
                        <ul class="list-unstyled mb-0">

                            @foreach ( $driver->payments as  $payment )

                                <li class="mb-3">
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex align-items-start">
                                            <div class="me-2">
                                                <h6 class="mb-0">{{ $payment->paymentdatetime->toDayDateTimeString() }}</h6>
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                            <a href="javascript:;"><span
                                                    class="badge bg-label-danger">{{ $payment->paymentamount }}</span></a>
                                        </div>
                                    </div>
                                </li>
                                
                                
                            @endforeach
                            
                            



                           {{--  <li class="text-center">
                                <a href="javascript:;">View all teams</a>
                            </li> --}}
                        </ul>
                    </div>
                </div>
                <!--/ Payment History -->
            </div>

            
            <div class="col-xl-8 col-lg-7 col-md-7">

                <!-- Driver Messages -->
                <div class="card card-action mb-4">
                    <div class="card-header align-items-center">
                        <h5 class="card-action-title mb-0"><i class='bx bx-list-ul bx-sm me-2'></i>{{ $driver->calls->count() ? "Driver Messages" : "No Messages Yet" }}</h5>
                        {{-- Card Actions --}}
                        {{-- <div class="card-action-element btn-pinned">
                            <div class="dropdown">
                                <button type="button" class="btn dropdown-toggle hide-arrow p-0"
                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                        class="bx bx-dots-vertical-rounded"></i></button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="javascript:void(0);">Share timeline</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Suggest edits</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Report bug</a></li>
                                </ul>
                            </div>
                        </div> --}}
                    </div>
                    <div class="card-body driver-messages">
                        <ul class=" ms-2">
                            @foreach ( $driver->messages as $message)
                            <li class="mb-3">
                                <div class="row">
                                    <div class="col-8">
                                        {{ $message->message->messagetext }}
                                    </div>
                                    <div class="col-2">
                                        {{ $message->messagedatetime->toDayDateTimeString() }}
                                    </div>
                                </div>
                            </li>
                            <hr>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!--/ Driver Message End -->

                <div class="row">
                    <!-- Connections -->
                    <div class="col-lg-12 ">
                        <div class="card card-action mb-4">
                            <div class="card-header align-items-center">
                                <h5 class="card-action-title mb-0">Driver Locations</h5>
                               {{--  <div class="card-action-element btn-pinned">
                                    <div class="dropdown">
                                        <button type="button" class="btn dropdown-toggle hide-arrow p-0"
                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                class="bx bx-dots-vertical-rounded"></i></button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="javascript:void(0);">Share connections</a>
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Suggest edits</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Report bug</a></li>
                                        </ul>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="card-body driver-locations">
                                <ul class="list-unstyled mb-0">
                                    @foreach ( $driver->locations as $location )
                                    <li class="mb-3">
                                        <div class="d-flex align-items-start">
                                            <div class="d-flex align-items-start">
                                                <div class="me-2">
                                                    <h6 class="mb-0">{{ $location->town }}, {{ $location->county }}</h6>
                                                </div>
                                            </div>
                                            <div class="ms-auto">
                                                <a target="_blank" href="http://www.google.com/maps/place/{{ $location->latitude }},{{$location->longitude}}" class="btn btn-label-primary p-1 btn-sm"><i
                                                        class="bx bx-map"></i></a>
                                            </div>
                                        </div>
                                    </li>

                                    
                                    @endforeach
                                    
                                    {{-- <li class="text-center">
                                        <a href="javascript:;">View all teams</a>
                                    </li> --}}

                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--/ Connections -->
                    
                </div>

                <!-- Call History -->
                <div class="card card-action mb-4">
                    <div class="card-header align-items-center">
                        <h5 class="card-action-title mb-0"><i class='bx bx-list-ul bx-sm me-2'></i>{{ $driver->calls->count() ? "Call History" : "No Calls Yet" }}</h5>
                        {{-- Card Actions --}}
                        {{-- <div class="card-action-element btn-pinned">
                            <div class="dropdown">
                                <button type="button" class="btn dropdown-toggle hide-arrow p-0"
                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                        class="bx bx-dots-vertical-rounded"></i></button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="javascript:void(0);">Share timeline</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Suggest edits</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Report bug</a></li>
                                </ul>
                            </div>
                        </div> --}}
                    </div>
                    <div class="card-body call-history">
                        <ul class="timeline ms-2">
                            @foreach ( $driver->calls as $call)
                            <li class="timeline-item timeline-item-transparent">
                                <span class="timeline-point timeline-point-warning"></span>
                                <div class="timeline-event">
                                    <div class="timeline-header mb-1">
                                        <h6 class="mb-0">{{ $call->location->town }}, {{ $call->location->county }}</h6>
                                        <small class="text-muted">{{ $call->datetime->diffForHumans() }}</small>
                                    </div>
                                    <p class="mb-2">{{ $call->datetime->toDayDateTimeString() }}</p>

                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!--/ Call History -->

                


               
                <!-- Projects table -->
                {{-- <div class="card">
                    <div class="card-datatable table-responsive">
                        <table class="datatables-projects border-top table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Leader</th>
                                    <th>Team</th>
                                    <th class="w-px-200">Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div> --}}
                <!--/ Projects table -->
            </div>
        </div>
        <!--/ User Profile Content -->


    </div>
    <!-- / Content -->
@endsection
