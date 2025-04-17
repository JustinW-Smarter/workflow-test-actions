<?php
    while (ob_get_level()) ob_end_clean();
    ob_implicit_flush(true);

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    // Dummy array om te testen
    $demo = [
        'project' => 'workflow-test-actions',
        'status' => 'success',
        'files' => ['index.php', 'style.css', 'script.js'],
        'deployed_at' => date('Y-m-d H:i:s')
    ];

    echo "📍 " . __FILE__ . ':' . __LINE__ . " — test echo\n";

    // Output via print_r
    echo "📍 " . __FILE__ . ':' . __LINE__ . " — print_r demo\n";
    echo "=== 📦 print_r output ===\n";
    print_r($demo);

    // Output via var_dump
    echo "📍 " . __FILE__ . ':' . __LINE__ . " — var_dump demo\n";
    echo "=== 🔍 var_dump output ===\n";
    var_dump($demo);
