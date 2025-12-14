<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function getDatos(){
        // Aquí puedes devolver cualquier dato, por ejemplo, un array simple
        return response()->json([
            'message' => 'Datos cargados correctamente',
            'data' => ['item1', 'item2', 'item3']
        ]);
    }


}
