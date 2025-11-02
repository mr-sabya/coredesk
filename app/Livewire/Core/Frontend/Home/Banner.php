<?php

namespace App\Livewire\Core\Frontend\Home;

use App\Models\Core\Banner as CoreBanner;
use Livewire\Component;


class Banner extends Component
{
    public $bannerData; // Public property to hold the banner data

    public function mount()
    {
        // Fetch the banner data when the component is initialized.
        // You might want to get a specific banner, the latest one,
        // or an 'active' banner based on your application logic.
        // For simplicity, let's get the first one for now.
        $this->bannerData = CoreBanner::first();
    }

    public function render()
    {
        return view('livewire.core.frontend.home.banner');
    }
}
