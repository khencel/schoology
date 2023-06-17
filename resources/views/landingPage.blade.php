<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout/snippet.meta')
    @include('layout/snippet.style')
    <title>Schoology</title>
    @include('layout/snippet.script')
</head>

<body style="background-image: url('{{ asset('img/background.png') }}')">
    @include('layout/snippet.navigation')
    @include('modal/login')
    @include('modal/registration')
</body>
</html>

