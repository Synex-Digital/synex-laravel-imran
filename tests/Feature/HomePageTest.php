<?php

namespace Tests\Feature;

use Tests\TestCase;

class HomePageTest extends TestCase
{
    /**
     * Test that the homepage loads successfully and renders all key components.
     */
    public function test_homepage_renders_successfully(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSeeText('Synex.Digital');
        $response->assertSeeText('Senior Software Engineering for US Founders & Enterprise Leaders');
        $response->assertSeeText('Custom eCommerce Development');
        $response->assertSeeText('Applied AI & Workflow Automation');
        $response->assertSeeText('Full-Stack Web & Application Engineering');
        $response->assertSeeText('UI/UX Design & Design Systems');
        $response->assertSeeText('API Development & Enterprise Integration');
        $response->assertSee('switzer-400.woff2');
        $response->assertSee('project-inquiry-form');
        $response->assertSee('https://schema.org');
    }
}
