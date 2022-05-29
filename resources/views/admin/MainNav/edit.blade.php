@extends('templates.app')

@section('admin')
<div id="acpContainer">
    <br><br>
    <div class="pageTitle">Admin panel » Main Navigation » Edit</div>
    <hr class="pageTitleUnderline">
    <br>
    @if ($errors->any())
        <div class="error">        
                @foreach ($errors->all() as $error)
                    {{ $error }} <br>
                @endforeach            
        </div>
    @endif
        <form action="{{ $MainNav->id }}" method="POST">
            @csrf
            <div><b>Linka nosaukums </b>
                <font color="red">*</font>:<br />
            </div>
                <input type="text" name="name" value="{{ $MainNav->name }}" size="" /><br />
            <div><b>Adresse: </b>
                <font color="red">*</font>:<br />
            </div>
                <input type="text" name="link" value="{{ $MainNav->link }}" size="" /><br />
            <div><b>Links redzams:</b>
                <font color="red">*</font><br />
            </div>
            <br>
            <input type="radio" name="visible" {{ ($MainNav->visible === 1) ? 'checked' : '' }} value="1"> Jā!
            <input type="radio" name="visible" {{ ($MainNav->visible === 0) ? 'checked' : '' }} value="0"> Nē!
            <br><br>
            <div><b>Linka secība </b>
                <font color="red">*</font>:<br />
            </div>
            <input type="text" name="order" value="{{ $MainNav->order }}" size="" /><br />
            <br />

            <input type="submit" value="Labot menu" />            
        </form>

</div>   

@endsection





       


