@extends('templates.app')

@section('admin')
<div id="acpContainer">
    <br><br>
    <div class="title">
        <button class="button" onclick="window.location.href='{{ route('posts.create') }}';">         
            Pievienot jaunu Postu
        </button> 
        <div style="float: right;margin-right:30px;font-weight: bold;">
        Kopā pievienoti {{ $posts->count()}} posti.
        </div>        
        <br><br>
    </div>   
    <table id="Info" >
        <tr>
            <th>ID</th>
            <th>Virsraksts</th>
            <th>Autors</th>
            <th>Komentāri</th>
            <th>Pievienots</th>
            <th>Labots</th>            
            <th>Darbība</th>
        </tr>        
        @foreach ($posts as $post)
            <tr>            
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->authorName }}</td>
                <td>{{ $post->comments->count()}}</td>
                <td>{{ $post->created_at }}</td>
                <td>{{ $post->updated_at }}</td>
                 <td width="100px">                          
                    <a href="{{ route('posts.show', ['post' => $post->id]) }}">
                        <img height="20px" height="20px" alt="show" src="{{ asset('css/images') }}/icons/application_view_list.png" >
                    </a>&nbsp;&nbsp;
                    <a href="{{ route('posts.edit', ['post' => $post->id]) }}">                    
                        <img height="20px" height="20px" alt="edit" src="{{ asset('css/images') }}/icons/application_edit.png" >
                    </a>&nbsp;&nbsp;
                    <a onclick="return confirm('Are you sure?')" href="{{ route('posts.destroy', ['post' => $post->id]) }}">
                        <img height="20px" height="20px" alt="delete" src="{{ asset('css/images') }}/icons/application_delete.png" >
                    </a>
                    
                </td>
            @endforeach                                        
        </tr>
    </table>
</div>
@endsection
        
{{-- <script>
    $(document).ready(function() {
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
    });
  
    function deleteSales(url) {
      if(confirm('Are you sure?')) {
        $.ajax({
          type: "POST",
          url: url,
          success: function(result) {
            location.reload();
          }
        });
      }
    }
  </script>
  
  <button onclick="deleteSales('{{ route('sales.delete', ['id' => $value->sales_id]) }}')"></button>
         --}}
        
        
        
        
        
        
        {{-- <div class="newsTitle">            
            {{ $post->title }}
        </div>                 
        <img class="newsImage" width="328px" height="248px" alt="News Image" src=""/>
        <div class="newsArticle">



            {{ $post->body }}
            <?php // echo substr_replace($row['text'], "...", 1000); ?>             
        </div>
                      
        <button class="read_more" onclick="window.location.href='{{ route('posts.show', ['post' => $post->id]) }}';">         
        Lasīt vairāk...
        </button>  
    </div> 
    @endforeach --}}



