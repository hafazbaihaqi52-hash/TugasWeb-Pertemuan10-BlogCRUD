@extends('layouts.app')

@section('title', 'Tambah Post')

@section('content')

<div class="card">

    <h1>➕ Tambah Post</h1>

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

    <form action="{{ route('posts.store') }}" method="POST">

        @csrf

        <div style="margin-bottom: 20px;">
            <label for="title">
                <strong>Judul Post</strong>
            </label>

            <br><br>

            <input
                type="text"
                id="title"
                name="title"
                value="{{ old('title') }}"
                maxlength="200"
                placeholder="Masukkan judul post"
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
                rows="8"
                placeholder="Masukkan isi post"
                style="width:100%; padding:12px; border:1px solid #ccc; border-radius:6px; resize:vertical;"
            >{{ old('body') }}</textarea>

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
            💾 Simpan Post
        </button>

        <a
            href="{{ route('posts.index') }}"
            class="btn"
            style="background:#6b7280; color:white;"
        >
            Batal
        </a>

    </form>

</div>

@endsection