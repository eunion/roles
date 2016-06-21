<?php

namespace Eunion\Roles\Traits;

trait PermissionHasRelations
{
    /**
     * Permission belongs to many roles.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany(config('roles.models.role'))->withTimestamps();
    }

    /**
     * Permission belongs to many users.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany(config('auth.model'))->withTimestamps();
    }

    public function group(){
        return $this->belongsTo(config('roles.models.group'));
    }
}
