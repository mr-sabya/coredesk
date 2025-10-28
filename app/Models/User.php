<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'is_super_admin',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'is_super_admin' => 'boolean', // Cast to boolean
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


    public function isSuperAdmin(): bool
    {
        return $this->is_super_admin;
    }

    /**
     * Get the tenants this user has access to.
     */
    public function tenants()
    {
        return $this->belongsToMany(Tenant::class, 'tenant_user')
            ->withPivot('role') // Include the role from the pivot table
            ->withTimestamps();
    }

    /**
     * Get the role of the user for a specific tenant.
     */
    public function getRoleForTenant(Tenant $tenant): ?string
    {
        return $this->tenants()->where('tenants.id', $tenant->id)->first()->pivot->role ?? null;
    }

    /**
     * Check if the user is an owner for a specific tenant.
     */
    public function isOwnerOfTenant(Tenant $tenant): bool
    {
        return $this->getRoleForTenant($tenant) === 'owner';
    }

    /**
     * Check if the user is an admin for a specific tenant.
     */
    public function isAdminOfTenant(Tenant $tenant): bool
    {
        $role = $this->getRoleForTenant($tenant);
        return in_array($role, ['owner', 'admin']);
    }

}
