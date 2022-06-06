@extends('templates.app')

@section('admin')
<div class="w-full m-5">
    <br><br>
    <div class="pageTitle text-sky-500 text-xl pl-3 font-bold text-left capitalize">Admin panel » Main Navigation » Edit</div>
    <hr style="width: 75%; float: left; margin: 5px; height: 2px;" color="#019ad2">
        <br> 
        @if ($errors->any())
            <div class="bg-rose-300 m-5 p-2 w-2/4 rounded-md text-Black-opticaly-08 pl-10">        
                @foreach ($errors->all() as $error)
                    {{ $error }} <br>
                @endforeach            
            </div>    
        @endif
        <form action="{{ $MainNav->id }}" method="POST">
            @csrf
                <span>
                    <div class="float-left pt-5 w-1/4 text-gray-600">
                        <font color="red">*</font><b>Linka nosaukums :</b>
                    </div>
                    <div>
                        <input class="w-2/3 mt-2 border border-solid border-gray-400 rounded-md focus:border-sky-200 drop-shadow box-border outline-none" type="text" name="name" value="{{ $MainNav->name }}" size="" /><br /><br>
                    </div>            
                </span>
                <span>
                    <div class="float-left pt-5 w-1/4 text-gray-600">
                        <font color="red">*</font><b>Adresse :</b>
                    </div>
                    <div>
                        <input class="w-2/3 mt-2 border border-solid border-gray-400 rounded-md focus:border-sky-200 drop-shadow box-border outline-none" type="text" name="link" value="{{ $MainNav->link }}" size="" /><br /><br>
                    </div>            
                </span>
                <span>
                    <div class="float-left pt-5 w-1/4 text-gray-600">
                        <font color="red">*</font><b>Links redzams :</b>
                    </div>
                    <div class="mt-5">
                        <input type="radio" name="visible" {{ ($MainNav->visible === 1) ? 'checked' : '' }} value="1"> Jā!
                        <input type="radio" name="visible" {{ ($MainNav->visible === 0) ? 'checked' : '' }} value="0"> Nē!
                        <br /><br>
                    </div>            
                </span>
                <span>
                    <div class="float-left pt-5 w-1/4 text-gray-600">
                        <font color="red">*</font><b>Linka secība :</b>
                    </div>
                    <div>
                        <input class="w-2/3 mt-2 border border-solid border-gray-400 rounded-md focus:border-sky-200 drop-shadow box-border outline-none" type="text" name="order" value="{{ $MainNav->order }}" size="" /><br /><br>
                    </div>            
                </span>
            <input class="float-left bg-sky-500 p-1 w-auto text-white rounded-lg hover:bg-sky-600 m-5 pl-5 pr-5" type="submit" value="Labot menu" />            
        </form>
</div> 
@endsection





       


