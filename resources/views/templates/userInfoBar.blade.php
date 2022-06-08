<aside class="float-left w-3/12 border-r border-solid border-sky-500 m-5">
    <div class="text-sky-500 text-xl pb-5 capitalize">
        Hello, 
            <a class="text-sky-500 font-bold" href=''>
                {{ Auth::user()->name }}
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