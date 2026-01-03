<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public static function all($columns = ['*']): array
    {
        return [
            ['title' => 'Manager','salary'=>'2000$'],
            ['title' => 'Deputy','salary'=>'1000$'],
            ['title' => 'CEO','salary'=>'3000$']
        ];


    }
}
