<?php

namespace Tests\Feature;

use App\Models\CategoryProject;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $projects = CategoryProject::with('category')->whereNotNull('slug')->get()->toArray();

        foreach ($projects as $project) {
            $url = url("{$project['category']['slug']}/{$project['slug']}");
            $response = $this->get($url);
            $response->assertStatus(200);
        }
    }
}
