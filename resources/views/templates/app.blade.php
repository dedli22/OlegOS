<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="the page description"/>
    <link rel='canonical' href='http://localhost/hosts/project/portal_v2/' />    
    <link rel="stylesheet" href="{{ asset('css/mainStyle.css')}}">   
    <title>Page Title</title>
</head>
<body>
<div class="container">
    <header>
      <div class="pageInfoBar">
        <div class="headerLogo">
            <a href="#">
                <img src="{{ asset('css/images/')}}/header/logo_small1_trans.png" alt="Logo" height="40px" width="171px"/>
            </a>
        </div>
        <div class="searchBar">
          <form class="search-form">
					  <input type="search" placeholder="Search...">
					  <input type="submit" value="Submit">
				  </form>   
        </div>
        <nav class="headerNavigation">
            <ul>
                @foreach ($MainNavs as $MainNav)  
                    @if (!$MainNav->visible === true)                    
                        
                    @else                           
                <li><a href="{{ $MainNav->link }}">{{ $MainNav->name }} </a></li>
                    @endif
                @endforeach                
            </ul>
            {{-- <ul>
                <li><a href="{{ route('posts.admin') }}">admin</a></li>                
                <li><a href="">Link</a></li>
                <li><a href="">Link</a></li>
                <li><a href="">Link</a></li>
                <li><a href="{{ route('posts.index') }}">News</a></li>                
            </ul> --}}
        </nav>
      </div>
      <div class="languageBar">
        <div class="languageFlags">
            <a href=""><img width="34px" height="24px" style="padding-left:10px; margin: 5px;" 
                src="{{ asset('css/images/')}}/header/latvia.png" alt="Latvian"/></a>
            <a href=""><img width="34px" height="24px" style="margin: 5px;" src="{{ asset('css/images/')}}/header/english.png" alt="English"/></a>
            <a href=""><img width="34px" height="24px" style="margin: 5px;" src="{{ asset('css/images/')}}/header/russia.png" alt="Russian"/></a>
        </div>
      </div>        
    </header>
    <section class="userPictureCircle">
        <div class="userPictureBorder">
            <img class="userPicture" src="{{ asset('css/images/')}}/userPic.jpg" alt="userPicture" width="165" height="165" />
        </div>
    </section>
    <section class="userNavigation">
        <ul>
            <li><a href="#">Timeline</a></li>
            <li><a href="#">Messages</a></li>
            <li><a href="#">Album</a></li>
            <li><a href="#">Friends</a></li>
            <li><a href="#">About</a></li>
        </ul>
    </section>
    @yield('userInfoBar')
    @yield('admin')

    <section class="centerContent">        
        @yield('content')        
    </section>
<footer>
    <div class='text-left' style='float: left; margin-left: 40px; margin-top: 15px;'><b>Portal.lv</b> - Visas Tiesibas aizsargātas</div>
            <div class='text-right'style='float: right; margin-right: 40px; margin-top: 15px;'>
            © <?php
    $copyYear = 2022; // Mājaslapas sākuma laiks
    $curYear = date('Y'); // Gads  ,kurš ir
    echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
    ?> Copyright.
    </div>    
</footer>
</div>
</body>
</html>
