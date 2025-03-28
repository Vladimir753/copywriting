<?php


namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class History extends Model
{
    protected $table = 'history';


    protected $fillable = [
        'user_id',
        'template_id',
        'name',
        'question',
        'message',
        'is_read',
    ];


    public function template()
    {
        $templates = collect(config('templates'));

        return $templates->where('id', $this->template_id)->first();
    }
}
