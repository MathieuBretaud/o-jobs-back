<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @mixin IdeHelperJob
 */
class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'picture_url',
    ];


    /**
     * @return HasMany<JobOffer>
     */
    public function jobOffers(): HasMany
    {
        return $this->hasMany(JobOffer::class);
    }
}
