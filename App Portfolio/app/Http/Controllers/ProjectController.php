<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Inertia\Inertia;
use App\Models\Image;
use Exception;

class ProjectController extends Controller
{

    public function show(){
        $data = $this->githubData();
        $data = $this->selectorData($data);
        return Inertia::render("Projects",["data"=>$data]);

    }

    private function githubData(){
        return Http::get('https://api.github.com/users/ChristianDev123/repos')->json();
    }

    private function selectorData($data){
        $returnArr = [];
        
        foreach($data as $project){ 
            $nameProject = $project['name'];
            $type = str_contains($nameProject,'Estudo')?'study':'ready';
            $arrName = explode('_',$nameProject);
            $namesTechnologies = count($arrName) > 1? explode("-",$arrName[1]): null;
            $description = $project['description'];
            $createDate = $project['created_at'];
            $topics = $project['topics'];
            $image = null;
            $image = $this->getImageTechnologie($namesTechnologies!= null? $namesTechnologies: ["padrao"]);
            array_push($returnArr, [
                "nameProject" => $nameProject,
                "type" => $type,
                "namesTechnologies" => $namesTechnologies,
                "description" => $description,
                "createDate" => $createDate,
                "topics" => $topics,
                "image" => $image
            ]);
        }
        return $returnArr;
    }
    
    private function getImageTechnologie($arrTechnologies){
        $image = new Image();
        if($arrTechnologies != null){
            foreach($arrTechnologies as $technologie){
                $imageTechnologie = $image::where([["nameTechnologie",$technologie]])->get()->first();
                return $imageTechnologie != null ? $imageTechnologie : $image::findOrFail(22);
            }
        }
    }
}
