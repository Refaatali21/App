<?php

namespace App\Traits;

use Illuminate\Http\Request;

trait ValTrait {

    /**
     * @param Request $request
     * @return $this|false|string
     */

    public function getlocal()
    {
        return app()->getlocal();
    }


    public function Errorvalidtion($status , $error , $mass)
    {
        return response()->json([
            'status' => $status,
            'error' => $error,
            'mass' => $mass
        ]);
    }

    public function Succvalidtion ( $status , $error , $mass , ...$categores)
    {
        return response()->json([
            'status' => $status,
            'error' => $error,
            'mass' => $mass,
            'categores' => $categores
        ]);
    }

    public function SuccActive( $status , $errorms , $mass , $key)
    {
        return response()->json([
            'status' => $status,
            'errorms' => $errorms,
            'mass' => $mass,
            'active' => $key
        ]);
    }



}
