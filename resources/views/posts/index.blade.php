@extends('layouts.app')

@section('title', 'Daftar Post')

@section('content')

    <x-card>

        <h1>📝 Daftar Post</h1>

        <a href="{{ route('posts.create') }}" class="btn btn-primary">
            + Tambah Post
        </a>

        <br><br>

        <x-alert />

        @forelse ($posts as $post)

            <div class="post">

                <h2>{{ $post->title }}</h2>

                <p>
                    {{ Str::limit($post->body, 150) }}
                </p>

                <small>
                    Dibuat:
                    {{ $post->created_at->format('d M Y H:i') }}
                </small>

                <br><br>

                <a
                    href="{{ route('posts.show', $post) }}"
                    class="btn btn-primary"
                >
                    Lihat
                </a>

                <a
                    href="{{ route('posts.edit', $post) }}"
                    class="btn"
                    style="background:#f59e0b;color:white;"
                >
                    Edit
                </a>

                <form
                    action="{{ route('posts.destroy', $post) }}"
                    method="POST"
                    style="display:inline;"
                    onsubmit="return confirm('Yakin ingin menghapus post ini?')"
                >
                    @csrf
                    @method('DELETE')

                    <button
                        type="submit"
                        class="btn"
                        style="background:#dc2626;color:white;"
                    >
                        Hapus
                    </button>
                </form>

            </div>

        @empty

            <div class="empty">
                <p>Belum ada post.</p>
                <p>
                    Klik <strong>Tambah Post</strong>
                    untuk membuat post pertama.
                </p>
            </div>

        @endforelse

        <br>

        {{ $posts->links() }}

    </x-card>

@endsection