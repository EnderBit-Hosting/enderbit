<?php
// Usage: $title and $css must be set before including this file
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EnderBit | <?php echo htmlspecialchars($title); ?></title>
  <meta name="description" content="EnderBit offers 100% free game server hosting for Minecraft, CS2, Rust, ARK, Garry's Mod, Discord bots, Insurgency, Mumble, TeamSpeak, MariaDB, MongoDB and more. No credit card required.">
  <link rel="icon" type="image/png" href="/icon.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Space+Grotesk:wght@400;500;600;700&display=swap">
  <link rel="stylesheet" href="/css/global.css?v=<?php echo filemtime(__DIR__ . '/../css/global.css'); ?>">
  <link rel="stylesheet" href="/css/<?php echo htmlspecialchars($css); ?>.css?v=<?php echo filemtime(__DIR__ . '/../css/' . $css . '.css'); ?>">
</head>
<body>