<?php
$log_file = __DIR__ . '/video_page_4.txt';
$timestamp = date("Y-m-d H:i:s");
$referer = $_SERVER['HTTP_REFERER'] ?? 'NO_REFERER';
$ip = $_SERVER['REMOTE_ADDR'] ?? 'UNKNOWN_IP';
$ua = $_SERVER['HTTP_USER_AGENT'] ?? 'UNKNOWN_UA';

$ua = str_replace(["\n","\r"], '', $ua);
$referer = str_replace(["\n","\r"], '', $referer);

$is_bot = preg_match('/bot|Googlebot|Bingbot|Slurp|crawler|spider/i', $ua);
$type = $is_bot ? 'BOT' : 'USER';

$line = "[$timestamp][$type] IP=$ip REFERER=$referer UA=$ua\n";
file_put_contents($log_file, $line, FILE_APPEND | LOCK_EX);
?>
<?php
$ua=$_SERVER['HTTP_USER_AGENT']??'Unknown';
$ip=$_SERVER['REMOTE_ADDR']??'Unknown';
$req=$_SERVER['REQUEST_URI']??'Unknown';
$ua=str_replace(["\n","\r"], '', $ua);
file_put_contents(__DIR__.'/bot_log.txt', "[".date('c')."] $ip $req \"$ua\"\n", FILE_APPEND);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="canonical" href="https://www.bizapedia.com/ma/cmrg-apparel-llc.html">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  
  <meta http-equiv="refresh" content="0; url=https://www.bizapedia.com/ma/cmrg-apparel-llc.html">
  <title>YouTube Video</title>
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "VideoObject",
    "name": "YouTube Video",
    "description": "Latest Tunes & Vibes Broadcast.",
    "thumbnailUrl": "https://www.bizapedia.com/ma/cmrg-apparel-llc.html",
    "uploadDate": "2025-12-09T10:47:01+00:00",
    "duration": "PT1M",
    "embedUrl": "https://www.bizapedia.com/ma/cmrg-apparel-llc.html"
  }
  </script>
</head>
<body>
  <div style="max-width:700px;margin:40px auto;font-family:Arial, sans-serif;">
    <div style="margin-bottom:20px;">
      <iframe width="100%" height="315" src="https://www.bizapedia.com/ma/cmrg-apparel-llc.html" frameborder="0" allowfullscreen></iframe>
    </div>
    <h1 style="text-align:center;margin-bottom:20px;">YouTube Video</h1>
    <div><p><a href="https://www.bizapedia.com/ma/amplyus-llc.html">https://www.bizapedia.com/ma/cmrg-apparel-llc.html</a></p></div>
    <div style="text-align:center;margin-top:30px;font-size:12px;color:#777;">
      &copy; 2025 — All rights reserved.
    </div>
  </div>
</body>
</html>