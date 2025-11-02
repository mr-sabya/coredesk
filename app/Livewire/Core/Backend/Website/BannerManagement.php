<?php

namespace App\Livewire\Core\Backend\Website;

use App\Models\Core\Banner;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class BannerManagement extends Component
{
    use WithFileUploads;

    public $bannerId;
    public $news_tag;
    public $news_text;
    public $title;
    public $description;
    public $current_image_path;
    public $new_image;
    public $banner_exists = false;

    protected $rules = [
        'news_tag' => 'nullable|string|max:255',
        'news_text' => 'nullable|string|max:255',
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'new_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048', // 2MB max
    ];

    public function mount()
    {
        $banner = Banner::first();

        if ($banner) {
            $this->banner_exists = true;
            $this->bannerId = $banner->id;
            $this->news_tag = $banner->news_tag;
            $this->news_text = $banner->news_text;
            $this->title = $banner->title;
            $this->description = $banner->description;
            $this->current_image_path = $banner->image;
        } else {
            $this->banner_exists = false;
            $this->news_tag = '';
            $this->news_text = '';
            $this->title = '';
            $this->description = '';
            $this->current_image_path = null;
            $this->bannerId = null;
        }
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function saveBanner()
    {
        $this->validate();

        $banner = null;
        if ($this->bannerId) {
            $banner = Banner::find($this->bannerId);
        }

        if (!$banner) {
            $banner = new Banner();
        }

        $banner->news_tag = $this->news_tag;
        $banner->news_text = $this->news_text;
        $banner->title = $this->title;
        $banner->description = $this->description;

        if ($this->new_image) {
            if ($this->current_image_path && Storage::disk('public')->exists($this->current_image_path)) {
                Storage::disk('public')->delete($this->current_image_path);
            }
            $imagePath = $this->new_image->store('banners', 'public');
            $banner->image = $imagePath;
        }

        $banner->save();

        $this->bannerId = $banner->id;
        $this->banner_exists = true;
        $this->current_image_path = $banner->image;
        $this->new_image = null;

        // Use the dispatch method here for the toast notification
        $message = 'Banner ' . ($this->bannerId ? 'updated' : 'created') . ' successfully!';
        $this->dispatch('show-toast', [
            'message' => $message,
            'type' => 'success', // or 'error', 'info', 'warning' based on your toast system
        ]);
    }
    
    public function render()
    {
        return view('livewire.core.backend.website.banner-management');
    }
}
