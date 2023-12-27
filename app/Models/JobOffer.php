<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @mixin IdeHelperJob_offer
 */
class JobOffer extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_id',
        'contract_type_id',
        'title',
        'content',
        'status',
    ];

    /**
     * @return BelongsTo<ContractType, JobOffer>
     */
    public function contractType(): BelongsTo
    {
        return $this->belongsTo(ContractType::class);
    }

    /**
     * @return BelongsTo<Job, JobOffer>
     */
    public function job(): BelongsTo
    {
        return $this->belongsTo(Job::class);
    }

    /**
     * @return BelongsTo<User, JobOffer>
     */
    public function employeur(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return BelongsToMany<User>
     */
    public function candidates(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'candidate_job_offer');
    }
}
