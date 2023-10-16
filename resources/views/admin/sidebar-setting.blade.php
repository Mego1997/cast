<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Models - Admin Dashboard</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">

    <link rel="stylesheet" href="{{asset('assets/vendors/simple-datatables/style.css')}}">

    <link rel="stylesheet" href="{{asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.svg')}}" type="image/x-icon">

    <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js')}}"></script>
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index.html"><img src="{{ asset("images/logo-black.png")}}"  alt="Logo" srcset="" width="100%" ></a>
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
                            <h3>Models</h3>
                            <p class="text-subtitle text-muted">All Models Data</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Sidebar Database</li>


                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            Sidebar Database
                        </div>
                        <!-- Group Section -->
                        <section class="section">
                            <div class="row" id="basic-table">
                                <div class="col-12 col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Sidebar group list</h4>
                                        </div>
                                        <div class="card-content">
                                            <div class="card-body">
                                                <p class="card-text">every group have sidebar items.
                                                </p>
                                                <!-- Table with outer spacing -->
                                                <div class="table-responsive">
                                                    <table class="table table-striped" id="table1">
                                                        <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Group Name</th>
                                                            <th>postion</th>
                                                            <th>Action</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($sidebargroup as $i)
                                                            <tr>
                                                                <td class="groid">{{$i->ID}}</td>
                                                                <td class="text-bold-500 groname">{{$i->sidebar_section_name}}</td>
                                                                <td class="text-bold-500 gropos">{{$i->sidebarsectiondesc}}</td>
                                                                <td style="align-items: center">
                                                                    <span class="badge bg-warning editgroup"><a href="#">Edit</a></span>
                                                                    <span class="badge bg-danger"><a onclick="return confirm('Are you sure?')" href="{{"delete-sidebar-group/".$i->ID}}">Delete</a></span>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>


                                                </div>

                                                @if ($sidebargroup->lastPage() > 1)
                                                    <?php
                                                    $link_limit = 5; // maximum number of links (a little bit inaccurate, but will be ok for now)
                                                    ?>
                                                    <div class="card-body">

                                                        <nav aria-label="Page navigation example">
                                                            <ul class="pagination pagination-primary">
                                                                @if($sidebargroup->currentPage() == 1)
                                                                    <li class="page-item active"><a class="page-link" href="{{ $sidebargroup->previousPageUrl()}}">
                                                                            <span aria-hidden="true"><i class="bi bi-chevron-left"></i></span>
                                                                        </a></li>

                                                                    </span>
                                                                @else
                                                                    <li class="page-item"><a class="page-link" href="{{ $sidebargroup->previousPageUrl()}}">
                                                                            <span aria-hidden="true"><i class="bi bi-chevron-left"></i></span>
                                                                        </a></li>
                                                                @endif
                                                                @for ($i = 1; $i <= $sidebargroup->lastPage(); $i++)
                                                                    <?php
                                                                    $half_total_links = floor($link_limit / 2);
                                                                    $from = $sidebargroup->currentPage() - $half_total_links;
                                                                    $to = $sidebargroup->currentPage() + $half_total_links;
                                                                    if ($sidebargroup->currentPage() < $half_total_links) {
                                                                        $to += $half_total_links - $sidebargroup->currentPage();
                                                                    }
                                                                    if ($sidebargroup->lastPage() - $sidebargroup->currentPage() < $half_total_links) {
                                                                        $from -= $half_total_links - ($sidebargroup->lastPage() - $sidebargroup->currentPage()) - 1;
                                                                    }
                                                                    ?>
                                                                    @if ($from < $i && $i < $to)
                                                                        @if($sidebargroup->currentPage() == $i)
                                                                            <li class="page-item active"><a class="page-link" >{{ $i }}</a></li>
                                                                        @else
                                                                            <li class="page-item "><a class="page-link" href="{{ $sidebargroup->url($i) }}">{{ $i }}</a></li>
                                                                            </a>
                                                                        @endif
                                                                    @endif
                                                                @endfor
                                                                @if($sidebargroup->lastPage() > $link_limit)
                                                                    @if($sidebargroup->currentPage() == $sidebargroup->lastPage() || $sidebargroup->currentPage() == ($sidebargroup->lastPage()-1))

                                                                    @else
                                                                        <li class="page-item "><a class="page-link" >...</a></li>
                                                                    @endif

                                                                @endif
                                                                @if($sidebargroup->currentPage() == $sidebargroup->lastPage())
                                                                    <li class="page-item active"><a class="page-link" href="{{ $sidebargroup->nextPageUrl()}}">
                                                                            <span aria-hidden="true"><i class="bi bi-chevron-right"></i></span>
                                                                        </a></li>
                                                                @else
                                                                    <li class="page-item "><a class="page-link" href="{{ $sidebargroup->nextPageUrl()}}">
                                                                            <span aria-hidden="true"><i class="bi bi-chevron-right"></i></span>
                                                                        </a></li>
                                                                @endif

                                                            </ul>
                                                        </nav>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Add New Group</h4>
                                        </div>
                                        <div class="card-body">
                                            <form  action="{{url('insert-side-group')}}" method = "post" class="form form-horizontal">
                                                {{csrf_field()}}
                                                <div class="form-body">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label>Group Name</label>
                                                        </div>
                                                        <div class="col-md-8 form-group">
                                                            <input type="text" id="groupinsertname" class="form-control"
                                                                   name="groupinsertname" placeholder="Group Name" required>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>Group Postion</label>
                                                        </div>
                                                        <div class="col-md-8 form-group">
                                                            <input type="text" id="grouppos" class="form-control"
                                                                   name="grouppos" placeholder="Group Postion" required>
                                                        </div>
                                                        <div class="col-sm-12 d-flex justify-content-end">
                                                            <button type="submit"
                                                                    class="btn btn-primary me-1 mb-1">Add</button>
                                                            <button type="reset"
                                                                    class="btn btn-light-secondary me-1 mb-1" onclick="rest_ginsert()">Reset</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="card-body" id="editgroupform" style="display: none">
                                            <form  action="{{url('update-side-group')}}" class="form form-horizontal">
                                                {{csrf_field()}}
                                                <div class="form-body">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label>Group Name</label>
                                                        </div>
                                                        <div class="col-md-8 form-group" style="visibility: hidden">
                                                            <input type="text" id="groupupdateid" class="form-control"
                                                                   name="groupupdateid" placeholder="Group Name">
                                                        </div>
                                                        <div class="col-md-8 form-group">
                                                            <input type="text" id="groupupdatename" class="form-control"
                                                                   name="groupupdatename" placeholder="Group Name" required>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>Group Postion</label>
                                                        </div>
                                                        <div class="col-md-8 form-group">
                                                            <input type="number" id="ugrouppos" class="form-control"
                                                                   name="ugrouppos" placeholder="Group Postion" required>
                                                        </div>
                                                        <div class="col-sm-12 d-flex justify-content-end">
                                                            <button type="submit"
                                                                    class="btn btn-primary me-1 mb-1">update</button>
                                                            <button type="reset"
                                                                    class="btn btn-light-secondary me-1 mb-1" onclick="cancel_update()">cancel</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- EOF Group Section -->
                        <!-- Items Section -->
                        <section class="section">
                            <div class="row" id="basic-table">
                                <div class="col-12 col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Sidebar items list</h4>
                                        </div>
                                        <div class="card-content">
                                            <div class="card-body">

                                                <div class="table-responsive">
                                                    <table class="table table-striped" id="table2">
                                                        <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Item Name</th>
                                                            <th>Link</th>
                                                            <th>Sub</th>
                                                            <th>Menu</th>
                                                            <th>Icon</th>
                                                            <th>Item Postion</th>
                                                            <th>Action</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($sidebaritems as $i)
                                                            <tr>
                                                                <td class="itemsid">{{$i->ID}}</td>
                                                                <td class="text-bold-500 itemsname">{{$i->sidebaritemName}}</td>
                                                                <td class="text-bold-500 itemshref">{{$i->sidebaritemHref}}</td>
                                                                <td class="text-bold-500 itemssub">{{$i->Hassub}}</td>
                                                                <td class="text-bold-500 itemssectionname">{{$i->sidebar_section_name}}</td>
                                                                <td class="text-bold-500 itemsitemlogo">{{$i->sidebar_item_logo}}</td>
                                                                <td class="text-bold-500 itemsitempos">{{$i->sidebaritemdesc}}</td>
                                                                <td style="align-items: center">
                                                                    <span class="badge bg-warning edititem"><a href="#edititemsform">Edit</a></span>
                                                                    <span class="badge bg-danger"><a onclick="return confirm('Are you sure?')" href="{{"delete-sidebar-item/".$i->ID}}">Delete</a></span>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>

                                                </div>
                                                <!-- Navigation -->
                                                @if ($sidebaritems->lastPage() > 1)
                                                    <?php
                                                    $link_limit = 5; // maximum number of links (a little bit inaccurate, but will be ok for now)
                                                    ?>
                                                    <div class="card-body">

                                                        <nav aria-label="Page navigation example">
                                                            <ul class="pagination pagination-primary">
                                                                @if($sidebaritems->currentPage() == 1)
                                                                    <li class="page-item active"><a class="page-link" href="{{ $sidebaritems->previousPageUrl()}}">
                                                                            <span aria-hidden="true"><i class="bi bi-chevron-left"></i></span>
                                                                        </a></li>

                                                                    </span>
                                                                @else
                                                                    <li class="page-item"><a class="page-link" href="{{ $sidebaritems->previousPageUrl()}}">
                                                                            <span aria-hidden="true"><i class="bi bi-chevron-left"></i></span>
                                                                        </a></li>
                                                                @endif
                                                                @for ($i = 1; $i <= $sidebaritems->lastPage(); $i++)
                                                                    <?php
                                                                    $half_total_links = floor($link_limit / 2);
                                                                    $from = $sidebaritems->currentPage() - $half_total_links;
                                                                    $to = $sidebaritems->currentPage() + $half_total_links;
                                                                    if ($sidebaritems->currentPage() < $half_total_links) {
                                                                        $to += $half_total_links - $sidebaritems->currentPage();
                                                                    }
                                                                    if ($sidebaritems->lastPage() - $sidebaritems->currentPage() < $half_total_links) {
                                                                        $from -= $half_total_links - ($sidebaritems->lastPage() - $sidebaritems->currentPage()) - 1;
                                                                    }
                                                                    ?>
                                                                    @if ($from < $i && $i < $to)
                                                                        @if($sidebaritems->currentPage() == $i)
                                                                            <li class="page-item active"><a class="page-link" >{{ $i }}</a></li>
                                                                        @else
                                                                            <li class="page-item "><a class="page-link" href="{{ $sidebaritems->url($i) }}">{{ $i }}</a></li>
                                                                            </a>
                                                                        @endif
                                                                    @endif
                                                                @endfor
                                                                @if($sidebaritems->lastPage() > $link_limit)
                                                                    @if($sidebaritems->currentPage() == $sidebaritems->lastPage() || $sidebaritems->currentPage() == ($sidebaritems->lastPage()-1))

                                                                    @else
                                                                        <li class="page-item "><a class="page-link" >...</a></li>
                                                                    @endif

                                                                @endif
                                                                @if($sidebaritems->currentPage() == $sidebaritems->lastPage())
                                                                    <li class="page-item active"><a class="page-link" href="{{ $sidebaritems->nextPageUrl()}}">
                                                                            <span aria-hidden="true"><i class="bi bi-chevron-right"></i></span>
                                                                        </a></li>
                                                                @else
                                                                    <li class="page-item "><a class="page-link" href="{{ $sidebaritems->nextPageUrl()}}">
                                                                            <span aria-hidden="true"><i class="bi bi-chevron-right"></i></span>
                                                                        </a></li>
                                                                @endif

                                                            </ul>
                                                        </nav>
                                                    </div>
                                            @endif
                                            <!-- Eof Navigation -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Add New Sidebar Item</h4>
                                        </div>
                                        <div class="card-content">
                                        <div class="card-body">
                                            <p class="card-text">Items for groups and every item have sub menu if you need.
                                            </p>
                                            <!-- Table with outer spacing -->
                                            <form action="{{url('insert-side-item')}}" method = "post" class="form form-horizontal">
                                                {{csrf_field()}}
                                                <div class="form-body">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label>Sidebar Item Name</label>
                                                        </div>
                                                        <div class="col-md-8 form-group">
                                                            <input type="text" id="SidebarItemName" class="form-control"
                                                                   name="SidebarItemName" placeholder="Item Name" required>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>Sidebar Item Link Name</label>
                                                        </div>
                                                        <div class="col-md-8 form-group">
                                                            <input type="text" id="SidebarItemLinkName" class="form-control"
                                                                   name="SidebarItemLinkName" placeholder="Link Name" required>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>Sidebar Item Have Sub</label>
                                                        </div>
                                                        <div class="col-md-8 form-group">
                                                            <select name="SidebarItemHaveSub"  id="SidebarItemHaveSub" class="choices form-select" required>

                                                                <option value="yes">yes</option>
                                                                <option value="No">No</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>Item Group Name</label>
                                                        </div>
                                                        <div class="col-md-8 form-group">
                                                            <select name="SidebarItemGroupName"  id="SidebarItemGroupName" class="choices form-select" required>
                                                                @foreach($sidebargroupbox as $i)
                                                                <option value="{{$i->ID}}">{{$i->sidebar_section_name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>Sidebar Item Icon</label>
                                                        </div>
                                                        <div class="col-md-8 form-group">
                                                            <input type="text" id="SidebarItemIcon" class="form-control"
                                                                   name="SidebarItemIcon" placeholder="Item Icon">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>Item Postion</label>
                                                        </div>
                                                        <div class="col-md-8 form-group">
                                                            <input type="number" id="SidebarItempos" class="form-control"
                                                                   name="SidebarItempos" placeholder="Item Postion">
                                                        </div>
                                                        <div class="col-sm-12 d-flex justify-content-end">
                                                            <button type="submit"
                                                                    class="btn btn-primary me-1 mb-1">Add</button>
                                                            <button type="reset"
                                                                    class="btn btn-light-secondary me-1 mb-1" onclick="rest_iinsert()">Reset</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                            <div class="card-body" id="edititemsform" style="display: none">
                                                <form action="{{url('update-side-item')}}" class="form form-horizontal">
                                                    {{csrf_field()}}
                                                    <div class="form-body">
                                                        <div class="row">
                                                            <div class="col-md-4" style="visibility: hidden">
                                                                <label>Sidebar Item Name</label>
                                                            </div>
                                                            <div class="col-md-8 form-group" style="visibility: hidden">
                                                                <input type="text" id="uSidebarItemid" class="form-control"
                                                                       name="uSidebarItemid" placeholder="Item Name" style="visibility: hidden">
                                                            </div>

                                                            <div class="col-md-4">
                                                                <label>Sidebar Item Name</label>
                                                            </div>
                                                            <div class="col-md-8 form-group">
                                                                <input type="text" id="uSidebarItemName" class="form-control"
                                                                       name="uSidebarItemName" placeholder="Item Name" required>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <label>Sidebar Item Link Name</label>
                                                            </div>
                                                            <div class="col-md-8 form-group">
                                                                <input type="text" id="uSidebarItemLinkName" class="form-control"
                                                                       name="uSidebarItemLinkName" placeholder="Link Name" required>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <label>Sidebar Item Have Sub</label>
                                                            </div>
                                                            <div class="col-md-8 form-group">
                                                                <select name="uSidebarItemHaveSub"  id="uSidebarItemHaveSub" class="choices form-select" required>
                                                                    <option id="uSidebarItemHaveSubitem" value=""></option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                </select>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <label>Sidebar Group Name</label>
                                                            </div>
                                                            <div class="col-md-8 form-group">
                                                                <select name="uSidebarItemGroupName"  id="uSidebarItemGroupName" class="choices form-select" required>

                                                                    @foreach($sidebargroupbox as $i)
                                                                        <option value="{{$i->ID}}">{{$i->sidebar_section_name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <label>Sidebar Item Icon</label>
                                                            </div>
                                                            <div class="col-md-8 form-group">
                                                                <input type="text" id="uSidebarItemIcon" class="form-control"
                                                                       name="uSidebarItemIcon" placeholder="Item Icon" required>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <label>Item Postion</label>
                                                            </div>
                                                            <div class="col-md-8 form-group">
                                                                <input type="number" id="uSidebarItempos" class="form-control"
                                                                       name="uSidebarItempos" placeholder="Item Icon" required>
                                                            </div>
                                                            <div class="col-sm-12 d-flex justify-content-end">
                                                                <button type="submit"
                                                                        class="btn btn-primary me-1 mb-1">update</button>
                                                                <button type="reset"
                                                                        class="btn btn-light-secondary me-1 mb-1" onclick="cancel_itemupdate()">cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- EOF Items Section -->
                        <!-- Sub items Section -->
                        <section class="section">
                            <div class="row" id="basic-table">
                                <div class="col-12 col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Sub Menu items list</h4>
                                        </div>
                                        <div class="card-content">
                                            <div class="card-body">
                                                <p class="card-text">Items for groups and every item have sub menu if you need.
                                                </p>
                                                <!-- Table with outer spacing -->
                                                <div class="table-responsive">
                                                    <table class="table table-striped">
                                                        <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Sub Name</th>
                                                            <th>Sub Href</th>
                                                            <th>Sub Item</th>
                                                            <th>Sub Postion</th>
                                                            <th>Action</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($Submenuitems as $i)
                                                            <tr>
                                                                <td class="subid">{{$i->ID}}</td>
                                                                <td class="text-bold-500 suname">{{$i->submenuItemName}}</td>
                                                                <td class="text-bold-500 suhref">{{$i->submenuItemHref}}</td>
                                                                <td class="text-bold-500 suitem">{{$i->submenuitemss}}</td>
                                                                <td class="text-bold-500 supos">{{$i->sidebarsubdesc}}</td>
                                                                <td style="align-items: center">
                                                                    <span class="badge bg-warning editsubmenu"><a href="#editisubform">Edit</a></span>
                                                                    <span class="badge bg-danger"><a onclick="return confirm('Are you sure?')" href="{{"delete-sidebar-sub/".$i->ID}}">Delete</a></span>

                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- Navigation -->
                                                @if ($Submenuitems->lastPage() > 1)
                                                    <?php
                                                    $link_limit = 5; // maximum number of links (a little bit inaccurate, but will be ok for now)
                                                    ?>
                                                    <div class="card-body">

                                                        <nav aria-label="Page navigation example">
                                                            <ul class="pagination pagination-primary">
                                                                @if($Submenuitems->currentPage() == 1)
                                                                    <li class="page-item active"><a class="page-link" href="{{ $Submenuitems->previousPageUrl()}}">
                                                                            <span aria-hidden="true"><i class="bi bi-chevron-left"></i></span>
                                                                        </a></li>

                                                                    </span>
                                                                @else
                                                                    <li class="page-item"><a class="page-link" href="{{ $Submenuitems->previousPageUrl()}}">
                                                                            <span aria-hidden="true"><i class="bi bi-chevron-left"></i></span>
                                                                        </a></li>
                                                                @endif
                                                                @for ($i = 1; $i <= $Submenuitems->lastPage(); $i++)
                                                                    <?php
                                                                    $half_total_links = floor($link_limit / 2);
                                                                    $from = $Submenuitems->currentPage() - $half_total_links;
                                                                    $to = $Submenuitems->currentPage() + $half_total_links;
                                                                    if ($Submenuitems->currentPage() < $half_total_links) {
                                                                        $to += $half_total_links - $Submenuitems->currentPage();
                                                                    }
                                                                    if ($Submenuitems->lastPage() - $Submenuitems->currentPage() < $half_total_links) {
                                                                        $from -= $half_total_links - ($Submenuitems->lastPage() - $Submenuitems->currentPage()) - 1;
                                                                    }
                                                                    ?>
                                                                    @if ($from < $i && $i < $to)
                                                                        @if($Submenuitems->currentPage() == $i)
                                                                            <li class="page-item active"><a class="page-link" >{{ $i }}</a></li>
                                                                        @else
                                                                            <li class="page-item "><a class="page-link" href="{{ $Submenuitems->url($i) }}">{{ $i }}</a></li>
                                                                            </a>
                                                                        @endif
                                                                    @endif
                                                                @endfor
                                                                @if($Submenuitems->lastPage() > $link_limit)
                                                                    @if($Submenuitems->currentPage() == $Submenuitems->lastPage() || $Submenuitems->currentPage() == ($Submenuitems->lastPage()-1))

                                                                    @else
                                                                        <li class="page-item "><a class="page-link" >...</a></li>
                                                                    @endif

                                                                @endif
                                                                @if($Submenuitems->currentPage() == $Submenuitems->lastPage())
                                                                    <li class="page-item active"><a class="page-link" href="{{ $Submenuitems->nextPageUrl()}}">
                                                                            <span aria-hidden="true"><i class="bi bi-chevron-right"></i></span>
                                                                        </a></li>
                                                                @else
                                                                    <li class="page-item "><a class="page-link" href="{{ $Submenuitems->nextPageUrl()}}">
                                                                            <span aria-hidden="true"><i class="bi bi-chevron-right"></i></span>
                                                                        </a></li>
                                                                @endif

                                                            </ul>
                                                        </nav>
                                                    </div>
                                            @endif
                                            <!-- Eof Navigation -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Add New Sub</h4>
                                        </div>
                                        <div class="card-body">
                                            <form action="{{url('insert-side-sub')}}" method = "post" class="form form-horizontal">
                                                {{csrf_field()}}
                                                <div class="form-body">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label>Sub Name</label>
                                                        </div>
                                                        <div class="col-md-8 form-group">
                                                            <input type="text" id="Subname" class="form-control"
                                                                   name="Subname" placeholder="Sub Name" required>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>Sub Href</label>
                                                        </div>
                                                        <div class="col-md-8 form-group">
                                                            <input type="text" id="Subhref" class="form-control"
                                                                   name="Subhref" placeholder="Sub Href" required>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>Sub Item</label>
                                                        </div>
                                                        <div class="col-md-8 form-group">
                                                            <select name="Subitem"  id="Subitem" class="choices form-select" required>
                                                                @foreach($sidebaritemsbox as $i)
                                                                    <option value="{{$i->ID}}">{{$i->sidebaritemName}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>Sub Psotion</label>
                                                        </div>
                                                        <div class="col-md-8 form-group">
                                                            <input type="number" id="Subpos" class="form-control"
                                                                   name="Subpos" placeholder="Sub Postion" required>
                                                        </div>
                                                        <div class="col-sm-12 d-flex justify-content-end">
                                                            <button type="submit"
                                                                    class="btn btn-primary me-1 mb-1" >Add</button>
                                                            <button type="reset"
                                                                    class="btn btn-light-secondary me-1 mb-1" onclick="rest_sinsert()">Reset</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="card-body" id="editisubform" style="display: none">
                                            <form action="{{url('update-side-sub')}}" class="form form-horizontal">
                                                {{csrf_field()}}
                                                <div class="form-body">
                                                    <div class="row">
                                                        <div class="col-md-4" style="visibility: hidden">
                                                            <label>Sub ID</label>
                                                        </div>
                                                        <div class="col-md-8 form-group" style="visibility: hidden">
                                                            <input type="text" id="uSubid" class="form-control"
                                                                   name="uSubid" placeholder="Sub Name">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>Sub Name</label>
                                                        </div>
                                                        <div class="col-md-8 form-group">
                                                            <input type="text" id="uSubname" class="form-control"
                                                                   name="uSubname" placeholder="Sub Name">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>Sub Href</label>
                                                        </div>
                                                        <div class="col-md-8 form-group">
                                                            <input type="text" id="uSubhref" class="form-control"
                                                                   name="uSubhref" placeholder="Sub Href">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>Sub Item</label>
                                                        </div>
                                                        <div class="col-md-8 form-group">
                                                            <select name="uSubitem"  id="uSubitem" class="choices form-select" required>
                                                                @foreach($sidebaritemsbox as $i)
                                                                    <option value="{{$i->ID}}">{{$i->sidebaritemName}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>Sub Psotion</label>
                                                        </div>
                                                        <div class="col-md-8 form-group">
                                                            <input type="number" id="uSubpos" class="form-control"
                                                                   name="uSubpos" placeholder="Sub Postion" required>
                                                        </div>
                                                        <div class="col-sm-12 d-flex justify-content-end">
                                                            <button type="submit"
                                                                    class="btn btn-primary me-1 mb-1" >update</button>
                                                            <button type="reset"
                                                                    class="btn btn-light-secondary me-1 mb-1" onclick="cancel_subupdate()">cancel</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- EOF sub items Section -->
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


        let table2 = document.querySelector('#table2');
        let dataTable1 = new simpleDatatables.DataTable(table2);

        let table3 = document.querySelector('#table3');
        let dataTable2 = new simpleDatatables.DataTable(table3);


    </script>

    <script type="text/javascript">

        /////////Group Validation/////////////
        $(".editgroup").click(function() {
            var $row = $(this).closest("tr");    // Find the row
            var $groid = $row.find(".groid").text(); // Find the text
            var $groname = $row.find(".groname").text(); // Find the text
            var $gropos = $row.find(".gropos").text();
            document.getElementById("editgroupform").style.display = "block";
            document.getElementById("groupupdateid").value = $groid;
            document.getElementById("groupupdatename").value = $groname;
            document.getElementById("ugrouppos").value = $gropos;
        });

        function cancel_update(){
            document.getElementById("editgroupform").style.display = "none";
        }

        function rest_ginsert(){
            document.getElementById("groupinsertname").value = "";
            document.getElementById("gropos").value = "";
        }
        /////////Group Validation/////////////


        /////////Items Validation/////////////
        $(".edititem").click(function() {
            var $row = $(this).closest("tr");
            var $itemsid = $row.find(".itemsid").text();
            var $itemsname = $row.find(".itemsname").text();
            var $itemshref = $row.find(".itemshref").text();
            var $itemssub = $row.find(".itemssub").text();
            var $itemssectionname = $row.find(".itemssectionname").text();
            var $itemsitemlogo = $row.find(".itemsitemlogo").text();
            var $itemsitempos = $row.find(".itemsitempos").text();
            document.getElementById("edititemsform").style.display = "block";
            document.getElementById("uSidebarItemid").value = $itemsid;
            document.getElementById("uSidebarItemName").value = $itemsname;
            document.getElementById("uSidebarItemLinkName").value = $itemshref;
            if($itemssub==0){
                document.getElementById("uSidebarItemHaveSubitem").value = "No";
                document.getElementById("uSidebarItemHaveSubitem").innerHTML = "No";
            }
            else{
                document.getElementById("uSidebarItemHaveSubitem").value = "Yes";
                document.getElementById("uSidebarItemHaveSubitem").innerHTML = "Yes";
            }
            document.getElementById("uSidebarItemGroupName").value = $itemssectionname;
            document.getElementById("uSidebarItemIcon").value = $itemsitemlogo;
            document.getElementById("uSidebarItempos").value = $itemsitempos;
        });

        function cancel_itemupdate(){
            document.getElementById("edititemsform").style.display = "none";
        }

        function rest_iinsert(){
            document.getElementById("SidebarItemName").value = "";
            document.getElementById("SidebarItemLinkName").value = "";
            document.getElementById("SidebarItemHaveSub").value = "";
            document.getElementById("SidebarItemGroupName").value = "";
            document.getElementById("SidebarItemIcon").value = "";
            document.getElementById("SidebarItempos").value = "";
        }
        /////////Items Validation/////////////

        /////////Subs Validation/////////////
        $(".editsubmenu").click(function() {
            var $row = $(this).closest("tr");
            var $subid = $row.find(".subid").text();
            var $subname = $row.find(".suname").text();
            var $subhref = $row.find(".suhref").text();
            var $subitem = $row.find(".suitem").text();
            var $subpos = $row.find(".supos").text();

            document.getElementById("editisubform").style.display = "block";
            document.getElementById("uSubid").value = $subid;
            document.getElementById("uSubname").value = $subname;
            document.getElementById("uSubhref").value = $subhref;
            document.getElementById("uSubitem").value = $subitem;
            document.getElementById("uSubpos").value = $subpos;
        });

        function cancel_subupdate(){
            document.getElementById("editisubform").style.display = "none";
        }

        function rest_sinsert(){
            document.getElementById("Subname").value = "";
            document.getElementById("Subhref").value = "";
            document.getElementById("Subitem").value = "";
            document.getElementById("Subitem").value = "";
            document.getElementById("Subpos").value = "";

        }
        /////////Subs Validation/////////////
    </script>



</body>

</html>
