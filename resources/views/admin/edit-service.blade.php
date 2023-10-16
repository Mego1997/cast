<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Edit Technical - Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../{{asset('/assets/css/bootstrap.css')}}">

    <link rel="stylesheet" href="../{{asset('/assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="../{{asset('assets/vendors/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="../{{asset('/assets/css/app.css')}}">
    <link rel="shortcut icon" href="../{{asset('/assets/images/favicon.svg')}}" type="image/x-icon">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index.html"><img src="../{{ asset("images/logo-black.png")}}"  alt="Logo" srcset="" width="100%"></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        @foreach($sidebar_setions as $ai)
                            <li class="sidebar-title">{{$ai->sidebar_section_name}}</li>
                        @foreach($Sidebaritemadmin as $i)
                                @if($ai->ID==$i->sidebar_section_name)

                            @if($i->Hassub==1)
                                <li class="sidebar-item  has-sub">
                                    <a href="{{$i->sidebaritemHref}}" class='sidebar-link'>
                                        <i class="{{$i->sidebar_item_logo}}"></i>
                                        <span>{{$i->sidebaritemName}}</span>
                                    </a>
                                    <ul class="submenu ">
                                        @foreach($Submenuitems as $ii)
                                            @if($i->ID==$ii->submenuitemss)
                                                @if(Request::segment(1)==$ii->submenuItemHref)
                                                    <li class="submenu-item active">
                                                        <a href="../{{$ii->submenuItemHref}}">{{$ii->submenuItemName}}</a>
                                                    </li>
                                                @else
                                                    <li class="submenu-item">
                                                        <a href="../{{$ii->submenuItemHref}}">{{$ii->submenuItemName}}</a>
                                                    </li>
                                                @endif
                                            @endif
                                        @endforeach
                                    </ul>
                                </li>
                            @else
                                @if(Request::segment(1)==$i->sidebaritemHref)
                                    <li class="sidebar-item active">
                                        <a href="../{{$i->sidebaritemHref}}" class='sidebar-link'>
                                            <i class="{{$i->sidebar_item_logo}}"></i>
                                            <span>{{$i->sidebaritemName}}</span>
                                        </a>
                                    </li>
                                @else
                                    <li class="sidebar-item ">
                                        <a href="../{{$i->sidebaritemHref}}" class='sidebar-link'>
                                            <i class="{{$i->sidebar_item_logo}}"></i>
                                            <span>{{$i->sidebaritemName}}</span>
                                        </a>
                                    </li>
                                @endif
                            @endif
                                @endif

                        @endforeach
                        @endforeach
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            <form action="{{ url('update-service/'.$data->ID) }}" method = "post" enctype="multipart/form-data">
                {{csrf_field()}}


                <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Edit {{$data->FirstNameEN}} Data</h3>
                            <p class="text-subtitle text-muted">Update Technical information.</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Update Technical</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                    <section class="section">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Model Status</h4>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">

                                            <select name="Status"  id="Status" class="choices form-select">
                                                @if($data->Status==1)
                                                    <option value="1">Active</option>
                                                @else
                                                    <option value="0">Not Active</option>

                                                @endif()
                                                    <option value="1">Active</option>
                                                    <option value="0">Not Active</option>
                                            </select>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Name</h4>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="helperText">First Name English</label>
                                        <input name="FirstNameEn" type="text" id="helperText" class="form-control" placeholder="Name" value="{{$data->FirstNameEN}}" required>
                                        <p><small class="text-muted">First Name by English Language.</small>
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <label for="helperText">Middel Name English</label>
                                        <input name="MiddelNameEn" type="text" id="helperText" class="form-control" placeholder="Name" value="{{$data->MiddleNameEN}}" required>
                                        <p><small class="text-muted">Middel Name by English Language.</small>
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <label for="helperText">Last Name English</label>
                                        <input name="LastNameEn" type="text" id="helperText" class="form-control" placeholder="Name" value="{{$data->LastNameEN}}" required>
                                        <p><small class="text-muted">Last Name by English Language.</small>
                                        </p>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="helperText">First Name Arabic</label>
                                        <input name="FirstNameAr" type="text" id="helperText" class="form-control" placeholder="Name" value="{{$data->FirstNameAR}}" required>
                                        <p><small class="text-muted">First Name by Arabic Language.</small>
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <label for="helperText">Middel Name Arabic</label>
                                        <input name="MiddelNameAr" type="text" id="helperText" class="form-control" placeholder="Name" value="{{$data->MiddleNameAR}}" required>
                                        <p><small class="text-muted">Middel Name by Arabic Language.</small>
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <label for="helperText">Last Name Arabic</label>
                                        <input name="LastNameAr" type="text" id="helperText" class="form-control" placeholder="Name" value="{{$data->LastNameAR}}" required>
                                        <p><small class="text-muted">Last Name by Arabic Language.</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Input Style start -->
                <section id="input-style">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Address Information</h4>
                                </div>

                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="roundText" >Governorate</label>
                                                <select name="Governorate" id="state-dropdown"
                                                        class="choices form-select" required>
                                                    @if( $data->Country == 59)
                                                        <option
                                                            value="{{$data->governorates->id}}">{{$data->governorates->governorate_name_en}}</option>
                                                        @foreach($AllStates as $i)
                                                            <option
                                                                value="{{$i->id}}">{{$i->governorate_name_en}}</option>

                                                        @endforeach
                                                    @else
                                                        <option
                                                            value="{{$data->all_states->id}}">{{$data->all_states->name_en}}</option>
                                                        @foreach($All_states as $i)
                                                            <option
                                                                value="{{$i->id}}">{{$i->name_en}}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="roundText">City</label>
                                                @if( $data->Country == 59)
                                                    <select name="City" id="city-dropdown" class="choices form-select"
                                                    >
                                                        <option
                                                            value="{{$data->city->id}}">{{$data->city->city_name_en}}</option>

                                                    </select>
                                                @else
                                                    <select name="City" id="city-dropdown" class="choices form-select"
                                                    >
                                                        <option
                                                            value="200000"></option>

                                                    </select>
                                                @endif
                                            </div>
                                        </div>

                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1" class="form-label" required>Full Address</label>
                                                <textarea name="FullAddress" class="form-control" id="exampleFormControlTextarea1"
                                                          rows="3" required>{{$data->Address}}</textarea>
                                            </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Input Style end -->
                    <section id="input-style">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">About Person</h4>
                                    </div>

                                    <div class="card-body">
                                        <div class="row">

                                            <div class="form-group">

                                            <textarea name="serviceDesc" class="form-control" id="serviceDesc"
                                                      rows="3" required>{{$data->ServDesc}}</textarea>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">About Person[arabic]</h4>
                                    </div>

                                    <div class="card-body">
                                        <div class="row">

                                            <div class="form-group">

                                            <textarea name="serviceDescAR" class="form-control" id="serviceDesc"
                                                      rows="3" required>{{$data->ServDescAR}}</textarea>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                <!-- Horizontal Input start -->
                <section id="horizontal-input">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Important Informations</h4>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row align-items-center">
                                                <div class="col-lg-2 col-3">
                                                    <label class="col-form-label">Birthdate</label>
                                                </div>
                                                <div class="col-lg-10 col-9">
                                                    <input name="BirthDate" class="form-control" type="date" id="birthday" name="birthday"  value='{{\Carbon\Carbon::parse($data->BirthDate)->format('Y-m-d')}}' required >
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group row align-items-center">
                                                <div class="col-lg-2 col-3">
                                                    <label class="col-form-label">Gender</label>
                                                </div>
                                                <div class="col-lg-10 col-9">
                                                    <select name="Gender"  class="choices form-select" required>
                                                        <option value="{{$data->gender->ID }}">{{$data->gender->GenderEN}}</option>
                                                        @foreach($AllGender as $i)
                                                            <option value="{{$i->ID}}">{{$i->GenderEN}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row align-items-center">
                                                <div class="col-lg-2 col-3">
                                                    <label class="col-form-label">Service</label>
                                                </div>
                                                <div class="col-lg-10 col-9">
                                                    <select name="service" id="service" class="choices form-select" required>
                                                        <option value="{{$data->services}}">{{$data->services}}</option>
                                                        @foreach($services as $i)
                                                            <option value="{{$i->service_nameEN}}">{{$i->service_nameEN}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row align-items-center">
                                                <div class="col-lg-2 col-3">
                                                    <label class="col-form-label">Specialization</label>
                                                </div>
                                                <div class="col-lg-10 col-9">
                                                    <select name="spicili" id="spicili" class="choices form-select">
                                                        <option value="{{$data->specialization}}">{{$data->specialization}}</option>
                                                        @foreach($spicili as $i)
                                                            <option value="{{$i->specialization_nameEN}}">{{$i->specialization_nameEN}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row align-items-center">
                                                <div class="col-lg-2 col-3">
                                                    <label class="col-form-label">Job</label>
                                                </div>
                                                <div class="col-lg-10 col-9">
                                                    <select name="job" id="job" class="choices form-select"  >
                                                        <option value="{{$data->job}}">{{$data->job}}</option>
                                                        @foreach($jobs as $i)
                                                            <option value="{{$i->job_nameEN}}">{{$i->job_nameEN}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row align-items-center">
                                                <div class="col-lg-2 col-3">
                                                    <label class="col-form-label">Experience</label>
                                                </div>
                                                <div class="col-lg-10 col-9">
                                                    <input name="exp" type="number" id="exp" class="form-control" placeholder="Experience" value="{{$data->experience}}" required>
                                                    <p><small class="text-muted">Enter Your Experience with years.</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Horizontal Input end -->

                <!-- Basic File Browser start -->
                <section id="input-file-browser">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">

                                </div>

                                <div class="card-body">
                                    <div class="row">
                                                <label for="formFile" class="form-label">Main Image</label>
                                        <div class="col-lg-6 col-md-12">
                                            <img id="Image" src="../{{ asset("images/gallery/$data->Image") }}" width="20%">

                                        </div>
                                                <input class="form-control" type="file" id="formFile" name="Image" onchange="readURL(this);" accept="image/png, image/jpeg">
                                                <p><small class="text-muted">Enter Your Main Photo with Dimensions [1080 X 1520].</small>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="mb-3">
                                                <label for="formFile" class="form-label">Profile Image</label>
                                                <div class="col-lg-6 col-md-12">
                                                    <img id="ProfileImage1" src="../{{ asset("images/gellery_rectengular/$data->ProfileImage1") }}" width="50%">
                                                </div>
                                                <input class="form-control" type="file" id="formFile" name="ProfileImage1" onchange="readURL1(this);" accept="image/png, image/jpeg">
                                                <p><small class="text-muted">Enter Your Main Photo with Dimensions [1110 X 1110].</small>
                                            </div>

                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="mb-3">
                                                <label for="formFile" class="form-label">Profile Image</label>
                                                <div class="col-lg-6 col-md-12">
                                                    <img id="ProfileImage2" src="../{{ asset("images/gellery_rectengular/$data->ProfileImage2") }}" width="50%">
                                                </div>
                                                <input class="form-control" type="file" id="formFile" name="ProfileImage2" onchange="readURL2(this);" accept="image/png, image/jpeg">
                                                <p><small class="text-muted">Enter Your Main Photo with Dimensions [1110 X 1110].</small>
                                            </div>

                                        </div>

                            </div>
                        </div>
                    </div>
                </section>
                <section id="basic-input-groups">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Social Media Links</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-lg-6 col-md-12">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">Facebook</span>
                                                    <input name="Socialfacebook" type="text" class="form-control" placeholder="Facebook Account Link..."
                                                           aria-label="Username" aria-describedby="basic-addon1" value="{{$data->Socialfacebook}}">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-12">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">Instagram</span>
                                                    <input name="Socialinstagram" type="text" class="form-control" placeholder="Instagram Account Link..."
                                                           aria-label="Username" aria-describedby="basic-addon1" value="{{$data->Socialinstagram}}">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">Twitter</span>
                                                    <input name="Socialtwitter" type="text" class="form-control" placeholder="Twitter Account Link..."
                                                           aria-label="Username" aria-describedby="basic-addon1" value="{{$data->Socialtwitter}}">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">Youtube</span>
                                                    <input name="Socialyoutube" type="text" class="form-control" placeholder="Youtube Account Link..."
                                                           aria-label="Socialyoutube" aria-describedby="basic-addon1" value="{{$data->Socialyoutube}}">
                                                </div>
                                            </div>
                                            <p>Please insert <code>YOUTUBE</code> video link about model

                                            </p>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Video Link</span>
                                                <input name="Videolink" type="text" class="form-control" placeholder="Youtube Video Link..."
                                                       aria-label="Videolink" aria-describedby="basic-addon1" value="{{$data->Videolink}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit"  class="btn btn-primary">Submit</button>
                    </div>

                </section>
                <!-- Basic Inputs Groups end -->

                <!-- Basic File Browser end -->
            </div>
            </form>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2022 &copy; Attractionme</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="http://Attractionme.net">Attractionme</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script>
        function ChangeCheckboxLabel(ckbx)
        {
            var d = ckbx.id;
            if( ckbx.checked )
            {
                document.getElementById(d+"-checked").style.display = "inline";
                document.getElementById(d+"-unchecked").style.display = "none";
            }
            else
            {
                document.getElementById(d+"-checked").style.display = "none";
                document.getElementById(d+"-unchecked").style.display = "inline";
            }
        }
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#Image')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        function readURL1(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#ProfileImage1')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        function readURL2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#ProfileImage2')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }




        $(document).ready(function() {
            $('#state-dropdown').on('change', function() {
                var governorate_id = this.value;
                $("#city-dropdown").html('');
                $.ajax({
                    url:"{{url('get-cities-by-state')}}",
                    type: "POST",
                    data: {
                        governorate_id: governorate_id,
                        _token: '{{csrf_token()}}'
                    },
                    dataType : 'json',
                    success: function(result){
                        $('#city-dropdown').html('<option value="">Select City</option>');
                        $.each(result.AllCities,function(key,value){
                            $("#city-dropdown").append('<option value="'+value.id+'">'+value.city_name_en+'</option>');
                        });
                    }
                });
            });
        });


        /**********Services Fillter Script**************/
        $('#service').on('change', function() {
            document.getElementById("spicili").style.display = "block";
            document.getElementById("job").style.display = "none";
            var service_id = this.value;
            $("#spicili").html('');
            $.ajax({
                url:"{{url('get-speciali-by-service')}}",
                type: "POST",
                data: {
                    service_id: service_id,
                    _token: '{{csrf_token()}}'
                },
                dataType : 'json',

                success: function(result){
                    $.each(result.Allspeciali,function(key,value){
                        $("#spicili").append('<option value="'+value.specialization_nameEN+'">'+value.specialization_nameEN+'</option>');
                    });
                }
            });
        });
        /**********Services Fillter Script**************/
        /**********specializations Fillter Script**************/
        $('#spicili').on('change', function() {
            var job_id = this.value;

            $.ajax({
                url:"{{url('get-job-by-speciali')}}",
                type: "POST",
                data: {
                    specializ_id: job_id,
                    _token: '{{csrf_token()}}'
                },
                dataType : 'json',
                success: function(result){

                    $.each(result.Alljobs,function(key,value){
                        if (value != '' ) {
                            $("#job").html('');
                            $("#job").append('<option value="'+value.job_nameEN+'">'+value.job_nameEN+'</option>');
                            document.getElementById("job").style.display = "block";
                        }
                    });
                }
            });
        });
        /**********specializations Fillter Script**************/
    </script>
    <script src="../{{asset('/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="../{{asset('/assets/js/bootstrap.bundle.min.js')}}"></script>


    <script src="../{{asset('/assets/js/main2.js')}}"></script>
</body>

</html>
