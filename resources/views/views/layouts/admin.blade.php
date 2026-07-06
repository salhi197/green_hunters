<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title', 'Admin') — The Green Hunters</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Archivo+Expanded:wght@700;800&family=Barlow+Condensed:wght@500;600;700&family=Inter:wght@400;500;600;700&family=IBM+Plex+Mono:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body class="admin-body">

<div class="admin-header">
  <div class="brand">The Green Hunters — Admin</div>
  <div class="admin-nav">
    <a href="{{ route('admin.areas.index') }}" class="{{ request()->routeIs('admin.areas.*') ? 'active' : '' }}">Areas</a>
    <a href="{{ route('admin.users.index') }}" class="{{ request()->routeIs('admin.users.*') ? 'active' : '' }}">Users</a>
    <form method="POST" action="{{ route('logout') }}">
      @csrf
      <button type="submit">Logout</button>
    </form>
  </div>
</div>

<div class="admin-wrap">

  @if (session('success'))
    <div class="flash flash-success">{{ session('success') }}</div>
  @endif

  @if (session('error'))
    <div class="flash flash-error">{{ session('error') }}</div>
  @endif

  @yield('content')

</div>

</body>
</html>
