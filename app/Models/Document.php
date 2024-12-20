<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Document extends Model
{
    use HasFactory;

    public function getFileSize()
    {
        $kb = Storage::size($this->file) / 1024;
        $size = round($kb);
        return $size;

//        return Storage::size($this->file);
    }
}
