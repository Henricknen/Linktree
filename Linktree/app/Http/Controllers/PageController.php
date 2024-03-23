<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;       // puchando o model 'Page'

class PageController extends Controller {
    public function index($slug) {
        $page = Page::where('slug', $slug)-> first();       // pegando as informações da página, pegando o primeiro registro

        if($page) {      //verificando se a página foi encontrada
            $bg = '';

            $links = [];

            return view('page', [
                'font_color'=> $page-> op_font_color,       // enviando informações para a 'page'
                'profile_image'=> url('/media/uploads'). '/'. $page-> op_profile_image,
                'title'=> $page-> op_title,
                'description'=> $page-> op_description,
                'fb_pixel'=> $page-> op_fb_pixel,
                'bg'=> $bg,
                'links'=> $links
            ]);
        } else {
            return view('notfound');
        }
    }
}
