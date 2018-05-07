<?php

namespace App\Http\Controllers;

use App\Template;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
class TemplateController extends Controller
{
    /**
     * Display a the template index.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $templates = Template::all();
        return view('templates.index')->with('templates', $templates);
    }

    public function showTemplate(Template $template)
    {
        $templates = $template;
        
        return view('templates.show')->with('template', $templates);
    }

    public function showTemplateSubPages(Template $template)
    {
        
        
        return view('templates.index');
    }

    public function showTemplateOne(){
        return view('templates.creative.index');
    }
    
    public function showTemplateTwo(){
        return view('templates.agency.index');
    }
    
    public function showTemplateThree(){
        return view('templates.onePageWonder.index');
    }
        
    public function showTemplateFour(){
        return view('templates.cleanBlog.index');
    }
        
    public function showTemplateFive(){
        return view('templates.businessCasual.index');
    }
        
    public function showTemplateSix(){
        return view('templates.modernBusiness.index');
    }
}
