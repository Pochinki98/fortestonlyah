{
  "functions": {
    "api/index.php": {
      "runtime": "vercel-php@0.5.2"
    }
  },
  "routes": [
    { "src": "/(.*)", "dest": "/api/index.php" }
  ]
}
