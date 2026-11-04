<div class="carte {{ $misEnAvant ? 'carte-en-avant' : '' }}">
    <h2>{{ $titre }}</h2>
    <div class="carte-corps">{{ $slot }}</div>
</div>