<?php

namespace Harlekoy\ApiDocs\Drivers\Database\Models;

use Harlekoy\ApiDocs\Drivers\Database\Models\ApiGroup;
use Harlekoy\ApiDocs\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;

class Endpoint extends Model
{
    use Cachable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'api_group_id',
        'name',
        'description',
        'method',
        'parameters',
        'sample_response',
        'endpoint',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'parameters'      => 'array',
        'sample_response' => 'array',
    ];


    /**
     * Get endpoint group.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function group()
    {
        return $this->belongsTo(ApiGroup::class, 'api_group_id');
    }
}
