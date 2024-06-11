<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
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
    public function pelanggan()
    {
        return $this->hasOne(Pelanggan::class, 'pelanggan_name','name');
    }
    protected static function boot()
    {
        parent::boot();

        // static::created(function ($user) {
        //     // Automatically create a corresponding pelanggan record
        //     $user->pelanggan()->create([
        //         'pelanggan_name' => $user->name,
        //         'pelanggan_email' => $user->email,

        //     ]);
        // });
        static::created(function ($user) {
            // Automatically create a corresponding pelanggan record
            $pelanggan = $user->pelanggan()->create([
                'pelanggan_name' => $user->name,
                'pelanggan_email' => $user->email,
            ]);

            // Automatically create a corresponding perangkat record
            $pelanggan->perangkat()->create([
                'nama_pelanggan' => $pelanggan->pelanggan_name,
                'id_pelanggan' => $pelanggan->id_pelanggan,
                'id_perangkat' => 0,
                'kecamatan_pelanggan'=> '',
                'nama_perangkat' => '',
                'penggunaan_debit_air'=>0,
                // Add other fields as necessary
            ]);
        });
    }
}
