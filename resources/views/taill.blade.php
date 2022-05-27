
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="the page description"/>
    <link rel='canonical' href='http://localhost/hosts/project/portal_v2/' />    
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    

    
    <title>Page Title</title>
</head>
<body class="font-sans antialiased text-gray-900 leading-normal tracking-wider bg-cover">
<div class="max-w-4xl flex items-center h-auto lg:h-screen flex-wrap mx-auto my-32 lg:my-0">
    <header>
      <div class="pageInfoBar">
        <div class="headerLogo">
            <a href="#">
                <img src="css/themes/puffy/images/header/logo_small1_trans.png" alt="Logo" height="40px" width="171px"/>
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
                <li><a href="#">Links</a></li>
                <li><a href="#">Links</a></li>
                <li><a href="/">Home</a></li>
                <li><a href="/news">News</a></li>                
            </ul>
        </nav>
      </div>
      <div class="languageBar">
        <div class="languageFlags">
            <a href=""><img width="34px" height="24px" style="padding-left:10px; margin: 5px;" src="css/themes/puffy/images/header/latvia.png" alt="Latvian"/></a>
            <a href=""><img width="34px" height="24px" style="margin: 5px;" src="css/themes/puffy/images/header/english.png" alt="English"/></a>
            <a href=""><img width="34px" height="24px" style="margin: 5px;" src="css/themes/puffy/images/header/russia.png" alt="Russian"/></a>
        </div>
      </div>        
    </header>
    <section class="userPictureCircle">
        <div class="userPictureBorder">
            <img class="userPicture" src="css/themes/puffy/images/userPic.jpg" alt="userPicture" width="165" height="165" />
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
    <aside class="userInfoBar">
        <div class="userSayHello">
            Hello, 
                <a href=''><font color='red'>
                    Aigars Šteinbergs
                </font></a>
        <br/>
            <div class="userStatus">
                Your rank:
                <a href=""><font color='red'>
                        ADMIN
                    </font></a>
            </div>
            
        </div>
        <div class="userManageIfno">
            <ul>
                <li><a class="current" href="#">» Edit profile</a></li>
                <li><a href="#">» Edit about me</a></li>
                <li><a href="#">» Edit album</a></li>
                <li><a href="#">» Edit </a></li>
                <li><a href="#">» Edit profile</a></li>
            </ul>
        </div>
    </aside>
    <footer>
        <div class='text-left' style='float: left; margin-left: 40px; margin-top: 15px;'><b>Portal.lv</b> - Visas Tiesibas aizsargātas</div>
                <div class='text-right'style='float: right; margin-right: 40px; margin-top: 15px;'>
                © <?php
        $copyYear = 2022; // Mājaslapas sākuma laiks
        $curYear = date('Y'); // Gads ,kurš ir
        echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
        ?> Copyright.
        </div>    
    </footer>
    
    
    
    
    </div>
    </body>
    </html>
