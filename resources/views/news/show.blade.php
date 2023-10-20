@extends('layouts.partials.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ $news->title }}</h3>
                    </div>
                    <div class="card-body">
                        <p><strong>Tanggal Dibuat:</strong> {{ $news->created_at->format('d/m/Y') }}</p>
                        <p>{{ $news->content }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
