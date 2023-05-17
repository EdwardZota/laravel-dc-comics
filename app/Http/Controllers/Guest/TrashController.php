<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;

class TrashController extends Controller
{
    public function trash(){

        $trashs = Comic::onlyTrashed()->get();

        return view('comics.trash_comics',compact('trashs'));

    }
}
