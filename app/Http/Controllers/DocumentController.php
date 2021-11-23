<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OAS;
use App\Division;
use App\DocumentReport;

class DocumentController extends Controller
{
    //
    public function documentEquipment(){
        $documents = DocumentReport::where('type', 1)->get();
        return view('document.equipment', compact('documents'));
    }
    public function documentMaterial(){
        $documents = DocumentReport::where('type', 2)->get();
        return view('document.material', compact('documents'));
    }


}
