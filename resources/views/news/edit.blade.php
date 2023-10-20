@extends('layouts.partials.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit Berita</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('news.update', $news->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="title">Judul</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ $news->title }}">
                            </div>
                            <div class="form-group">
                                <label for="content">Isi Berita</label>
                                <textarea class="form-control" id="content" name="content" rows="5">{{ $news->content }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
