<?php

namespace App\Http\Controllers;

use App\Models\User;
use Spatie\ModelInfo\ModelInfo;

class ModelController extends Controller
{
    public function show() 
    {
        $userModelInfo = ModelInfo::forModel(User::class);
        echo '使用者模型檔案名稱：' . $userModelInfo->fileName . PHP_EOL; // returns the filename that contains your model
        echo '使用者模型資料表名稱：' . $userModelInfo->tableName . PHP_EOL; // returns the name of the table your models are stored in
        echo '使用者模型資料表名稱：' . json_encode($userModelInfo->attributes) . PHP_EOL; 
    }
}
