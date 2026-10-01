<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SSO Callback | Sip</title>
    <script>
        window.opener.postMessage(@json($loginResponse), window.location.origin)
        window.close()
    </script>
</head>
</html>
