<?php
// Receives a recording (WAV blob) from the recorder and saves it to uploads/.
// Only used when the "Upload" flow in app.js is re-enabled.

$uploadsDir = __DIR__ . DIRECTORY_SEPARATOR . 'uploads';
if (!is_dir($uploadsDir)) {
    mkdir($uploadsDir, 0775, true);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['audio_data'])) {
    $file = $_FILES['audio_data'];
    if ($file['error'] !== UPLOAD_ERR_OK) {
        http_response_code(400);
        echo "Upload failed with error code {$file['error']}.";
        exit;
    }

    $name = preg_replace('/[^A-Za-z0-9._-]/', '_', $file['name']);
    $dest = $uploadsDir . DIRECTORY_SEPARATOR . time() . '_' . $name;

    if (move_uploaded_file($file['tmp_name'], $dest)) {
        echo "Saved: " . basename($dest);
    } else {
        http_response_code(500);
        echo "Could not save the file.";
    }
} else {
    http_response_code(400);
    echo "Expected a POST request with an 'audio_data' file field.";
}