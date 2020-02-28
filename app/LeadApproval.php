<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LeadApproval extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'bug_id', 'leadApproval_id', 'firstLineSupport_id', 'approval', 'reason', 'expected_fixing_date'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['expected_fixing_date', 'created_at', 'updated_at'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        //
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'approval' => 'boolean'
    ];

    /**
     * Get the Bug for the LeadApproval.
     */
    public function bug()
    {
        return $this->belongsTo(\App\Bug::class);
    }

}
