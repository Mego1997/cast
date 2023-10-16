<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>New Blog - Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">

    <link rel="stylesheet" href="{{asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.svg')}}" type="image/x-icon">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index.html"><img src="{{ asset("images/logo-black.png")}}"  alt="Logo" srcset="" width="100%"></a>
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
                                                                <a href="{{$ii->submenuItemHref}}">{{$ii->submenuItemName}}</a>
                                                            </li>
                                                        @else
                                                            <li class="submenu-item">
                                                                <a href="{{$ii->submenuItemHref}}">{{$ii->submenuItemName}}</a>
                                                            </li>
                                                        @endif
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </li>
                                    @else
                                        @if(Request::segment(1)==$i->sidebaritemHref)
                                            <li class="sidebar-item active">
                                                <a href="{{$i->sidebaritemHref}}" class='sidebar-link'>
                                                    <i class="{{$i->sidebar_item_logo}}"></i>
                                                    <span>{{$i->sidebaritemName}}</span>
                                                </a>
                                            </li>
                                        @else
                                            <li class="sidebar-item ">
                                                <a href="{{$i->sidebaritemHref}}" class='sidebar-link'>
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
            <form action="{{url('insert-blog-data')}}" method = "post" enctype="multipart/form-data">
                {{csrf_field()}}

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>New Blog</h3>
                            <p class="text-subtitle text-muted">Add new Blog information.</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">New Blog</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Blog Data</h4>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="helperText">Blog Title[English]</label>
                                        <input name="bNameEN" type="text" id="helperText" class="form-control" placeholder="Location Name"required>
                                        <p><small class="text-muted">Location Name by English Language.</small>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="helperText">Blog Title[Arabic]</label>
                                        <input name="bNameAR" type="text" id="helperText" class="form-control" placeholder="الاسم باللغة العربية"required>
                                        <p><small class="text-muted">Location Name by Arabic Language.</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <!-- Input Style end -->
                <section id="input-style">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Blog Desctrption</h4>
                                </div>

                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-md-6">

                                            <div class="form-group">

                                            <textarea name="blog_descEN" class="form-control" id="exampleFormControlTextarea1"
                                                      rows="4"></textarea>
                                                <p><small class="text-muted">Blog Desctrption English Language.</small>
                                            </div>

                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group">

                                            <textarea name="blog_descAR" class="form-control" id="exampleFormControlTextarea1"
                                                      rows="4"></textarea>
                                                <p><small class="text-muted">Blog Desctrption Arabic Language.</small>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Basic File Browser start -->
                <section id="input-file-browser">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">

                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <label for="formFile" class="form-label">Image</label>
                                        <div class="col-lg-6 col-md-12">
                                            <img id="Image" src="" width="20%">

                                        </div>
                                        <input class="form-control" type="file" id="formFile" name="Image" onchange="readURL(this);" accept="image/png, image/jpeg" required>
                                        <p><small class="text-muted">Enter Your Main Photo with Dimensions [1280 X 854].</small>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </section>
                <section id="basic-input-groups">
                    <div class="row">
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

    </script>
    <script src="{{asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>


    <script src="{{asset('assets/js/main2.js')}}"></script>
</body>

</html>
