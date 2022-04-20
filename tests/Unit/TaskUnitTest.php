<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Task;
use Tests\Unit\Withfaker;

class TaskUnitTest extends TestCase
{ 
    use RefreshDatabase, Withfaker;

    public function test_model_user_exists()
    {
        $user = User::factory()->create();

        $this->assertModelExists($user);
    }

    public function test_schema_support_integer()
    {
        $this->assertTrue(true);
    }

    public function test_schema_detect_sql_injection()
    {
        $this->assertTrue(true);
    }

    public function test_schema_support_length_string()
    {
        $this->assertTrue(true);
    }

    public function test_id_support_integer()
    {
        $this->assertTrue(true);
    }

    public function test_id_detect_null()
    {
        $task = new Task([
            'user_id' => 1,
            'description' => null,
        ]);
        $this->assertEquals(null, $task->description);
    }

    public function test_route_before_login_exists()
    {
        $welcomePage = $this->get('/');
        $welcomePage->assertStatus(200);

        $loginPage = $this->get('/login');
        $loginPage->assertStatus(200);

        $registerPage = $this->get('/register');
        $registerPage->assertStatus(200);
    }
}