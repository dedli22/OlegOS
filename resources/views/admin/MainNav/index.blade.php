@extends('templates.app')
@section('admin')
<div id="acpContainer">
    <br><br>
    <div class="pageTitle">Admin panel » Main Navigation</div>
    <hr class="pageTitleUnderline">
    <br>
    @if ($MainNavs->Where('visible', 1 )->count() > 5)
        <b>Atļautie redzamie linki 6!</b>
    @else
        <button class="button" onclick="window.location.href='{{ route('MainNav.create') }}';">         
            Pievienot jaunu Linku
        </button>  
    @endif       
    <div style="float: right;margin-right:30px;font-weight: bold;">
    Kopā pievienoti {{ $MainNavs->count()}} Linki.<br>    
        {{ $MainNavs->Where('visible', 1 )->count() }} linki aktīvi no 6
    </div> 
    <br><br>
    <table id="Info" >
        <tr>
            <th>ID</th>
            <th>Nosaukums</th>
            <th>Route</th>
            <th>Secība</th>
            <th>Redzamība</th>                        
            <th>Darbība</th>
        </tr>        
        @foreach ($MainNavs as $MainNav)
            <tr>                
                <td>{{ $MainNav->id }}</td>
                <td>{{ $MainNav->name }}</td>
                <td><a href="{{ $MainNav->link }}"><i>{{ $MainNav->link }}</i></a></td>
                <td>{{ $MainNav->order }}</td>
                <td>{{ $MainNav->visible }}</td>             
                <td width="100px">                          
                    <a href="">
                        <img height="20px" height="20px" alt="show" src="{{ asset('css/images') }}/icons/application_view_list.png" >                        
                    </a>&nbsp;&nbsp;
                    <a href="{{ route('MainNav.edit', [ 'MainNav' => $MainNav->id ]) }}">                    
                        <img height="20px" height="20px" alt="edit" src="{{ asset('css/images') }}/icons/application_edit.png" >
                    </a>&nbsp;&nbsp;
                    <a onclick="return confirm('Are you sure?')" href="{{ route('MainNav.destroy', ['MainNav' => $MainNav->id]) }}" class="delete-confirm">                        
                        <img height="20px" height="20px" alt="delete" src="{{ asset('css/images') }}/icons/application_delete.png" >
                    </a>
                    
                </td>
                                                  
            </tr>
        @endforeach  
    </table>


</div>   

@endsection





       


