<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use League\CommonMark\Node\Block\Document;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'name', 'address', 'birth_date', 'school_origin', 'status', 'created_at', 'updated_at'
    ];

    public function user()
    {
        return $this->belongsTo(UserData::class);
    }

    public function documents()
    {
        return $this->hasMany(Document::class);
    }

    public function departments()
    {
        return $this->belongsToMany(Department::class, 'student_department');
    }

    public function registrations()
    {
        return $this->hasMany(registration::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
    //
}
