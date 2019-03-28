<?php
namespace App\Http\Controllers;

class MessageController extends Controller{


    public function create()
    {

    /*    if ($request->isMethod('POST')) {
            // 校验
            $this->validate($request, [
                'Student.name' => 'required|min:2|max:20',
                'Student.age' => 'required|integer',
                'Student.sex' => 'required|integer',
            ]);*/
            return view('message.create');
        }



}