@csrf
@if (isset($user))
  @method('PUT')
@endif

<div class="field">
  <label for="name">Name</label>
  <input id="name" name="name" type="text" value="{{ old('name', $user->name ?? '') }}" required>
  @error('name') <div class="error">{{ $message }}</div> @enderror
</div>

<div class="field">
  <label for="email">Email</label>
  <input id="email" name="email" type="email" value="{{ old('email', $user->email ?? '') }}" required>
  @error('email') <div class="error">{{ $message }}</div> @enderror
</div>

<div class="field">
  <label for="password">Password @if(isset($user))<span style="text-transform:none;">(leave blank to keep current)</span>@endif</label>
  <input id="password" name="password" type="password" @if(!isset($user)) required @endif>
  @error('password') <div class="error">{{ $message }}</div> @enderror
</div>

<button type="submit" class="submit-btn">{{ isset($user) ? 'Save changes' : 'Create user' }}</button>
