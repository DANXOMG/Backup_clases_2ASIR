<?php
function sanitize_filename($name) {
  $name = preg_replace('/[^\w\-. ]+/u', '_', $name);
  return trim($name);
}

function ensure_user_upload_dir($userId) {
  $path = __DIR__ . '/../uploads/' . intval($userId);
  if (!is_dir($path)) mkdir($path, 0775, true);
  return realpath($path);
}

function format_bytes($size) {
  $units = ['B','KB','MB','GB','TB']; $i=0;
  while ($size >= 1024 && $i < count($units)-1) { $size/=1024; $i++; }
  return round($size,2).' '.$units[$i];
}