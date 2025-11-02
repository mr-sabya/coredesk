<?php

// app/Models/Brand.php

namespace App\Models\Core;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'alt_text',
        'logo_light',
        'logo_dark',
        'width',
        'height',
        'order',
        'is_active',
    ];

    // Optional: Accessor to get full URL for logos
    public function getLogoLightUrlAttribute()
    {
        return $this->logo_light ? asset('storage/' . $this->logo_light) : null;
    }

    public function getLogoDarkUrlAttribute()
    {
        return $this->logo_dark ? asset('storage/' . $this->logo_dark) : null;
    }
}
