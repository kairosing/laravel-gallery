<?php

namespace App\Http\Controllers;

use App\services\ImageServices;
use Illuminate\Http\Request;



class ImagesController extends Controller
{

    /**
     * @var ImageServices
     */
    private $images;

    public function __construct(ImageServices $imageServices)
    {
        $this->images = $imageServices;

    }

    function index(){

        $images = $this->images->all();

        return view('welcome', ['imagesInView' => $images]);
    }



    function create(){
        return view('create');
    }

    function show($id){
        $myImage = $this->images->one($id);
        return view('show', ['imageInView' => $myImage->image]);
    }

    function edit($id){
        $image = $this->images->one($id);
        return view('edit', ['imageInView' => $image]);
    }

    function store(Request $request){

        $image = $request->file('image');
        $this->images->add($image);

        return redirect('/');
    }

    function update(Request $request, $id){
        $this->images->update($id, $request->image);

        return redirect('/');
    }

    function delete($id){
       $this->images->delete($id);

        return redirect('/');
    }
}
