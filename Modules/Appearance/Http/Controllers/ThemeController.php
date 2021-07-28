<?php

namespace Modules\Appearance\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Appearance\Entities\Theme;
use Modules\Appearance\Entities\ThemeSection;
use Validator;
use Modules\Appearance\Enums\ThemeVisivilityStatus;
use DB;
use Facade\Ignition\DumpRecorder\Dump;
use File;

class ThemeController extends Controller
{
    public function themes()
    {
        $themes = Theme::where('status', 1)->get();

        return view('appearance::themes', [
            'themes'    => $themes
        ]);
    }

    public function updateCurrentTheme(Request $request)
    {
        $themes = Theme::all();
        foreach ($themes as $theme) :
            if ($theme->id != $request->block_style) :
                $theme->currtent = 0;
                $theme->save();
            else :
                $theme->currtent = 1;
                $theme->save();
            endif;
        endforeach;

        return redirect()->back();
    }

    public function joinbeforeupdate(Request $request)
    {
        Validator::make($request->all(), [
            'primary_image' => 'required'
        ])->validate();

        $file = $request->primary_image;
        $name = time() . '.' . $request->primary_image->extension();
        $file->move(public_path() . '/theme/img/joinbeforeupdate/', $name);
        $nm = 'theme/img/joinbeforeupdate/' . $name;

        DB::table('home_section')->where('id', 1)->update(array('join_image' => $nm,));
        return redirect()->back();
    }

    public function addNewSlide(Request $request)
    {
        Validator::make($request->all(), [
            'primary_image' => 'required'
        ])->validate();


        $checkout = $request->checkout;
        $description = $request->description;
        $title = $request->title;
        $button1_title = $request->button1_title;
        $button2_title = $request->button2_title;
        $button1_link = $request->button1_link;
        $button2_link = $request->button2_link;



        $file = $request->primary_image;
        $name = time() . '.' . $request->primary_image->extension();
        $file->move(public_path() . '/theme/img/slides/', $name);
        $nm = 'theme/img/slides/' . $name;

        $file_mobile = $request->mobile_image;
        $name_mobile = time() . '.' . $request->mobile_image->extension();
        $file_mobile->move(public_path() . '/theme/img/slides/', $name_mobile);
        $nm_mobile = 'theme/img/slides/' . $name_mobile;

        $data = array("image_m" => $nm_mobile, "image" => $nm, 'checkout' => $checkout, "description" => $description, "title" => $title, "button1_title" => $button1_title, "button2_title" => $button2_title, "button1_link" => $button1_link, "button2_link" => $button2_link);

        DB::table('slideshows')->insert($data);

        return redirect()->back();
    }

    public function deleteSlide(Request $request)
    {
        $id = $request->id;

        DB::table('slideshows')->where('id', $id)->delete();

        return redirect()->back();
    }

    public function updateTile(Request $request)
    {

        Validator::make($request->all(), [
            'tile_image' => 'required'
        ])->validate();

        $title = $request->title;
        $description = $request->description;
        $button_link = $request->button_link;
        $id = $request->id;

        $file = $request->tile_image;
        $name = 'tile-0' . $id . '.' . $request->tile_image->extension();
        $nm = 'theme/img/tiles/' . $name;
        File::delete(public_path() . $nm);
        $file->move(public_path() . '/theme/img/tiles/', $name);
        $data = array("title" => $title, "text" => $description, "button_link" => $button_link, "image" => $nm, "type" => "small");

        DB::table('why_study_at_tiles')->where('id', $id)->update($data);

        return redirect()->back();
    }

    public function updateMedia(Request $request)
    {
        Validator::make($request->all(), [
            'media_image' => 'required'
        ])->validate();

        $title = $request->title;
        $file = $request->media_image;
        $type = $request->type;
        $name = '';
        $id = 0;
        if ($type == "news") {
            $name = 'news-image' . '.' . $request->media_image->extension();
            $id = 2;
        } else {
            $name = 'media-image' . '.' . $request->media_image->extension();
            $id = 1;
        }
        $nm = 'theme/img/media-and-news/' . $name;
        File::delete(public_path() . $nm);
        $file->move(public_path() . '/theme/img/media-and-news/', $name);
        $data = array("title" => $title, "image" => $nm, "type" => $type);

        DB::table('media_and_news')->where('id', $id)->update($data);

        return redirect()->back();
    }

