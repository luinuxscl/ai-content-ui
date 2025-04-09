@extends('layouts.example')

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1 class="text-2xl font-semibold mb-6">Code Block Component Demo</h1>
            
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 mb-6">
                <h2 class="text-xl font-medium mb-4">PHP Example</h2>
                <x-code-block language="php" code="<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        
        return view('users.index', compact('users'));
    }
}
?>"></x-code-block>
            </div>
            
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 mb-6">
                <h2 class="text-xl font-medium mb-4">JavaScript Example</h2>
                <x-code-block language="javascript">
document.addEventListener('DOMContentLoaded', function() {
    const button = document.querySelector('#submit-button');
    
    button.addEventListener('click', function(event) {
        event.preventDefault();
        console.log('Button clicked!');
        
        // Fetch API example
        fetch('/api/data')
            .then(response => response.json())
            .then(data => console.log(data))
            .catch(error => console.error('Error:', error));
    });
});
                </x-code-block>
            </div>
            
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 mb-6">
                <h2 class="text-xl font-medium mb-4">HTML Example</h2>
                <x-code-block language="html">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example Page</title>
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Welcome to our website</h1>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <p>This is the main content area.</p>
    </main>
    <footer>
        <p>&copy; 2025 Example Company</p>
    </footer>
</body>
</html>
                </x-code-block>
            </div>
            
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h2 class="text-xl font-medium mb-4">CSS Example</h2>
                <x-code-block language="css">
body {
    font-family: 'Inter', sans-serif;
    line-height: 1.6;
    color: #333;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 15px;
}

.card {
    background: white;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    padding: 20px;
    margin-bottom: 20px;
}

@media (max-width: 768px) {
    .card {
        padding: 15px;
    }
}
                </x-code-block>
            </div>
        </div>
    </div>
@endsection
