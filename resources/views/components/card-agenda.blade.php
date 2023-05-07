<div class="card-agenda">
    <div class="circle-header">
        <img src="{{ asset('assets/images/' . $icon) }}" alt="{{ $title }}">
    </div>
    <div class="agenda-desc">
        <h4>{{ $title }}</h4>

        <div class="waktu">
            <p>Waktu:</p>
            <p>{{ $date }}</p>
            <p>{{ $timeStart }} - {{ $timeEnd }}</p>
        </div>

        <div class="tempat">
            <p>Tempat:</p>
            <p>{{ $location }}</p>
        </div>
    </div>
</div>
