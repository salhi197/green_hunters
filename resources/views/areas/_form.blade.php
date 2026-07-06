@csrf
@if (isset($area))
  @method('PUT')
@endif

<div class="field">
  <label for="name">Area name</label>
  <input id="name" name="name" type="text" value="{{ old('name', $area->name ?? '') }}" required>
  @error('name') <div class="error">{{ $message }}</div> @enderror
</div>

<div class="row-2">
  <div class="field">
    <label for="prio">Priority (1 = highest)</label>
    <input id="prio" name="prio" type="number" min="1" value="{{ old('prio', $area->prio ?? '') }}" required>
    @error('prio') <div class="error">{{ $message }}</div> @enderror
  </div>
  <div class="field">
    <label for="status">Status</label>
    <select id="status" name="status" required>
      <option value="high" @selected(old('status', $area->status ?? '') === 'high')>High priority</option>
      <option value="mid" @selected(old('status', $area->status ?? '') === 'mid')>Mid priority</option>
      <option value="open" @selected(old('status', $area->status ?? '') === 'open')>Open / on request</option>
    </select>
    @error('status') <div class="error">{{ $message }}</div> @enderror
  </div>
</div>

<div class="row-2">
  <div class="field">
    <label for="lat">Latitude</label>
    <input id="lat" name="lat" type="text" value="{{ old('lat', $area->lat ?? '') }}" required>
    @error('lat') <div class="error">{{ $message }}</div> @enderror
  </div>
  <div class="field">
    <label for="lng">Longitude</label>
    <input id="lng" name="lng" type="text" value="{{ old('lng', $area->lng ?? '') }}" required>
    @error('lng') <div class="error">{{ $message }}</div> @enderror
  </div>
</div>
<p class="hint" style="margin:-10px 0 18px;">Tip: right-click a spot on Google Maps or OpenStreetMap and copy the coordinates.</p>

<div class="row-2">
  <div class="field">
    <label for="vans">Vans stationed</label>
    <input id="vans" name="vans" type="number" min="0" value="{{ old('vans', $area->vans ?? 0) }}" required>
    @error('vans') <div class="error">{{ $message }}</div> @enderror
  </div>
  <div class="field">
    <label for="stops_per_week">Stops per week</label>
    <input id="stops_per_week" name="stops_per_week" type="number" min="0" value="{{ old('stops_per_week', $area->stops_per_week ?? 0) }}" required>
    @error('stops_per_week') <div class="error">{{ $message }}</div> @enderror
  </div>
</div>

<button type="submit" class="submit-btn">{{ isset($area) ? 'Save changes' : 'Create area' }}</button>
