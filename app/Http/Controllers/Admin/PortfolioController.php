<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Helper;
use App\Models\Service;
use App\Models\Language;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use App\Models\PortfolioImage;
use App\Models\PortfolioImage2;
use App\Http\Controllers\Controller;

class PortfolioController extends Controller
{
    public $lang;
    public function __construct()
    {
        $this->lang = Language::where('is_default', 1)->first();
    }
	
    public function index(Request $request){
        $lang = Language::where('code', $request->language)->first()->id;

        $portfolios = Portfolio::where('language_id', $lang)->orderBy('id', 'DESC')->get();

        return view('admin.portfolio.index', compact('portfolios'));
    }

    public function portfolio_get_category($id){

        $services = Service::where('status', 1)->where('language_id', $id)->get();
        $output = '';

        foreach($services as $service){
            $output .= '<option value="'.$service->id.'">'.$service->title.'</option>';
        }
        return $output;
    }

    // Add Portfolio 
    public function add(){
        return view('admin.portfolio.add');
    }


    // Store Portfolio 
    public function store(Request $request){

        $slug = Helper::make_slug($request->title);
        $Portfolios = Portfolio::select('slug')->get();


        $request->validate([
            'image[]' => 'mimes:jpeg,jpg,png',
			'image2[]' => 'mimes:jpeg,jpg,png',
            'featured_image' => 'required|mimes:jpeg,jpg,png',
			'featured_logo' => 'required|mimes:jpeg,jpg,png',
            'title' => [
                'required',
                'unique:portfolios,title',
                'max:255',
                function($attribute, $value, $fail) use ($slug, $Portfolios){
                    foreach($Portfolios as $port){
                        if($port->slug == $slug){
                            return $fail('Title already taken!');
                        }
                    }
                }
            ],
			
            'client_name' => 'required|max:250',
            'status' => 'required|max:250',
            'service_id' => 'required',
            'content' => 'required',
            'serial_number' => 'required',
            'language_id' => 'required',
        ]);


        $portfolio = new Portfolio();

        if($request->hasFile('featured_image')){

            $file = $request->file('featured_image');
            $extension = $file->getClientOriginalExtension();
            $featured_image = time().rand().'.'.$extension;
            $file->move('assets/front/img/portfolio/', $featured_image);

            $portfolio->featured_image = $featured_image;
        }
		
		
        if($request->hasFile('featured_logo')){

            $file = $request->file('featured_logo');
            $extension = $file->getClientOriginalExtension();
            $featured_logo = time().rand().'.'.$extension;
            $file->move('assets/front/img/portfolio/', $featured_logo);

            $portfolio->featured_logo = $featured_logo;
        }
		
		if($request->hasFile('video_bg_image')){

            $file = $request->file('video_bg_image');
            $extension = $file->getClientOriginalExtension();
            $video_bg_image = time().rand().'.'.$extension;
            $file->move('assets/front/img/portfolio/', $video_bg_image);

            $portfolio->video_bg_image = $video_bg_image;
        }
		

		$portfolio->portfolio_map = $request->portfolio_map;
		$portfolio->video_link = $request->video_link;
        $portfolio->title = $request->title;
        $portfolio->language_id = $request->language_id;
        $portfolio->status = $request->status;
        $portfolio->content = $request->content;
		$portfolio->content2 = $request->content2;
		$portfolio->content3 = $request->content3;
		$portfolio->content4 = $request->content4;
		$portfolio->local = $request->local;
	
		$portfolio->locacao = $request->locacao;
		$portfolio->fundacao = $request->fundacao;
		$portfolio->estrutura = $request->estrutura;
		$portfolio->alvenaria = $request->alvenaria;
		$portfolio->instalacoes = $request->instalacoes;
		$portfolio->rev_interno = $request->rev_interno;
		$portfolio->rev_externo = $request->rev_externo;
		$portfolio->ceramica = $request->ceramica;
		$portfolio->esquadrias = $request->esquadrias;
		$portfolio->pintura = $request->pintura;
		$portfolio->acabamento = $request->acabamento;
		
        $portfolio->slug = $slug;
        $portfolio->service_id = $request->service_id;
        $portfolio->client_name = $request->client_name;
        $portfolio->serial_number = $request->serial_number;
        $portfolio->meta_keywords = $request->meta_keywords;
        $portfolio->meta_description = $request->meta_description;
        $portfolio->save();
        $portfolio_id = $portfolio->id;
		
		

        if($request->hasFile('image')){
            $files = $request->file('image');
            $count = 1;
            foreach ($files as $file){
                    $extension = $file->getClientOriginalExtension();
                    $image = 'portfolio_'.$count.time().rand().'.'.$extension;
                    $file->move('assets/front/img/portfolio/', $image);
                    $portfolio_slider = new PortfolioImage();
                    $portfolio_slider->image = $image;
					$portfolio_slider->legenda_image1 = $legenda_image1;
                    $portfolio_slider->portfolio_id = $portfolio_id;
                    $portfolio_slider->save();
                    $count++;
            }
        }
		
		if($request->hasFile('image2')){
            $files = $request->file('image2');
            $count = 1;
            foreach ($files as $file){
                    $extension = $file->getClientOriginalExtension();
                    $image2 = 'portfolio_'.$count.time().rand().'.'.$extension;
                    $file->move('assets/front/img/portfolio/', $image2);
                    $portfolio_slider = new PortfolioImage2();
                    $portfolio_slider->image2 = $image2;
                    $portfolio_slider->portfolio_id = $portfolio_id;
                    $portfolio_slider->save();
                    $count++;
            }
        }

        $notification = array(
            'messege' => 'Portfolio Added successfully!',
            'alert' => 'success'
        );
        return redirect()->back()->with('notification', $notification);

    }

