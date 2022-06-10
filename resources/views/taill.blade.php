
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="the page description"/>
    <link rel='canonical' href='http://localhost/' />    
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    

    
    <title>Page Title</title>
</head>
<body class="max-w-7xl h-full mx-auto pt-2.5 bg-gray-100" >
    <div class="container border border-solid border-cyan-600 " >
        <header class="bg-Forest=Fog h-96 bg-no-repeat bg-[length:100%_100%]">
          <div class="float-left h-14 w-full bg-Black-opticaly-08 p-1.5">
        <div class="float-left">
            <a href="#">
                <img src="css/themes/puffy/images/header/logo_small1_trans.png" alt="Logo" height="40px" width="171px"/>
            </a>
        </div>
        <div class="float-left ">
          <form class="float-left ">
					  <input class="ml-52 float-left mt-1 px-3 py-2 bg-black border shadow-sm border-slate-500 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-80 rounded-md sm:text-sm focus:ring-1 opacity-60 text-white " type="search" placeholder="Search...">					  
				  </form>   
        </div>
        <nav class="float-right text-center h-96 overflow-hidden w-2/5">
            <ul class="h-96 leading-6 p-2 float-right capitalize">                
                <li class="h-96 leading-6 inline float-right capitalize">
                    <a class="block float-right w-20 text-gray-200 " href="#">Links 1</a>
                </li>
                <li class="h-96 leading-6 inline float-right capitalize">
                    <a class="block float-right w-20 text-gray-200 " href="#">Links 2</a>
                </li>
                <li class="h-96 leading-6 inline float-right capitalize">
                    <a class="block float-right w-20 text-gray-200 " href="#">Links 3 </a>
                </li>
                <li class="h-96 leading-6 inline float-right capitalize">
                    <a class="block float-right w-20 text-gray-200 " href="#">Links 4</a>
                </li>
                <li class="h-96 leading-6 inline float-right capitalize">
                    <a class="block float-right w-20 text-gray-200 " href="#">Links 5</a>
                </li>
                <li class="h-96 leading-6 inline float-right capitalize">
                    <a class="block float-right w-20 text-gray-200 " href="#">Links 6</a>
                </li>                             
            </ul>
        </nav>
        </div>
      <div class="bg-Black-opticaly-08 w-40 float-right rounded-bl-2xl ">
        <div class="float-right opacity-70">                        
            <a class="float-right" href=""><img width="34px" height="24px" style="margin: 5px;" src="css/themes/puffy/images/header/russia.png" alt="Russian"/></a>
            <a class="float-right" href=""><img width="34px" height="24px" style="margin: 5px;" src="css/themes/puffy/images/header/english.png" alt="English"/></a>
            <a class="float-right" href=""><img width="34px" height="24px" style="width: 34px;height: 34px padding-left:10px; margin: 5px;" src="css/themes/puffy/images/header/latvia.png" alt="Latvian"/></a>
        </div>
      </div>        
    </header>
    <section class="mt-[-150px] ml-10">
        <div class="w-48 h-48 bg-slate-50 float-left rounded-full">
            <img class="rounded-full m-2 w-44 h-44" src="css/themes/puffy/images/userPic.jpg" alt="userPicture" width="165" height="165" />
        </div>
    </section>
    <section class="float-left text-center h-10 mt-20 overflow-hidden bg-Black-opticaly-08 w-[81.8%]">
        <ul class="h-10 leading-6 p-2 capitalize">
            <li>
                <a class="block float-left w-20 text-gray-200 font-bold" href="#">Timeline</a>
            </li>
            <li>
                <a class="block float-left w-20 text-gray-200 font-bold" href="#">Messages</a>
            </li>
            <li>
                <a class="block float-left w-20 text-gray-200 font-bold" href="#">Album</a></li>
            <li>
                <a class="block float-left w-20 text-gray-200 font-bold" href="#">Friends</a></li>
            <li>
                <a class="block float-left w-20 text-gray-200 font-bold" href="#">About</a></li>
        </ul>
    </section>
    <aside class="w-1/5 mt-52 m-5 border-solid border-r border-sky-500">
        <div class="text-sky-500 text-xl pb-5 capitalize">
            Hello, 
                <a class="text-sky-500 font-bold" href=''>
                    Aigars Šteinbergs
                </a>
        <br/>
            <div class="text-gray-400 text-xs">
                Your rank:
                <a class="text-red-500" href="">
                        Main ADMIN
                </a>
            </div>
            
        </div>
        <div>
            <ul class="capitalize">
                <li class="h-8 block pl-5">
                    <a class="block text-sky-600 hover:text-sky-900 hover:pl-3" href="#">» Edit profile</a>
                </li>
                <li class="h-8 block pl-5">
                    <a class="block text-sky-600 hover:text-sky-900 hover:pl-3" href="#">» Edit about me</a>
                </li>
                <li class="h-8 block pl-5">
                    <a class="block text-sky-600 hover:text-sky-900 hover:pl-3" href="#">» Edit album</a>
                </li>
                <li class="h-8 block pl-5">
                    <a class="block text-sky-600 hover:text-sky-900 hover:pl-3" href="#">» Edit </a>
                </li>
                <li class="h-8 block pl-5">
                    <a class="block text-sky-600 hover:text-sky-900 hover:pl-3" href="#">» Edit profile</a>
                </li>
            </ul>
        </div>
    </aside>
        {{-- <div id="newsContainer">            
            <div class="newsContent">
                <div class="newsTitle">            
                   title
                </div>                 
                <img class="newsImage" width="328px" height="248px" alt="News Image" src=""/>
                <div class="newsArticle">
                    body body body body body body body body body body body body body 
                    body body body body body body body body body body body body body 
                    body body body body body body body body body body body body body 
                    body body body body body body body body body body body body body 
                    body body body body body body body body body body body body body body body body body body body body body body body body body body 
                    body body body body body body body body body body body body body 
                    body body body body body body body body body body body body body 
                    body body body body body body body body body body body body body 
                    body body body body body body body body body body body body body 
                    body body body body body body body body body body body body body 
                    body body body body body body body body body body body body body 
                    body body body body body body body body body body body body body 
                    body body body body body body body body body body body body body 
                    body body body body body body body body body body body body body 
                    <?php // echo substr_replace($row['text'], "...", 1000); ?>             
                </div>
                            
                <button class="read_more" onclick="window.location.href='';">         
                Lasīt vairāk...
                </button>
                <div style="float: right;">
                    Comments: 
                </div>  
            </div> 
        </div> --}}
        <footer class="w-full bg-sky-500 h-44 float-left ">
            <div class='float-left ml-10 mt-5 text-white '>
                <b>Portal.lv</b> - Visas Tiesibas aizsargātas
            </div>       
            <div class='float-right mr-10 mt-5 text-white'>
                © 
                <?php
                    $copyYear = 2022; // Mājaslapas sākuma laiks
                    $curYear = date('Y'); // Gads ,kurš ir
                    echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
                ?> 
                Copyright.
            </div>    
        </footer>   
    </div>
    </body>
    </html>
