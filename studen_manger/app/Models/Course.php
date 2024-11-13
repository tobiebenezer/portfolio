<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
    ];

    /**
     * The course's attendance records.
     */
    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }

    /**
     * The course's timetable.
     */
    public function courseTimetable()
    {
        return $this->hasOne(CourseTimetable::class);
    }

    /**
     * The course's registrations.
     */
    public function courseRegistrations()
    {
        return $this->hasMany(CourseRegistration::class);
    }
}
