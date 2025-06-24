<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\Contracts\HasAbilities;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'user_name',
        'phone',
        'email',
        'password',
        'role',
        'college',
        'specialization',
        'qr_code',
        'is_accepted'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function trainerBadges()
    {
        return $this->hasMany(TrainerBadge::class,'trainee_id');
    }
    public function attendanceLogs()
    {
        return $this->hasMany(AttendanceLog::class,'user_id');
    }
    public function requestedAdministrativeRequests(): HasMany
    {
        return $this->hasMany(AdministrativeRequest::class, 'requester_id');
    }

    public function targetAdministrativeRequests(): HasMany
    {
        return $this->hasMany(AdministrativeRequest::class, 'target_user_id');
    }
    public function inventoryItems(): HasMany
    {
        return $this->hasMany(InventoryItem::class, 'doctor_id');
    }
    public function weeklySchedules(): HasMany
    {
        return $this->hasMany(WeeklySchedule::class, 'doctor_id');
    }
    public function medicalStudies(): HasMany
    {
        return $this->hasMany(MedicalStudy::class, 'doctor_id');
    }
    public function doctorAppointments(): HasMany
    {
        return $this->hasMany(Appointment::class, 'doctor_id');
    }
    public function receptionistAppointments(): HasMany
    {
        return $this->hasMany(Appointment::class, 'receptionist_id');
    }
    public function notifications(): HasMany
    {
        return $this->hasMany(Notification::class);
    }

}
