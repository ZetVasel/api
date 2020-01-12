<?php

namespace App\Http\Controllers;
use App\Http\Resources\ResourceData;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Data;
class testController extends Controller
{
   function index()
   {
      $code = Data::all();
      return testResource::collection($code);

   }



}
