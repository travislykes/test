@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Users
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!--Plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/select2/css/select2.min.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/pages/dataTables.bootstrap.css')}}"/>
    <!--End of plugin styles-->
    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/pages/tables.css')}}"/>
    <!-- end of page level styles -->
@stop


{{-- Page content --}}
@section('content')
    <header class="head">
        <div class="main-bar row">
            <div class="col-lg-6 col-sm-4">
                <h4 class="nav_top_align">
                    <i class="fa fa-user"></i>
                    User Grid
                </h4>
            </div>
            <div class="col-lg-6 col-sm-8 col-xs-12">
                <ol class="breadcrumb float-xs-right  nav_breadcrumb_top_align">
                    <li class="breadcrumb-item">
                        <a href="index">
                            <i class="fa fa-home" data-pack="default" data-tags=""></i> Dashboard
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Users</a>
                    </li>
                    <li class="active breadcrumb-item">User Grid</li>
                </ol>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">
            <div class="card">
                <div class="card-header bg-white">
                    User Grid
                </div>
                <div class="card-block m-t-35" id="user_body">
                    <div class="table-toolbar">
                        <div class="btn-group">
                            <a href="add_user " id="editable_table_new" class=" btn btn-default">
                                Add User <i class="fa fa-plus"></i>
                            </a>
                        </div>
                        <div class="btn-group float-xs-right users_grid_tools">
                            <div class="tools"></div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <table class="table  table-striped table-bordered table-hover dataTable no-footer"
                                   id="editable_table" role="grid">
                                <thead>
                                <tr role="row">
                                    <th class="sorting_asc wid-20" tabindex="0" rowspan="1" colspan="1">Username</th>
                                    <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1">E-Mail</th>
                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Gender</th>
                                    <th class="sorting wid-20" tabindex="0" rowspan="1" colspan="1">City</th>
                                    <th class="sorting wid-15" tabindex="0" rowspan="1" colspan="1">Status</th>
                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Breanna15</td>
                                    <td>Breanna.Ratke@hotmail.com</td>
                                    <td>Male</td>
                                    <td class="center">North Jadaton</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Elmo83</td>
                                    <td>Elmo.Bartoletti38@yahoo.com</td>
                                    <td>Male</td>
                                    <td class="center">Evangelinefort</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Cooper.Kemmer</td>
                                    <td>Cooper_Kemmer@yahoo.com</td>
                                    <td>Female</td>
                                    <td class="center">Presleymouth</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Lamar_Parisian75</td>
                                    <td>Lamar_Parisian13@yahoo.com</td>
                                    <td>Male</td>
                                    <td class="center">Denesikton</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Ulises54</td>
                                    <td>Ulises43@yahoo.com</td>
                                    <td>Male</td>
                                    <td class="center">South Dillan</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Reece_Corkery</td>
                                    <td>Reece_Corkery49@gmail.com</td>
                                    <td>Female</td>
                                    <td class="center">Lake Dejuan</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Yvonne73</td>
                                    <td>Yvonne36@hotmail.com</td>
                                    <td>Male</td>
                                    <td class="center">New Linaside</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Greyson_Padberg89</td>
                                    <td>Greyson.Padberg@yahoo.com</td>
                                    <td>Female</td>
                                    <td class="center">Reingertown</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Corene.Walsh20</td>
                                    <td>Corene_Walsh64@gmail.com</td>
                                    <td>Male</td>
                                    <td class="center">Maggioview</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Jacinthe70</td>
                                    <td>Jacinthe22@gmail.com</td>
                                    <td>Male</td>
                                    <td class="center">North Zoilamouth</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Moises72</td>
                                    <td>Moises13@gmail.com</td>
                                    <td>Female</td>
                                    <td class="center">Lake Annie</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Michel.Heidenreich</td>
                                    <td>Michel_Heidenreich69@gmail.com</td>
                                    <td>Male</td>
                                    <td class="center">Pfeffershire</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Josianne.Mante</td>
                                    <td>Josianne.Mante@gmail.com</td>
                                    <td>Male</td>
                                    <td class="center">Westfort</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Brendan72</td>
                                    <td>Brendan_Sipes10@yahoo.com</td>
                                    <td>Female</td>
                                    <td class="center">North Vicentaside</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Matt24</td>
                                    <td>Matt_Barrows@hotmail.com</td>
                                    <td>Male</td>
                                    <td class="center">New Westonfurt</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Kiarra.Anderson26</td>
                                    <td>Kiarra_Anderson@gmail.com</td>
                                    <td>Male</td>
                                    <td class="center">West Beulah</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Kristian.Konopelski</td>
                                    <td>Kristian.Konopelski30@hotmail.com</td>
                                    <td>Male</td>
                                    <td class="center">South Eloise</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Isac_Romaguera15</td>
                                    <td>Isac.Romaguera11@hotmail.com</td>
                                    <td>Female</td>
                                    <td class="center">Lake Georgette</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Cedrick.Kassulke</td>
                                    <td>Cedrick24@hotmail.com</td>
                                    <td>Female</td>
                                    <td class="center">Stehrville</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Ethyl_Rolfson</td>
                                    <td>Ethyl11@gmail.com</td>
                                    <td>Female</td>
                                    <td class="center">North Daphney</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Deven_Paucek83</td>
                                    <td>Deven89@hotmail.com</td>
                                    <td>Male</td>
                                    <td class="center">Lake Jacinto</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Syble.Walter</td>
                                    <td>Syble0@yahoo.com</td>
                                    <td>Male</td>
                                    <td class="center">South Aldamouth</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Lacy.Boehm</td>
                                    <td>Lacy_Boehm@hotmail.com</td>
                                    <td>Male</td>
                                    <td class="center">Cartwrightmouth</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Griffin.Prohaska40</td>
                                    <td>Griffin29@yahoo.com</td>
                                    <td>Male</td>
                                    <td class="center">South Ezra</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Garret19</td>
                                    <td>Garret18@gmail.com</td>
                                    <td>Male</td>
                                    <td class="center">Schultzberg</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Tyrel_Murphy</td>
                                    <td>Tyrel.Murphy6@hotmail.com</td>
                                    <td>Male</td>
                                    <td class="center">Lake Cathryn</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Viva_Wisozk92</td>
                                    <td>Viva24@hotmail.com</td>
                                    <td>Female</td>
                                    <td class="center">Nitzschefurt</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Ahmad.Nader89</td>
                                    <td>Ahmad_Nader91@yahoo.com</td>
                                    <td>Female</td>
                                    <td class="center">South Coleville</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Gaston_Bashirian49</td>
                                    <td>Gaston_Bashirian39@hotmail.com</td>
                                    <td>Male</td>
                                    <td class="center">Trantowshire</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Deonte26</td>
                                    <td>Deonte42@gmail.com</td>
                                    <td>Male</td>
                                    <td class="center">Andreaneburgh</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Candace_Hagenes</td>
                                    <td>Candace.Hagenes95@gmail.com</td>
                                    <td>Female</td>
                                    <td class="center">Jeraldbury</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Margarette_Harber</td>
                                    <td>Margarette.Harber55@yahoo.com</td>
                                    <td>Male</td>
                                    <td class="center">Port Alexzandermouth</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Delta59</td>
                                    <td>Delta.Grady@hotmail.com</td>
                                    <td>Female</td>
                                    <td class="center">Clairechester</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Emanuel_Smitham</td>
                                    <td>Emanuel_Smitham@yahoo.com</td>
                                    <td>Male</td>
                                    <td class="center">New Giannimouth</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Henriette.Bergstrom25</td>
                                    <td>Henriette43@yahoo.com</td>
                                    <td>Male</td>
                                    <td class="center">Rogahnland</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Shaina_Daniel11</td>
                                    <td>Shaina.Daniel@hotmail.com</td>
                                    <td>Female</td>
                                    <td class="center">Streichburgh</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Alice_Rempel76</td>
                                    <td>Alice36@hotmail.com</td>
                                    <td>Male</td>
                                    <td class="center">South Jaquelin</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Shawn.Cruickshank</td>
                                    <td>Shawn30@gmail.com</td>
                                    <td>Female</td>
                                    <td class="center">Mayertberg</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Chesley6</td>
                                    <td>Chesley60@hotmail.com</td>
                                    <td>Female</td>
                                    <td class="center">Shanyhaven</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Amira.Rolfson</td>
                                    <td>Amira86@gmail.com</td>
                                    <td>Male</td>
                                    <td class="center">Donnieburgh</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Vivianne.Casper</td>
                                    <td>Vivianne52@yahoo.com</td>
                                    <td>Female</td>
                                    <td class="center">Mollieberg</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Colby98</td>
                                    <td>Colby_Jast35@yahoo.com</td>
                                    <td>Male</td>
                                    <td class="center">Quigleyport</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Queen_Blick23</td>
                                    <td>Queen.Blick8@yahoo.com</td>
                                    <td>Male</td>
                                    <td class="center">Rosalindside</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Dock.Armstrong</td>
                                    <td>Dock_Armstrong@yahoo.com</td>
                                    <td>Female</td>
                                    <td class="center">North Ashtyn</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Scot50</td>
                                    <td>Scot11@hotmail.com</td>
                                    <td>Female</td>
                                    <td class="center">Felixshire</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Billy_Osinski</td>
                                    <td>Billy_Osinski66@gmail.com</td>
                                    <td>Female</td>
                                    <td class="center">Rennerstad</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Alexandria.OConner</td>
                                    <td>Alexandria30@gmail.com</td>
                                    <td>Male</td>
                                    <td class="center">Hellenfort</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Pearlie_Lang73</td>
                                    <td>Pearlie.Lang3@hotmail.com</td>
                                    <td>Female</td>
                                    <td class="center">Lesleyburgh</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Jameson_Wolf55</td>
                                    <td>Jameson_Wolf@gmail.com</td>
                                    <td>Male</td>
                                    <td class="center">Ceceliaberg</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Maurice_Medhurst</td>
                                    <td>Maurice89@hotmail.com</td>
                                    <td>Female</td>
                                    <td class="center">North Freidaborough</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Emanuel83</td>
                                    <td>Emanuel60@gmail.com</td>
                                    <td>Female</td>
                                    <td class="center">Port Aracelyview</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Kenneth28</td>
                                    <td>Kenneth_Herzog@gmail.com</td>
                                    <td>Male</td>
                                    <td class="center">Port Rockyland</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Fabian_Eichmann</td>
                                    <td>Fabian2@hotmail.com</td>
                                    <td>Male</td>
                                    <td class="center">Gutmannfort</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Tanya_Pouros</td>
                                    <td>Tanya.Pouros@gmail.com</td>
                                    <td>Female</td>
                                    <td class="center">East Frederique</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Brook93</td>
                                    <td>Brook64@yahoo.com</td>
                                    <td>Male</td>
                                    <td class="center">Schmittchester</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Suzanne_Anderson57</td>
                                    <td>Suzanne17@gmail.com</td>
                                    <td>Female</td>
                                    <td class="center">Nikolasstad</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Claudine.Kub82</td>
                                    <td>Claudine51@yahoo.com</td>
                                    <td>Male</td>
                                    <td class="center">Devinside</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Rosalee38</td>
                                    <td>Rosalee3@gmail.com</td>
                                    <td>Male</td>
                                    <td class="center">Rutherfordburgh</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Karine.Schaden61</td>
                                    <td>Karine_Schaden@gmail.com</td>
                                    <td>Male</td>
                                    <td class="center">Parisiantown</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Brown20</td>
                                    <td>Brown4@yahoo.com</td>
                                    <td>Male</td>
                                    <td class="center">Katrinafort</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Markus13</td>
                                    <td>Markus_Osinski@gmail.com</td>
                                    <td>Female</td>
                                    <td class="center">Nicohaven</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Lue21</td>
                                    <td>Lue78@gmail.com</td>
                                    <td>Male</td>
                                    <td class="center">Donnafort</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Ardella_VonRueden</td>
                                    <td>Ardella_VonRueden@hotmail.com</td>
                                    <td>Female</td>
                                    <td class="center">Buckridgeview</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Delphia_Kohler</td>
                                    <td>Delphia96@hotmail.com</td>
                                    <td>Female</td>
                                    <td class="center">Port Mableside</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Felipe1</td>
                                    <td>Felipe_Hamill99@hotmail.com</td>
                                    <td>Male</td>
                                    <td class="center">Lake Nicolastown</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Simone.McCullough89</td>
                                    <td>Simone_McCullough84@gmail.com</td>
                                    <td>Male</td>
                                    <td class="center">South Cortney</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Gabriella.Boyle41</td>
                                    <td>Gabriella88@gmail.com</td>
                                    <td>Male</td>
                                    <td class="center">Lake Nat</td>
                                    <td class="center">Approved</td>
                                    <td><a href="view_user " data-toggle="tooltip" data-placement="top"
                                           title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user "><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" href="delete_user "><i
                                                    class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->
                </div>
            </div>
        </div>
        <!-- /.inner -->
    </div>
    <!-- /.outer -->
@stop
{{-- page level scripts --}}
@section('footer_scripts')
    <!--Plugin scripts-->
    <script type="text/javascript" src="{{asset('assets/vendors/select2/js/select2.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/dataTables.bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/dataTables.responsive.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/dataTables.buttons.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/buttons.colVis.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/buttons.html5.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/buttons.bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/buttons.print.min.js')}}"></script>
    <!--End of plugin scripts-->
    <!--Page level scripts-->
    <script type="text/javascript" src="{{asset('assets/js/pages/users.js')}}"></script>
    <!-- end page level scripts -->
@stop