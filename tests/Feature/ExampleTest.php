<?php

namespace Tests\Feature;

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
        //連線 / 並取得回傳
        $response = $this->get('/');

        //檢查回傳的 HTTP Status 是不是 200 (成功連線)
        $response->assertStatus(200);
    }
}
