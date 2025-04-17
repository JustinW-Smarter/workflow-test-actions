<?php
// Let op: de eerste onopgevangen fatal error of exception beëindigt het script
// ✅ Ja, die() werkt hetzelfde als exit() — beide stoppen het script met optionele boodschap
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
//    echo $niet_bestaand;

// ⚠️ Warning (include failure)
// include 'niet-bestaand-bestand.php';

// ⚠️ Custom warning via trigger_error
// trigger_error("⚠️ Custom warning triggered", E_USER_WARNING);

// ⚠️ Notice
echo "📍 " . __FILE__ . ':' . __LINE__ . " — notice: accessing undefined array key\n";
$array = [];
// echo $array['onbestaand'];

// ❌ Fatal error (call undefined function)
// echo "📍 " . __FILE__ . ':' . __LINE__ . " — fatal error: call undefined function\n";
echo "📍 " . __FILE__ . ':' . __LINE__ . " — try-catch exception test\n";
try {
    throw new Exception("💥 Exception binnen try-catch");
} catch (Exception $e) {
    echo "🛑 Gevangen exception: " . $e->getMessage() . "\n";
    // nonExistentFunction();
}
// onbestaandeFunctie();

// ❌ Uncaught Exception
// echo "📍 " . __FILE__ . ':' . __LINE__ . " — uncaught exception\n";
// throw new Exception("💥 Dit is een ongecaught exception");
?>
