<?php
// Set headers for file download
 header("Content-Description: File Transfer");
 header("Content-Type: application/octet-stream");
 header("Cache-Control: no-cache, must-revalidate");
 header("Expires: 0");
 header("Content-Transfer-Encoding: binary");
// Read the file and output to the browser
 exec("./yt-dlp -x --embed-thumbnail --audio-format mp3 --audio-quality 320k --output '%(title)s' https://www.youtube.com/watch?v=".$_GET["id"]);
 $files = glob('*.mp3');
 header("Content-Disposition: attachment; filename=".urlencode($files[0]));
 header('Content-Length: ' . filesize($files[0]));
 header('Pragma: public');
 echo file_get_contents($files[0]);
 exec("rm -R *.mp3")
?>