@if (session('success'))
    <div class="alert">
        {{ session('success') }}
    </div>
@endif

@if ($errors->any())
    <div class="alert" style="background:#fee2e2; color:#991b1b;">
        <strong>Terjadi kesalahan:</strong>

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif