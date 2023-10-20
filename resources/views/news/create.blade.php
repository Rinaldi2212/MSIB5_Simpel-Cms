@extends('layouts.partials.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Berita</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('news.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="title">Judul</label>
                                <input type="text" class="form-control" id="title" name="title">
                            </div>
                            <div class="form-group">
                                <label for="content">Isi Berita</label>
                                <textarea class="form-control" id="content" name="content" rows="5"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
