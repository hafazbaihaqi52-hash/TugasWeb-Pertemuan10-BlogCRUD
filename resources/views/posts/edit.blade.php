@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')

<div class="card">

    <h1>✏️ Edit Post</h1>

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

    <form
        action="{{ route('posts.update', $post) }}"
        method="POST"
    >

        @csrf
        @method('PUT')

        <div style="margin-bottom: 20px;">

            <label for="title">
                <strong>Judul Post</strong>
            </label>

            <br><br>

            <input
                type="text"
                id="title"
                name="title"
                value="{{ old('title', $post->title) }}"
                maxlength="200"
                style="width:100%; padding:12px; border:1px solid #ccc; border-radius:6px;"
            >

            @error('title')
                <small style="color:#dc2626;">
                    {{ $message }}
                </small>
            @enderror

        </div>

        <div style="margin-bottom: 20px;">

            <label for="body">
                <strong>Isi Post</strong>
            </label>

            <br><br>

            <textarea
                id="body"
                name="body"
                rows="10"
                style="width:100%; padding:12px; border:1px solid #ccc; border-radius:6px; resize:vertical;"
            >{{ old('body', $post->body) }}</textarea>

            @error('body')
                <small style="color:#dc2626;">
                    {{ $message }}
                </small>
            @enderror

        </div>

        <button
            type="submit"
            class="btn btn-primary"
        >
            💾 Simpan Perubahan
        </button>

        <a
            href="{{ route('posts.show', $post) }}"
            class="btn"
            style="background:#6b7280; color:white;"
        >
            Batal
        </a>

    </form>

</div>

@endsection