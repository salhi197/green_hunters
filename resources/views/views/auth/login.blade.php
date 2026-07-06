<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login — The Green Hunters</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Archivo+Expanded:wght@700;800&family=Barlow+Condensed:wght@500;600;700&family=Inter:wght@400;500;600;700&family=IBM+Plex+Mono:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body class="admin-body">

<div class="login-wrap">
  <div class="login-card">
    <h1>Admin Login</h1>
    <p>The Green Hunters — Areas &amp; Users backend</p>

    @if ($errors->any())
      <div class="flash flash-error">
        @foreach ($errors->all() as $error)
          {{ $error }}
        @endforeach
      </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
      @csrf
      <div class="field">
        <label for="email">Email</label>
        <input id="email" name="email" type="email" value="{{ old('email') }}" required autofocus>
      </div>
      <div class="field">
        <label for="password">Password</label>
        <input id="password" name="password" type="password" required>
      </div>
      <button type="submit" class="submit-btn login-card-submit" style="width:100%;">Log in</button>
    </form>
  </div>
</div>

</body>
</html>
