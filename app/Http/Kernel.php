<?php
// filepath: c:\Users\filip\OneDrive\Desktop\Code\desafio-corelab\corelab-api-challenge-php\app\Http\Kernel.php
protected $middleware = [
  \Fruitcake\Cors\HandleCors::class, // Adicione essa linha se ainda não estiver
  \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
  \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
  \App\Http\Middleware\TrimStrings::class,
];
