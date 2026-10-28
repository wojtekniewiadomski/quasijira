<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class ProjectTask
 *
 * @property $id
 * @property $name
 * @property $project_id
 * @property $description
 * @property $options
 * @property $created_at
 * @property $cancelled_at
 * @property $finished_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ProjectTask extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name', 'project_id', 'description', 'options', 'cancelled_at', 'finished_at'];

    public function Project(): BelongsTo
    {
        return $this->belongsTo('App\Models\Project');
    }
}
