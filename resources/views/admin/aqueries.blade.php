<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Queries - Admin Dashboard</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">

    <link rel="stylesheet" href="{{asset('assets/vendors/simple-datatables/style.css')}}">

    <link rel="stylesheet" href="{{asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.svg')}}" type="image/x-icon">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://markcell.github.io/jquery-tabledit/assets/js/tabledit.min.js"></script>
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
            <div class="page-heading">
                <div class="page-title">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Queries</h3>
                            <p class="text-subtitle text-muted">All Queries</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Queries Database</li>


                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-body">
                                        <table  class="table table-striped" id="table1">
                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Query About</th>
                                                <th>Query From</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th style="padding: 50px;align-items: center">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($AllOrdersqueries as $i)
                                                <tr>
                                                    <td>{{$i->ID}}</td>
                                                    <td>{{$i->OMName}}</td>
                                                    <td>{{$i->OFullName}}</td>
                                                    <td>{{$i->OPhone }}</td>
                                                    <td>{{$i->OEmail}}</td>

                                                    <td style="align-items: center">
                                                        <span class="badge bg-warning"><a href="{{ url('edit-query/'.$i->ID) }}">View</a></span>
                                                        <span class="badge bg-danger"><a onclick="return confirm('Are you sure?')" href="{{"delete-query/".$i->ID}}">Delete</a></span>

                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                        </div>
                    </div>
                </section>

            </div>
            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2022 &copy; Dashboard</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="http://Attractionme.net">Attractionme</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('assets/js/main2.js')}}"></script>

    <script src="{{asset('assets/vendors/simple-datatables/simple-datatables.js')}}"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
</body>

</html>
