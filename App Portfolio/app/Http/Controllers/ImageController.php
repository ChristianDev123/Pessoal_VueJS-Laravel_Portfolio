<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function create(Request $request){
        $message = "[ERROR] Falha ao tentar criar nova imagem";
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $image = new Image();
            $image->nameTechnologie = $request->name;
            $extension = $request->image->extension();
            $imageName = md5($request->image->getClientOriginalName() . strtotime("now")). '.' . $extension; 
            $request->image->move(public_path("technologies"),$imageName);
            $image->urlImage = '/technologies' . "/$imageName";
            if($image->save()) $message = "[Sucesso] Imagem salva com efetividade!";
        }
        return $message;
    }
}
