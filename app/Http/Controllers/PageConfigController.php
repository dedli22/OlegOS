<?php

namespace App\Http\Controllers;

use App\Http\Requests\PageConfigUpdateRequest;
use App\Models\PageConfig;
use App\Models\Post;
use Illuminate\Contracts\View\View;


class PageConfigController extends Controller
{
    public function index()
    {
    }

    public function show(PageConfig $PageConfig)
    {     
        $PageConfig = PageConfig::find(1);
        return view('admin.PageConfig.show', [
            'PageConfig' => $PageConfig,            
        ]);
    }

    public function update(PageConfigUpdateRequest $request, PageConfig $PageConfig)
    {
        $validatedData = $request->validated();
        
        // $title = $validatedData['page_title'];
        // $page_offline = $validatedData['page_offline'];
        // $page_offline_msg = $validatedData['page_offline_msg'];
        // $version = $validatedData['page_version'];
        // $PPP = $validatedData['posts_per_page'];

        // $PageConfig->page_title->update('page_title', $title);
        // $PageConfig->page_offline->update('page_offline', $page_offline);
        // $PageConfig->page_offline_msg->update('page_offline_msg', $page_offline_msg);
        // $PageConfig->page_version->update('page_version', $version);
        // $PageConfig->page_posts_per_page->update('posts_per_page', $PPP);
        $PageConfig = PageConfig::find(1);
        $PageConfig->page_title = $validatedData['page_title'];
        $PageConfig->page_offline = $validatedData['page_offline'];
        $PageConfig->page_offline_msg = $validatedData['page_offline_msg'];
        $PageConfig->page_version = $validatedData['page_version'];
        $PageConfig->posts_per_page = $validatedData['posts_per_page'];
        $PageConfig->save();      
        

        return redirect()->route('PageConfig.show', app()->getLocale());
    }

    public function offline(PageConfig $PageConfig)
    {

        return view('admin.PageConfig.page_offline', ['PageConfig' => $PageConfig]);
    }

}
