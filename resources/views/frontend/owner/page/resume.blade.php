
@extends('frontend.layouts.master')
@section('contain')
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <div class="header-section">
        <div class="container position-relative">
            <div class="row">
                <div class="col-xl-5 col-md-12 my-xl-5 mb-0 my-sm-3  position-static ">
                    <div class="main-menu d-none d-md-block">
                        <nav>
                            <ul>
                                <li><a href="{{url('/')}}">Home </a></li>
                                @auth('web')
                                    <li><a href="{{route('admin.users')}}">User Profile</a> </li>
                                @elseauth('owner')
                                    <li><a href="{{route('admin.company')}}">Owner Profile</a></li>
                                @endauth

                            </ul>
                        </nav>
                    </div>

                </div>
                <div class="col-xl-2 col-md-4 col-sm-12 text-center mb-0  my-xl-5 ">
                    <div class="">
                        <h1 style="font-family:  sans-serif;font-size: 40px; text-shadow: 3px 3px 3px #ababab">Easy JOb</h1>
                    </div>
                </div>
                <div class="col-xl-5 col-md-8 col-sm-12 mb-0  my-xl-5 text-center text-md-right position-relative">
                    <div class="header-right">
                        <ul>  @guest('web')
                                <li><a href="{{route('admin.log')}}">Login</a> </li>
                                <li><a href="{{route('admin.accoun')}}">Registration</a> </li>
                            @endguest

                            @auth('web')
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @elseauth('owner')

                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        <span class="caret"></span>
                                        {{ Auth('owner')->user()->name }} <span class="caret"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endauth
                            <li><a href="#"><i class="fas fa-search"></i></a>
                                <div class="search-box">
                                    <form action="#">
                                        <input type="text" placeholder="Search">
                                        <button><i class="fas fa-search"></i></button>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--job circular-section start-->
    <!--circular-section End-->

    <!--job circular-section start-->

    <section class="subscribe-section  " style="margin:30px; border: royalblue; border-radius: 3px;">
        <div class="container">
            @if(Session::has('message'))
                <div class=" alert alert-{{Session::get('type')}}">
                    {{Session::get('message')}}
                </div>
            @endif
            <div class="subscribe  py-3">

                <div class="rwo ">
                    <form action="{{route('resume.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="usr">Resume:</label>
                            <input type="file" class="form-control" id="usr" name="photo">
                            <input type="hidden" value="{{$circulars->id}}" name="circular_id">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

            </div>

            </div>
        </div>
        </div>
    </section>
@endsection
