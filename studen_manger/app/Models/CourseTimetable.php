<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseTimetable extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'course_id',
        'day_of_week',
    ];

    /**
     * The casts attributes for the model.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'day_of_week' => 'array',
    ];

    /**
     * Get the course associated with the timetable.
     */
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
