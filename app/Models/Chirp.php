<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo; //!This imports the BelongsTo class, which defines a relationship where a Chirp belongs to a User.

class Chirp extends Model
{
    protected $fillable = [
        'message', // Only 'message' can be mass assigned
    ];
    public function user(): BelongsTo //!This defines a method called user() in the Chirp model.

    {
        return $this->belongsTo(User::class);  //!This tells Laravel: "Each Chirp belongs to one User".
        //!Now, we can use $chirp->user to get the user who created the chirp.
    }
}
