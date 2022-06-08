@extends('templates.app')

@section('admin')
<div>
  <br><br>
  <div class="pageTitle text-sky-500 text-xl pl-3 font-bold text-left capitalize">@lang('admin.Title') » @lang('admin.NP Name')</div>
  <hr style="width: 75%; float: left; margin: 5px; height: 2px;" color="#019ad2">
  <br>
      <button class="bg-sky-500 pt-1 pb-1 pl-5 pr-5 ml-5 rounded-md text-white" onclick="window.location.href='{{ route('posts.create', app()->getLocale()) }}';">         
        	@lang('admin.NP Create New')
        </button> 
        <div class="float-right mr-5 font-bold text-gray-600">
            @lang('admin.NP Count') {{ $posts->count()}}
        </div>        
        <br><br> 
    <table class="border-collapse w-[98%] text-center ml-3 mb-10" >
        <tr class="bg-sky-400 text-white">
            <th class="border border-solid border-gray-200 p-1">@lang('admin.NP ID')</th>
            <th class="border border-solid border-gray-200 p-1">@lang('admin.NP Title')</th>
            <th class="border border-solid border-gray-200 p-1">@lang('admin.NP Author')</th>
            <th class="border border-solid border-gray-200 p-1">@lang('admin.NP Comments')</th>
            <th class="border border-solid border-gray-200 p-1">@lang('admin.NP Added')</th>
            <th class="border border-solid border-gray-200 p-1">@lang('admin.NP Edited')</th>            
            <th class="border border-solid border-gray-200 p-1">@lang('admin.NP Action')</th>
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
                    <a href="{{ route('posts.show', ['post' => $post->id, 'locale' => app()->getLocale()]) }}">
                        <img class="float-left w-6 h-6 ml-4" height="20px" alt="show" src="{{ asset('css/images') }}/icons/application_view_list.png" >
                    </a>&nbsp;&nbsp;
                    <a href="{{ route('posts.edit', ['post' => $post->id, 'locale' => app()->getLocale()]) }}">                    
                        <img class="float-left w-6 h-6 ml-3" height="20px" alt="edit" src="{{ asset('css/images') }}/icons/application_edit.png" >
                    </a>&nbsp;&nbsp;
                    <a onclick="return confirm('Are you sure?')" href="{{ route('posts.destroy', ['post' => $post->id, 'locale' => app()->getLocale()]) }}">
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



