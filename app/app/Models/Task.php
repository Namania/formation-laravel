<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'description',
        'status',
        'due_date',
    ];

    #[Scope()]
    public function scopeOverdue(Builder $query): Builder
    {
        return $query
            ->whereDate('due_date', '<', today())
            ->where('status', '!=', 'done');
    }

    /**
     * @var array{
     *     due_date: 'date',
     * }
     */
    protected $casts = [
        'due_date' => 'date',
    ];
}