    public function changeVideo(Request $request)
    {
        Validator::make($request->all(), [
            'video' => 'required',
            'thumbnail' => 'required',
            'mobile_thumbnail' => 'required'
        ])->validate();

        $thumbnail = $request->thumbnail;
        $mobilethumbnail = $request->mobile_thumbnail;
        $video = $request->video;

        $video_name = 'video-banner' . '.' . $request->video->extension();
        $video_nm = 'videos/' . $video_name;
        File::delete(public_path() . $video_nm);

        $thumbnail_name = 'thumbnail' . '.' . $request->thumbnail->extension();
        $thumbnail_nm = 'videos/thumbnail/' . $thumbnail_name;
        File::delete(public_path() . $thumbnail_nm);

        $mobilethumbnail_name = 'mobile-thumbnail' . '.' . $request->mobile_thumbnail->extension();
        $mobilethumbnail_nm = 'videos/thumbnail/' . $mobilethumbnail_name;
        File::delete(public_path() . $mobilethumbnail_nm);

        $video->move(public_path() . '/videos/', $video_name);
        $thumbnail->move(public_path() . '/videos/thumbnail/', $thumbnail_name);
        $mobilethumbnail->move(public_path() . '/videos/thumbnail/', $mobilethumbnail_name);

        $data = array("video_name" => $video_nm, "video_thumbnail" => $thumbnail_nm, "mobile_thumbnail" => $mobilethumbnail_nm);

        DB::table('videos')->where('id', 1)->update($data);

        return redirect()->back();
    }

    public function addLogo(Request $request)
    {
        Validator::make($request->all(), [
            'logo' => 'required',
        ])->validate();

        $link = $request->link;
        $file = $request->logo;

        $logo_name = time() . '.' . $request->logo->extension();
        $nm = 'theme/img/logo/' . $logo_name;
        $file->move(public_path() . '/theme/img/logo/', $logo_name);

        $data = array("link" => $link, "image" => $nm);

        DB::table('logos')->insert($data);

        return redirect()->back();
    }

    public function deleteLogo(Request $request)
    {
        $id = $request->id;
        DB::table('logos')->where('id', $id)->delete();

        return redirect()->back();
    }

    public function intakeupdate(Request $request)
    {
        DB::table('home_section')->where('id', 1)->update(array(
            'intake1' => $request->intake1,
            'intake1_sl' => $request->intake1_sl,
            'intake1_in' => $request->intake1_in,
            'intake2' => $request->intake2,
            'intake2_sl' => $request->intake2_sl,
            'intake2_in' => $request->intake2_in,
        ));
        return redirect()->back();
    }

    public function updatePrimarySection(Request $request)
    {

        // Validator::make($request->all(), [
        //     'primary_section_style' => 'required'
        // ])->validate();

        $theme = Theme::where('status', 1)->first();

        $data = [
            'theme_id'      => $theme->id,
            'label'         => 'Primary Section',
            'order'         => 1,
            'post_amount'   => 10,
            'section_style' => $request->get('primary_section_style', 'style_1'),
            'is_primary'    => 1,
            'status'        => 1
        ];

        ThemeSection::updateOrCreate([
            'theme_id'      => $theme->id,
            'is_primary'    => 1,
        ], $data);

        return redirect()->back()->with('success', __('successfully_updated'));
    }

    public function themeOption()
    {
        $activeTheme = Theme::where('status', 1)->first();

        return view('appearance::theme_option', compact('activeTheme'));
    }

    public function updateThemeOption(Request $request)
    {
        Validator::make($request->all(), [
            'header_style' => 'required',
            'footer_style' => 'required'
        ])->validate();

        $inputs             = $request->except(['_token']);

        $theme              = Theme::where('status', ThemeVisivilityStatus::ACTIVE)->where('name', 'theme_one')->first();

        $theme->options     = $inputs;
        $theme->save();

        return redirect()->back()->with('success', __('successfully_updated'));
    }
}
