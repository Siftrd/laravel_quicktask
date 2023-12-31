<?php

namespace App\Models;

use App\Models\Task as ModelsTask;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\models\User;

class Task extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_task';
    public function user()
    {
      return $this->belongsTo(User::class);
    }

}
