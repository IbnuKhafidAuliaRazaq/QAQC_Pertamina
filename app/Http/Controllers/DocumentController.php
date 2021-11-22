<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OAS;
use App\Division;

class DocumentController extends Controller
{
    //
    public function documentEquipment(){
        return view('document.equipment');
    }
    public function documentEquipmentCreate(){

        $data = [
            'oas' => OAS::all(),
            'division' => Division::all()
        ];

        return view('document.equipment-create', $data);
    }
    public function documentMaterial(){

        return view('document.material');

    }


}
