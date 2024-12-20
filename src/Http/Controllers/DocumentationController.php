<?php

namespace KwakuOfosuAgyeman\LaravelInteractiveDocs\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;

class DocumentationController extends Controller
{
    public function index()
    {
        return view('interactive-docs::index');
    }

    public function swaggerJson()
    {
        $path = config('interactive-docs.swagger_json_path');

        if (!File::exists($path)) {
            return response()->json(['error' => 'Swagger JSON not found'], Response::HTTP_NOT_FOUND);
        }

        return response()->file($path);
    }
}
