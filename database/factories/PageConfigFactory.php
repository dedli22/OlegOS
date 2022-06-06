<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PageConfig>
 */
class PageConfigFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'page_title' => 'Page Title',
            'page_offline' => '0',
            'page_offline_msg' => 'Page offline',
            'page_version' => '1.5 Beta',
            'posts_per_page' => '5',
        ];
    }
}
