<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use Notifiable;
    public $table = "messages";
    public $timestamps = false;

    protected $fillable = [
        'name', 'email', 'msg', 'status', 'datetime', 'user_id', 'is_user_read', 'is_admin_read', 'admin_id' ];
}

