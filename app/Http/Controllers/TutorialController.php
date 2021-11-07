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
        $images = Content::where('id',$id)->first()->images()->get();
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
            $tutorial->thumbnail = Storage::url($request->file('thumb')->store('public/'.$tutorial->user_id.'/tutorials/thumbnails'));
        }
        $tutorial->content_type_id = 'tutorial';
        $tutorial->save();
        return redirect()->route('tutorial', $tutorial->id);
    }
    public function DeleteTutorial($id)
    {
        $tutorial = Content::where('id',$id)->first();
        $images = Image::where('content_id',$id)->get();
        $videos = Video::where('content_id',$id)->get();
        $texts = Text::where('content_id',$id)->get();
        if($videos != null)
        {
            foreach($videos as $video)
            {
                Storage::delete(str_Replace('/storage','public',$video->video));
                $video->delete();
            } 
        }
        if($texts != null)
        {
            foreach($texts as $text)
            {
                $text->delete();
            }
        }
        if($images != null)
        {
            foreach($images as $image)
            {
                Storage::delete(str_Replace('/storage','public',$image->image));
                $image->delete();
            }
        }
        $tutorial->delete();
        $data = array(
            'type'=>'1button',
            'text'=>'Tutorial deletado',
            'button 1'=>'Ir ao perfil',
            'button 1 href'=>route('user',Auth::id())
        );
        return view('menu.warning',['data'=>$data]);
        
    }

    //edits

    public function EditTitle($id)
    {
        $tutorial = Content::where('id',$id)->first();
        return view('content.tutorial.editTitle',['tutorial'=>$tutorial]);
    }
    public function PutTitle(Request $request, $id)
    {
        $tutorial = Content::where('id',$id)->first();
        $tutorial->name = $request->input('title');
        $tutorial->save();
        return redirect()->route('tutorial',$tutorial->id);
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
            Storage::delete(str_replace('/storage','public',$tutorial->thumbnail));
            $tutorial->thumbnail = Storage::url($request->file('thumb')->store('public/'.$tutorial->user_id.'/tutorials/thumbnails'));
            $tutorial->save();
            return redirect()->route('tutorial',$id);
        }
    }
    
    //imagem
    
    public function InsertImage(Request $request, $id)
    {
        //$request->input('text');
        $image = new Image;
        $tutorial = Content::where('id',$id)->first();
        $image->image = Storage::url($request->file('image')->store('public/'.Auth::id().'/tutorials/'.$tutorial->id));
        $image->content_id = $id;
        $image->position = $request->input('position');
        $image->save();
        return redirect()->route('tutorial', $id);
        
        //$url = Storage::url('file.jpg');
        //$path = $request->file('avatar')->store('avatars');
    }
    public function NewImage($id)
    {
        return view('content.tutorial.newImage', ['id'=>$id]);
    }
    public function EditImage($id)
    {
        $image = Image::where('id',$id)->first();
        return view('content.tutorial.editImage',['image'=>$image]);
    }
    public function PutImage(Request $request, $id)
    {
        $image = Image::where('id', $id)->first();

        if($request->file('image') != null)//possui arquivo
        {
            Storage::delete(str_Replace('/storage','public',$image->image));
            $image->image = Storage::url($request->file('image')->store('public/'.Auth::id().'/tutorials/'.$image->content_id));
        }
        if($request->input('position') != null)
        {
            $image->position = $request->input('position');
        }
        $image->save();
        return redirect()->route('tutorial',$image->content_id);
    }
    public function DeleteImage($id)
    {
        $image = Image::where('id',$id)->first();
        $id = $image->content_id;
        Storage::delete(str_Replace('/storage','public',$image->image));
        $image->delete();
        return redirect()->route('tutorial',$id);
    }

    //texto
    
    public function EditText($id)
    {
        $text = Text::where('id',$id)->first();
        return view('content.tutorial.EditText',['text'=>$text]);
    }
    public function NewText($id)
    {
        return view('content.tutorial.newText',['id'=>$id]);
    }
    public function PutText(Request $request, $id)
    {
        $text = Text::where('id',$id)->first();
        if($request->input('text')!= null)//texto nulo
        {
            $text->text = $request->input('text');
        }
        if($request->input('position')!= null)//position nulo
        {
            $text->position = $request->input('position');
        }
        $text->save();
        return redirect()->route('tutorial',$text->content_id);
    }
    public function InsertText(Request $request, $id)
    {
        if($request->input('position') == null ||  $request->input('text') == null)
        {
            $data = array(
                'type'=>'2buttons',
                'text'=>'O texto precisa possuir uma posição e conteúdo',
                'button 1'=>'Retornar',
                'button 1 href'=>route('newTutorialText',$id),
                'button 2'=>'Voltar ao tutorial',
                'button 2 href'=>route('tutorial',$id)
            );
            return view('menu.warning',['data'=>$data]);
        }
        else{
            $text = new Text;
            $text->text = $request->input('text');
            $text->content_id = $id;
            $text->position = $request->input('position');
            $text->save();
            return redirect()->route('tutorial', $id);
        }
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
        return view('content.tutorial.NewVideo',['id'=>$id]);
    }
    public function InsertVideo(Request $request, $id)
    {
        $video = new Video;
        $video->video = Storage::url($request->file('video')->store('public/'.Auth::id().'/tutorials/'.$id));
        $video->position = $request->input('position');
        $video->content_id = $id;
        $video->save();
        return redirect()->route('tutorial',$id);
    }
    public function EditVideo($id)
    {
        $video = Video::where('id',$id)->first();
        return view('content.tutorial.editVideo',['video'=>$video]);
    }
    public function PutVideo(Request $request, $id)
    {
        $video=Video::where('id',$id)->first();
        
        if($request->file('video') != null)//video não nulo
        {
           // $video->video = Storage::url($request->file('video')->store('public/'.Auth::id().'/tutorials/'.$video->content_id));
           Storage::delete(str_replace('/storage','public',$video->video));
           $video->video = Storage::url($request->file('video')->store('public/'.Auth::id().'/tutorials/'.$video->content_id));
           $video->save();
        }
        if($request->input('position') != null)
        {
            $video->position = $request->input('position');
            $video->save();
        }
        return redirect()->route('tutorial',$video->content_id);
    }
    public function DeleteVideo($id)
    {
        $video = Video::where('id',$id)->first();
        $id = $video->content_id;
        Storage::delete(str_replace('/storage','public',$video->video));
        $video->delete();
        return redirect()->route('tutorial',$id);
    }
}