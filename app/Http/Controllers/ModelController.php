<?php

namespace App\Http\Controllers;

use App\Models\User;
use Spatie\ModelInfo\ModelInfo;

class ModelController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show() 
    {
        $userModelInfo = ModelInfo::forModel(User::class);
        echo __('User model file name: ') . $userModelInfo->fileName . PHP_EOL; // returns the filename that contains your model
        echo __('User model table name: ') . $userModelInfo->tableName . PHP_EOL; // returns the name of the table your models are stored in
        echo __('User model attributes: ') . json_encode($userModelInfo->attributes) . PHP_EOL; 
    }
}
