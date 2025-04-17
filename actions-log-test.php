<?php
//    while (ob_get_level()) ob_end_clean();
//    ob_implicit_flush(true);

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    ini_set('html_errors', 0);
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
    echo "📍 " . __FILE__ . ':' . __LINE__ . " — undefined variable test\n";
    echo $niet_bestaand;

// ⚠️ Warning (include failure)
echo "📍 " . __FILE__ . ':' . __LINE__ . " — warning: include fail\n";
include 'niet-bestaand-bestand.php';

// ⚠️ Custom warning via trigger_error
echo "📍 " . __FILE__ . ':' . __LINE__ . " — trigger_error: warning\n";
trigger_error("⚠️ Custom warning triggered", E_USER_WARNING);

// ⚠️ Notice
echo "📍 " . __FILE__ . ':' . __LINE__ . " — notice: accessing undefined array key\n";
$array = [];
echo $array['onbestaand'];

// ❌ Fatal error (call undefined function)
echo "📍 " . __FILE__ . ':' . __LINE__ . " — fatal error: call undefined function\n";
onbestaandeFunctie();

// ❌ Uncaught Exception
echo "📍 " . __FILE__ . ':' . __LINE__ . " — uncaught exception\n";
throw new Exception("💥 Dit is een ongecaught exception");
