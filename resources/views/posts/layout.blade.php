<!DOCTYPE html>
<html>
<head>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>
<div id="app">
    <div>
        {{ $slot }}
    </div>
</div>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
