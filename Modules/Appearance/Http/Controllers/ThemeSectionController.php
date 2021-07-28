<?php

namespace Modules\Appearance\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Appearance\Entities\ThemeSection;
use Modules\Appearance\Entities\Home_section;
use Modules\Post\Entities\Category;
use Modules\Ads\Entities\Ad;
use Modules\Appearance\Entities\Theme;
use Validator;
use DB;

class ThemeSectionController extends Controller
{
    public function sections()
    {
        $sections                   = ThemeSection::with('ad')->orderBy('order', "ASC")->where('is_primary', '<>', 1)->where(function ($query) {
            $query->where('language', \LaravelLocalization::setLocale() ?? settingHelper('default_language'))->orWhere('language', null);
        })->paginate(10);

        $categories                 = Category::orderBy('id', 'ASC')->where('language', \LaravelLocalization::setLocale() ?? settingHelper('default_language'))->get();
        $primarySection             = ThemeSection::where('is_primary', 1)->first();

        $ads                        = Ad::orderBy('id', 'desc')->get();

        $hm_sc  =   Home_section::where('id', 1)->first();

        $slideshows = DB::select('SELECT * from slideshows');

        $tiles = DB::select('SELECT * from why_study_at_tiles');

        $media = DB::select('SELECT * from media_and_news');

        $video = DB::select('SELECT * from videos');

        $logos = DB::select('SELECT * from logos');

        return view('appearance::theme_section', [
            'sections'      => $sections,
            'primarySection' => $primarySection,
            'categories'    => $categories,
            'ads'           => $ads,
            'hm_sc'         => $hm_sc,
            "slideshows"    => $slideshows,
            "tiles"         => $tiles,
            "media"         => $media,
            "video"         => $video,
            "logos"         => $logos
        ]);
    }
}
