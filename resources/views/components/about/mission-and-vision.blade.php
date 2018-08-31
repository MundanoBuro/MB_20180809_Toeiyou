<div class="card c-yellow">
    <div class="wrapper">

        <div class="nav">
            <h2>Misión y Visión</h2>
        </div>

        <div class="content">
            <div class="col photos">
                @foreach ($about->missionAndVision->photos as $photo)
                    <p>This photo {{ $photo->name }}</p>
                    <p>This photo {{ $photo->src }}</p>
                @endforeach
            </div>
            <div class="col "></div>
            <div class="col "></div>
        </div>

    </div>
</div>