@extends('layouts.app')

@section('title', 'Lihat Post')

@section('content')

<div class="card">

    <h1>📖 Detail Post</h1>

    @if (session('success'))
        <div class="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="post">

        <h2>{{ $post->title }}</h2>

        <p style="white-space: pre-line;">
            {{ $post->body }}
        </p>

        <hr>

        <small>
            Dibuat:
            {{ $post->created_at->format('d M Y H:i') }}
        </small>

        <br>

        <small>
            Terakhir diperbarui:
            {{ $post->updated_at->format('d M Y H:i') }}
        </small>

    </div>

    <br>

    <a
        href="{{ route('posts.edit', $post) }}"
        class="btn"
        style="background:#f59e0b;color:white;"
    >
        ✏️ Edit
    </a>

    <a
        href="{{ route('posts.index') }}"
        class="btn"
        style="background:#6b7280;color:white;"
    >
        ← Kembali
    </a>

</div>

@endsection