    // Portfolio  Delete
    public function delete($id){

        $sliders = PortfolioImage::where('portfolio_id', $id)->get();
		
        foreach ($sliders as $slider){
            unlink('assets/front/img/portfolio/'. $slider->image);
            $slider->delete();
        }

        $portfolio = Portfolio::find($id);
        @unlink('assets/front/img/portfolio/'. $portfolio->featured_image);
        $portfolio->delete();


        $notification = array(
            'messege' => 'Portfolio  Deleted successfully!',
            'alert' => 'success'
        );
        return redirect()->back()->with('notification', $notification);
    }

    // Portfolio  Edit
    public function edit($id){
       
        $portfolio = Portfolio::findOrFail($id);
        $blog_lan = $portfolio->language_id;
       
        $services = Service::where('status', 1)->where('language_id', $blog_lan)->get();
        
        $sliders = PortfolioImage::where('portfolio_id', $id)->get();
		
		$sliders2 = PortfolioImage::where('portfolio_id', $id)->get();
		
        
        return view('admin.portfolio.edit', compact('portfolio', 'services', 'sliders', 'sliders2'));

    }

    // Portfolio Update
    public function update(Request $request, $id){


        $sliders = $request->sliders;
        if($sliders != null){
            $files = $request->sliders;
            // $count = 1;
             foreach ($files as $file){
                     $slider = PortfolioImage::where('id',  $file)->first();
                     @unlink('assets/front/img/portfolio/'. $slider->image);
                     $slider->delete();
             }
        }
		
		
		$sliders2 = $request->sliders2;
        if($sliders2 != null){
            $files = $request->sliders2;
            // $count = 1;
             foreach ($files as $file){
                     $slider2 = PortfolioImage2::where('id',  $file)->first();
                     @unlink('assets/front/img/portfolio/'. $slider2->image2);
                     $slider2->delete();
             }
        }
		
		


        $slug = Helper::make_slug($request->title);
        $portfolios = Portfolio::select('slug')->get();
        $portfolio = Portfolio::findOrFail($id);

        $request->validate([
            'image[]' => 'mimes:jpeg,jpg,png',
			'image2[]' => 'mimes:jpeg,jpg,png',
            'featured_image' => 'mimes:jpeg,jpg,png',
			'featured_logo' => 'mimes:jpeg,jpg,png',
            'title' => [
                'required',
                'max:255',
                function($attribute, $value, $fail) use ($slug, $portfolios, $portfolio){
                    foreach($portfolios as $blg){
                        if($portfolio->slug != $slug){
                            if($blg->slug == $slug){
                                return $fail('Title already taken!');
                            }
                        }
                    }
                },
                'unique:portfolios,title,'.$id
            ],
			
            'client_name' => 'required|max:250',
            'status' => 'required|max:250',
            'service_id' => 'required',
			'content' => 'required',
            'serial_number' => 'required',
            'language_id' => 'required',

        ]);
		

        if($request->hasFile('featured_image')){
            @unlink('assets/front/img/portfolio/'. $portfolio->featured_image);

            $file = $request->file('featured_image');
            $extension = $file->getClientOriginalExtension();
            $featured_image = time().rand().'.'.$extension;
            $file->move('assets/front/img/portfolio/', $featured_image);

            $portfolio->featured_image = $featured_image;
            
        }
		
		if($request->hasFile('featured_logo')){
            @unlink('assets/front/img/portfolio/'. $portfolio->featured_logo);

            $file = $request->file('featured_logo');
            $extension = $file->getClientOriginalExtension();
            $featured_logo = time().rand().'.'.$extension;
            $file->move('assets/front/img/portfolio/', $featured_logo);

            $portfolio->featured_logo = $featured_logo;
            
        }
		
		if($request->hasFile('video_bg_image')){

            $file = $request->file('video_bg_image');
            $extension = $file->getClientOriginalExtension();
            $video_bg_image = time().rand().'.'.$extension;
            $file->move('assets/front/img/portfolio/', $video_bg_image);

            $portfolio->video_bg_image = $video_bg_image;
        }
		
		if($request->on_galeria == 'on'){
		   $portfolio->on_galeria = 1;
	   }else{
		   $portfolio->on_galeria = 0;
      }
	  
	  
	  if($request->on_info == 'on'){
		   $portfolio->on_info = 1;
	   }else{
		   $portfolio->on_info = 0;
      }
	  
	  if($request->on_plantas == 'on'){
		   $portfolio->on_plantas = 1;
	   }else{
		   $portfolio->on_plantas = 0;
      }
	  
	  if($request->on_video == 'on'){
		   $portfolio->on_video = 1;
	   }else{
		   $portfolio->on_video = 0;
      }
	  
	  if($request->on_estagio == 'on'){
		   $portfolio->on_estagio = 1;
	   }else{
		   $portfolio->on_estagio = 0;
      }
	  
	  if($request->on_contato == 'on'){
		   $portfolio->on_contato = 1;
	   }else{
		   $portfolio->on_contato = 0;
      }

		$portfolio->portfolio_map = $request->portfolio_map;
		$portfolio->video_link = $request->video_link;
        $portfolio->title = $request->title;
        $portfolio->language_id = $request->language_id;
        $portfolio->status = $request->status;
        $portfolio->content = $request->content;
		$portfolio->content2 = $request->content2;
		$portfolio->content3 = $request->content3;
		$portfolio->content4 = $request->content4;
		$portfolio->local = $request->local;

		$portfolio->locacao = $request->locacao;
		$portfolio->fundacao = $request->fundacao;
		$portfolio->estrutura = $request->estrutura;
		$portfolio->alvenaria = $request->alvenaria;
		$portfolio->instalacoes = $request->instalacoes;
		$portfolio->rev_interno = $request->rev_interno;
		$portfolio->rev_externo = $request->rev_externo;
		$portfolio->ceramica = $request->ceramica;
		$portfolio->esquadrias = $request->esquadrias;
		$portfolio->pintura = $request->pintura;
		$portfolio->acabamento = $request->acabamento;
		
        $portfolio->slug = $slug;
        $portfolio->service_id = $request->service_id;
        $portfolio->client_name = $request->client_name;
        $portfolio->serial_number = $request->serial_number;
        $portfolio->meta_keywords = $request->meta_keywords;
        $portfolio->meta_description = $request->meta_description;
        $portfolio->save();
        $portfolio_id = $portfolio->id;
		
		

        if($request->hasFile('image')){
            $files = $request->file('image');
            $count = 1;
            foreach ($files as $file){
                    $extension = $file->getClientOriginalExtension();
                    $image = 'portfolio_'.$count.time().rand().'.'.$extension;
                    $file->move('assets/front/img/portfolio/', $image);
                    $portfolio_slider = new PortfolioImage();
                    $portfolio_slider->image = $image;
                    $portfolio_slider->portfolio_id = $portfolio_id;
                    $portfolio_slider->save();
                    $count++;
            }
        }
		
		
		if($request->hasFile('image2')){
            $files = $request->file('image2');
            $count = 1;
            foreach ($files as $file){
                    $extension = $file->getClientOriginalExtension();
                    $image2 = 'portfolio_'.$count.time().rand().'.'.$extension;
                    $file->move('assets/front/img/portfolio/', $image2);
                    $portfolio_slider = new PortfolioImage2();
                    $portfolio_slider->image2 = $image2;
                    $portfolio_slider->portfolio_id = $portfolio_id;
                    $portfolio_slider->save();
                    $count++;
            }
        }
		
		
     
	   
	  


        $notification = array(
            'messege' => 'Portfolio Updated successfully!',
            'alert' => 'success'
        );

        return redirect(route('admin.portfolio.index').'?language='.$this->lang->code)->with('notification', $notification);

    }
	

}
