<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'userid',
        'title',
        'slug',
        'image',
        'tags',
        'content',
        'p_status',
        'r_date',
        'admin_read',
        'admin_read_Date',
        'AdminRemark',
        'AdminRemarkDate',
    ];
}
