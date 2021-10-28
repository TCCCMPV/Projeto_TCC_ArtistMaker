<?php

namespace App\Http\Controllers;

use App\Content;
use App\Image;
use App\Video;
use App\Text;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class TutorialController extends Controller
{

    public function ShowTutorial($id)
    {
        $tutorial = Content::where('id',$id)->first();
        $images = Content::where('id',$id)->first()->images;
        $texts = Content::where('id',$id)->first()->texts()->get();
        $videos = Content::where('id',$id)->first()->videos()->get();
        $mix = $images->merge($texts);
        $mix = $mix->merge($videos);
        $mix = $mix->sortBy('position');
        return view('content.tutorial.tutorial',['tutorial'=>$tutorial,'mix'=>$mix]);
    }
    public function NewTutorial()
    {
        return view('content.tutorial.new');
    }
    public function PostTutorial(Request $request)
    {
        $tutorial = new Content;
        $tutorial->name = $request->input('name');
        $tutorial->user_id = Auth::id();
        if($request->file('thumb') == null)
        {
            $tutorial->thumbnail = '/default/UnknownContent.png';
        }
        else{
            $tutorial->thumbnail = Storage::url($request->file('thumb')->store('storage/'.$tutorial->user_id.'/tutorials/thumbnails'));
        }
        $tutorial->content_type_id = 'tutorial';
        $tutorial->save();
        return redirect()->route('tutorial', $tutorial->id);
    }

    //edits

    public function EditTitle($id)
    {
        
    }
    public function EditThumb($id)
    {
        $tutorial = Content::where('id',$id)->first();
        return view('content.tutorial.EditThumb',['tutorial'=>$tutorial]);
    }
    public function PutThumb(Request $request, $id)
    {
        if($request->file('thumb') == null )
        {
            return redirect()->route('tutorial',$id);
        }
        else
        {
            $tutorial = Content::where('id',$id)->first();
            $tutorial->thumbnail = Storage::url($request->file('thumb')->store('public/tutorial/'));
            return redirect()->route('tutorial',$id);
        }
    }
    
    //imagem
    
    public function InsertImage(Request $request, $id)
    {
        //$request->input('text');
        $image = new Image;
        $image->image = Storage::url($request->file('image')->store('public/tutorials/'.$id));
        $image->content_id = $id;
        $image->position = $request->input('position');
        $image->save();
        return redirect()->route('tutorial', $id);
        
        //$url = Storage::url('file.jpg');
        //$path = $request->file('avatar')->store('avatars');
    }
    public function NewImage($id)
    {
        return view('content.tutorialNewImage', ['id'=>$id]);
    }
    public function DeleteImage($id)
    {
        $image = Image::where('id',$id)->first();
        $id = $image->content_id;
        $image->delete();
        return redirect()->route('tutorial',$id);
    }

    //texto
    
    public function EditText($id)
    {
        $text = Text::where('id',$id)->first();
        return view('content.tutorialEditText',['text'=>$text]);
    }
    public function NewText($id)
    {
        return view('content.tutorialNewText',['id'=>$id]);
    }
    public function InsertText(Request $request, $id)
    {
        //$request->input('text');
        $text = new Text;
        $text->text = $request->input('text');
        $text->content_id = $id;
        $text->position = $request->input('position');
        $text->save();
        return redirect()->route('tutorial', $id);
    }
    public function DeleteText($id)
    {
        $text = Text::where('id',$id)->first();
        $id = $text->content_id;
        $text->delete();
        return redirect()->route('tutorial',$id);
    }

    //video
    
    public function NewVideo($id)
    {
        return view('content.tutorialNewVideo',['id'=>$id]);
    }
    public function InsertVideo(Request $request, $id)
    {
        $video = new Video;
        $video->video = Storage::url($request->file('video')->store('public/tutorials/'.$id));
        $video->position = $request->input('position');
        $video->content_id = $id;
        $video->save();
        return redirect()->route('tutorial',$id);
    }
    public function DeleteVideo($id)
    {
        $video = Video::where('id',$id)->first();
        $id = $video->content_id;
        $video->delete();
        return redirect()->route('tutorial',$id);
    }
}