<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, viewport-fit=cover" />
    <meta name="description" content="Advanced Science Fiction Motion Graphic Portfolio of MD SHAMIM HOSSAIN." />
    <meta name="theme-color" content="#05070f" />
    <meta name="color-scheme" content="dark" />
    <title>MD SHAMIM HOSSAIN | Advanced Sci-Fi HUD Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700;800&family=Rajdhani:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              night: "#05070f",
              panel: "#091322",
              cyanx: "#2af6ff",
              magx: "#ff3a98",
              violetx: "#9657ff"
            }
          }
        }
      };
    </script>
    <link rel="stylesheet" href="./assets/css/styles.css" />
  </head>

  <x-home.header />

@yield()

<x-home.footer />

  </html>
