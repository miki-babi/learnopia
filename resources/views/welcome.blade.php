<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Learnopia</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <script>
    
    
        document.addEventListener("DOMContentLoaded", function() {
            const tg = window.Telegram.WebApp;
            tg.expand();
    
            
            if (tg.initDataUnsafe.user) {
                const userId = tg.initDataUnsafe.user.id;
                const firstName = encodeURIComponent(tg.initDataUnsafe.user.first_name);
                const lastName = encodeURIComponent(tg.initDataUnsafe.user.last_name || '');
                const username = encodeURIComponent(tg.initDataUnsafe.user.username || '');
                // const photourl = encodeURIComponent(tg.initDataUnsafe.user.username || '');
                const photoUrl = encodeURIComponent(tg.initDataUnsafe.user.photo_url || '');
    
                // Use Laravel's route name (manually constructed since JS can't call route() directly)
                const routeName = "{{ route('home') }}";
                window.location.href = `${routeName}?user_id=${userId}&first_name=${firstName}&last_name=${lastName}&username=${username}&photo_url=${photoUrl}`;
            }
        });
        </script>
</body>
</html>