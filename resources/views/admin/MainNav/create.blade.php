@extends('templates.app')

@section('admin')
<div id="acpContainer">
    <br><br>
    <div class="pageTitle">Admin panel » Main Navigation » Create</div>
    <hr class="pageTitleUnderline">
    <br>
    @if ($errors->any())
        <div class="error">        
                @foreach ($errors->all() as $error)
                    {{ $error }} <br>
                @endforeach            
        </div>
    @endif
        <form action="{{ route('MainNav.create') }}" method="POST">
            @csrf
            <div><b>Linka nosaukums </b>
                <font color="red">*</font>:<br />
            </div>
                <input type="text" name="name" value="{{ old('name') }}" size="" /><br />
            <div><b>Adresse: </b>
                <font color="red">*</font>:<br />
            </div>
                <input type="text" name="link" value="{{ old('link') }}" size="" /><br />
            <div><b>Links redzams:</b>
                <font color="red">*</font><br />
            </div>
            <br>
            <input type="radio" name="visible"  value="1"> Jā!
            <input type="radio" name="visible"  value="0"> Nē!
            <br><br>
            <div><b>Linka secība </b>
                <font color="red">*</font>:<br />
            </div>
            <input type="text" name="order" value="{{ old('order') }}" size="" /><br />
            <br />

            <input type="submit" value="Pievienot menu" />            
        </form>
</div>   
@endsection
