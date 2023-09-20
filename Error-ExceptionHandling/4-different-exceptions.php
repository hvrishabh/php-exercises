<?php

try {
    $file = "text.txt";

    if (!file_exists($file)) {
        throw new RuntimeException("File does not exits.");
    }
    $handle = fopen($file, "r");
    if (!$handle) {
        throw new Exception("Error opening file.");
    }

    fclose($handle);

} catch (RuntimeException $e) {
    echo "RunTimeException : " . $e->getMessage();
} catch (Exception $e) {
    echo "Exception : " . $e->getMessage();
} finally {
    echo "Script executed completely.";
}
