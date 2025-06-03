<?php

declare(strict_types=1);

use Illuminate\Support\Facades\File;

beforeEach(function () {
    File::cleanDirectory(app_path('Registry'));
});

it('makes', function () {
    $this->artisan('registry:make', [
        'name' => 'AppRegistry',
        '--force' => true,
    ])->assertSuccessful();

    $this->assertFileExists(app_path('Registry/AppRegistry.php'));
});

it('registrys for a name', function () {
    $this->artisan('registry:make', [
        '--force' => true,
    ])->expectsQuestion('What should the registry be named?', 'AppRegistry')
        ->assertSuccessful();

    $this->assertFileExists(app_path('Registry/AppRegistry.php'));
});