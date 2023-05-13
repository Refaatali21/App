<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;
use App\Traits\ValTrait;

class categores extends Controller
{
    use ValTrait;
    public function index()
    {
        $categores = category::select('id', 'name_'.app()->getLocale())->get();
        return response()->json($categores);
    }

    public function stores(Request $request)
    {
        $category = category::select('id','name_'.app()->getLocale())->find($request ->id);
        if(!$category){
        return $this->Errorvalidtion( 'false' ,'001', 'هذا القسم غير موجود');
        }else{
            return $this->Succvalidtion('true'  ,'0000' , '' , $category);
        }
    }

    public function active(Request $request)
    {
        $category = category::where('id' , $request->id);
        $category->update(['active' => $request->active]);
        if(!$category){
            return $this->Errorvalidtion( 'false' ,'001', 'هذا القسم غير موجود');
        }else{
            return $this->SuccActive( 'true' ,'0000', 'تم التحديث بنجاح' , $category);
        }
    }
}
