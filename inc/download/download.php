<?php
// Check HTTP Request
if (isset($_GET['url']) && strpos($_GET['url'], 'i.ytimg.com') == true) {
    ob_start();
    // Build Query URL
    $url = $_GET['url'];
    $content_type = 'getyoutubethumbnails.com-image.jpg';
    // Force download
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . $content_type . '"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Pragma: public');
    ob_clean();
    flush();
    readfile($url);
    exit;
    // Else Redirect
} else {
    header('location: /');
}
