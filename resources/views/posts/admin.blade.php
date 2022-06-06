@extends('templates.app')

@section('admin')
<div>
  <br><br>
  <div class="pageTitle text-sky-500 text-xl pl-3 font-bold text-left capitalize">Admin panel » Posts</div>
  <hr style="width: 75%; float: left; margin: 5px; height: 2px;" color="#019ad2">
  <br>
      <button class="bg-sky-500 pt-1 pb-1 pl-5 pr-5 ml-5 rounded-md text-white" onclick="window.location.href='{{ route('posts.create') }}';">         
            Pievienot jaunu Postu
        </button> 
        <div class="float-right mr-5 font-bold text-gray-600">
        Kopā pievienoti {{ $posts->count()}} posti.
        </div>        
        <br><br> 
    <table class="border-collapse w-[98%] text-center ml-3 mb-10" >
        <tr class="bg-sky-400 text-white">
            <th class="border border-solid border-gray-200 p-1">ID</th>
            <th class="border border-solid border-gray-200 p-1">Virsraksts</th>
            <th class="border border-solid border-gray-200 p-1">Autors</th>
            <th class="border border-solid border-gray-200 p-1">Komentāri</th>
            <th class="border border-solid border-gray-200 p-1">Pievienots</th>
            <th class="border border-solid border-gray-200 p-1">Labots</th>            
            <th class="border border-solid border-gray-200 p-1">Darbība</th>
        </tr>        
        @foreach ($posts as $post)
        <tr class="bg-white even:bg-gray-100 hover:bg-gray-200 text-gray-600">             
                <th class="border border-solid border-gray-200 p-1">{{ $post->id }}</>
                <th class="border border-solid border-gray-200 p-1">{{ $post->title }}</>
                <th class="border border-solid border-gray-200 p-1">{{ $post->authorName }}</>
                <th class="border border-solid border-gray-200 p-1">{{ $post->comments->count()}}</>
                <th class="border border-solid border-gray-200 p-1">{{ $post->created_at }}</>
                <th class="border border-solid border-gray-200 p-1">{{ $post->updated_at }}</>
                <th class="border border-solid border-gray-200 p-1 w-36">                          
                    <a href="{{ route('posts.show', ['post' => $post->id]) }}">
                        <img class="float-left w-6 h-6 ml-4" height="20px" alt="show" src="{{ asset('css/images') }}/icons/application_view_list.png" >
                    </a>&nbsp;&nbsp;
                    <a href="{{ route('posts.edit', ['post' => $post->id]) }}">                    
                        <img class="float-left w-6 h-6 ml-3" height="20px" alt="edit" src="{{ asset('css/images') }}/icons/application_edit.png" >
                    </a>&nbsp;&nbsp;
                    <a onclick="return confirm('Are you sure?')" href="{{ route('posts.destroy', ['post' => $post->id]) }}">
                        <img class="float-left w-6 h-6 ml-3" height="20px" alt="delete" src="{{ asset('css/images') }}/icons/application_delete.png" >
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



