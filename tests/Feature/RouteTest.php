<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RouteTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testAdminIndex()
    {
        $response = $this->get('/admin');

        $response->assertStatus(200);
    }

    public function testAdminNews()
    {
        $response = $this->get('/admin/news');

        $response->assertStatus(200);
    }

    public function testAdminCategories()
    {
        $response = $this->get('/admin/categories');

        $response->assertStatus(200);
    }

    public function testUserRequest()
    {
        $response = $this->get('/user/request');

        $response->assertStatus(200);
    }

    public function testUserFeedback()
    {
        $response = $this->get('/user/feedback');

        $response->assertStatus(200);
    }

    public function testRoot()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testAbout()
    {
        $response = $this->get('/about');

        $response->assertStatus(200);
    }

    public function testAuth()
    {
        $response = $this->get('/auth');

        $response->assertStatus(200);
    }

    public function testNewsCategory()
    {
        $response = $this->get('/news/category');

        $response->assertStatus(200);
    }

    public function testNewsIdCategoryId()
    {
        $response = $this->get('/news/1/1');

        $response->assertStatus(200);
    }

    public function testCategoryId()
    {
        $response = $this->get('/news/3');

        $response->assertStatus(200);
    }

    public function testAddNews()
    {
        $response = $this->get('admin/news/addnews');

        $response->assertStatus(200);
    }

    /*
    Браузерный тест, проверить не получилось, при установке даёт ошибку
    public function testFormRequest()
    {
        $this->visit('/user/request')
            ->type('Taylor', 'name')
            ->type('79876543210', 'telephone')
            ->type('abc@abc.com', 'email')
            ->type('Proverka', 'description')
            ->press('sent')
            ->see('ok');
    }*/
}
