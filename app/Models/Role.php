<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'role_name',
    ];

    /**
     * Get the users associated with the role.
     */
    public function users()
    {
        return $this->hasMany(BranchUsers::class);
    }
}
