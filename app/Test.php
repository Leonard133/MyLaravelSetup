<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Test extends Model
{
    use SoftDeletes;
    //
    public function scopeLocalsearch($query)
    {
        $query->when(request()->has('username') && filled(request('username')), function ($q) {
            $q->where('username', 'LIKE', '%' . request('username') . '%');
        });

        $query->when(request()->has('phone') && filled(request('phone')), function ($q) {
            $q->where('phone', 'LIKE', '%' . request('phone') . '%');
        });

        $query->when(request()->has('email') && filled(request('email')), function ($q) {
            $q->where('email', 'LIKE', '%' . request('email') . '%');
        });

        $query->when(request()->has('status') && filled(request('status')), function ($q) {
            if (request('status') == 99)
                $q->onlyTrashed();
            else
                $q->where('status', request('status'));
        });
        $query->when(request()->has('branch') && filled(request('branch')), function ($q) {
            $q->whereHas('branches', function($q) {
                $q->where('id', '=', request('branch'));
            });
        });
        return $query;
    }
}
