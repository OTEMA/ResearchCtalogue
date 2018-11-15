<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/backend_images/favicon.png')}}">
        <title>MFarmer Dashboard</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="{{asset('css/backend_css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{asset('css/backend_css/bootstrap-responsive.min.css')}}" />
        <link rel="stylesheet" href="{{asset('css/backend_css/matrix-style.css')}}" />
        <link rel="stylesheet" href="{{asset('css/backend_css/select2.css')}}" />
        <link rel="stylesheet" href="{{asset('css/backend_css/matrix-media.css')}}" />
        <link rel="stylesheet" href="{{asset('fonts/backend_fonts/css/font-awesome.css')}}" />
        <style>
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .links > a {
                color: #0000F0;
                padding: 0 25px;
                margin: 0 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
        </style>
    </head>
    <body>
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <div class="content">
            <div class="widget-content nopadding">
                <table class="table table-bordered data-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>CATEGORY</th>
                            <th>PUBLICATION CODE</th>
                            <th>AUTHOR</th>
                            <th>EMAIL</th>
                            <th>DESCRIPTION</th>
                            <th>IMAGE</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($publications as $publication)
                        <tr class="gradeX">
                            <td class="center">{{ $publication->id }}</td>
                            <td>{{ $publication->category_id }}</td>
                            <td class="center">{{ $publication->author_name }}</td>

                            <td class="center">{{ $publication->author_email }}</td>
                            <td>{{ $publication->path }}</td>
                            <td><a href="#" class="btn btn-success btn-mini">View <i class="icon icon-eye-open"></i></a> |</td> 
                            <td><a href="{{url('admin/edit_category/'.$publication->id)}}" class="btn btn-warning btn-mini">Edit <i class="icon icon-edit"></i></a> | </td>
                            <td><a rel="{{$publication->id}}" rel1="delete_category" href="javascript:" class="btn btn-danger btn-mini deleteCategory">Delete <i class="icon icon-trash"></i></a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <script src="{{asset('js/backend_js/excanvas.min.js')}}"></script>
        <!--Jquery-->
        <script src="{{asset('js/backend_js/jquery.min.js')}}"></script> 
        <script src="{{asset('js/backend_js/jquery.ui.custom.js')}}"></script> 
        <script src="{{asset('js/backend_js/bootstrap.min.js')}}"></script> 
        <script src="{{asset('js/backend_js/matrix.js')}}"></script> 
        <script src="{{asset('js/backend_js/fullcalendar.min.js')}}"></script>
        <script src="{{asset('js/backend_js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('js/backend_js/matrix.tables.js')}}"></script>
        <script src="{{asset('js/backend_js/matrix.interface.js')}}"></script> 
        <script src="{{asset('js/backend_js/jquery.uniform.js')}}"></script>
        <script src="{{asset('js/backend_js/select2.min.js')}}"></script> 
    </body>
</html>
