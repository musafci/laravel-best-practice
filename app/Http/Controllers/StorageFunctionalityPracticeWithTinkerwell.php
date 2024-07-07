<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

//Storage::allFiles(directory);
Storage::allFiles('musa');

// Storage::put('test_001.txt', 'Hello laravel!');
// Storage::disk('custom_disk')->put('custom_file.txt', 'Hello custom file.')
// Storage::get('test_001.txt');
// Storage::copy('test_001.txt', 'test_002.txt');