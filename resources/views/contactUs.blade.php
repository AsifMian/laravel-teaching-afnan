@extends('layouts.app')

@section('content')
    <div class="page-header">
        <!-- page-header -->
        <div class="container">
            <div class="row">
                <div class="col-md-12 page-title">
                    <h1>Request An Appointment</h1>
                </div>
                <div class="col-md-12">
                    <!-- breadcrumb -->
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Request An Appointment</li>
                    </ol>
                </div>
                <!-- /.breadcrumb -->
            </div>
        </div>
    </div>
    <!-- /.page-header -->
    <div class="main-container">
        <!-- main-container -->
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-12">
                            <p class="lead">Please complete the details below to submit your booking request.</p>
                            @if($errors->any())
                                <ul class="alert alert-danger pl-2">
                                    @foreach ($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach                                
                                </ul>

                            @elseif(session()->has('successMessage'))
                                <div class="alert alert-success">
                                    {{session('successMessage')}}
                                </div>
                            @endif

                        </div>
                        <div class="col-md-12 application-form">
                            <form method="post" action="{{route('saveContactForm')}}">
                                @csrf
                                <div class="row">
                                    <!-- Text input-->
                                    <div class="col-md-6 form-group">
                                        <label class="control-label" for="first_name">First Name<span
                                                class="required">*</span></label>
                                        <input id="fname" name="first_name" type="text" placeholder=""
                                            class="form-control input-md" >
                                    </div>
                                    <!-- Text input-->
                                    <div class="col-md-6 form-group">
                                        <label class="control-label" for="last_name">Last Name<span
                                                class="required">*</span></label>
                                        <input id="lname" name="last_name" type="text" placeholder=""
                                            class="form-control input-md" required>
                                    </div>
                                    <!-- Text input-->
                                    <div class="col-md-6 form-group">
                                        <label class="control-label" for="phone">Phone<span
                                                class="required">*</span></label>
                                        <input id="phone" name="phone" type="text" placeholder=""
                                            class="form-control input-md" required>
                                    </div>
                                    <!-- Text input-->
                                    <div class="col-md-6 form-group">
                                        <label class="control-label" for="email">E mail<span
                                                class="required">*</span></label>
                                        <input id="appointmentemail" name="email" type="text" placeholder=""
                                            class="form-control input-md" required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="control-label" for="preferred_date">Preferred Date <span
                                                class="required">*</span></label>
                                        <div class="input-group">
                                            <input id="preferredday" name="preferred_date" type="text" placeholder=""
                                                aria-describedby="basic-addon2" class="form-control" required>
                                            <span class="input-group-addon" id="basic-addon2"><i
                                                    class="fa fa-calendar"></i></span>
                                        </div>
                                    </div>
                                    <!-- Select Basic -->
                                    <div class="col-md-6 form-group">
                                        <label class="control-label" for="preferred_time">Preferred Time<span
                                                class="required">*</span> </label>
                                        <select id="timeday" name="preferred_time" class="form-control">
                                            <option>Time</option>
                                            <option value="6:00 To 7:00">6:00 am</option>
                                            <option value="7:00 To 8:00">7:00 To 8:00</option>
                                            <option value="7:00 To 8:00">7:00 To 8:00</option>
                                        </select>
                                    </div>

                                    <!-- Select Basic -->
                                    <div class="col-md-12 form-group">
                                        <label class="control-label" for="service">Services <span
                                                class="required">*</span></label>
                                        <select id="serviceour" name="services" class="form-control">
                                            <option>Select Service</option>
                                            <option value="Physiotherapy">Physiotherapy</option>
                                            <option value="Diagnostics">Diagnostics</option>
                                            <option value="Massage Therapy">Massage Therapy</option>
                                            <option value="Hydrabad">Hydrabad</option>
                                            <option value="Rehabilitation">Rehabilitation</option>
                                            <option value="Acupuncture">Acupuncture</option>
                                            <option value="Geriatric">Geriatric</option>
                                            <option value="Orthopedic">Orthopedic</option>
                                            <option value="Sports Medicine">Sports Medicine</option>
                                        </select>
                                    </div>
                                    <!-- Textarea -->
                                    <div class="col-md-12 form-group">
                                        <label class="control-label" for="message">Message</label>
                                        <textarea class="form-control" id="message" name="message" rows="9"></textarea>
                                    </div>
                                    <!-- Button -->
                                    <div class="col-md-12 form-group">
                                        <button type="submit" id="submit" name="submit"
                                            class="btn btn-default">Submit</button>
                                        <span class="required pull-right"><small>*Required</small></span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 sidebar">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="widget">
                                <h2>Why Physio Clinic ?</h2>
                                <p>Physio has a big goal and even bigger opportunity to empower all teams to do great things
                                    together. we're tackling new challenges daily, Join us.</p>
                                <a href="#" class="btn-link"> MEET THE TEAM</a>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="widget">
                                <h2>Our Locations</h2>
                                <h3 class="small-title">Address:</h3>
                                <p>7320 Ricckvan Road, Chicago, M03 42JR, St. Zavburg, VB 5421. </p>
                                <h3 class="small-title">Email:</h3>
                                <p>info@healthcentre.com </p>
                                <h3 class="small-title">phone: </h3>
                                <p>800-123-4567 </p>
                                <a href="#" class="btn btn-default btn-sm"> view locations</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
