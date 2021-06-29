@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">{{ $post->title }}</h1>                        
                        <p class="text-muted mb-0">
                            <em>
                                &ndash; {{ $post->user->name }}
                            </em>
                            {{ $post->created_at->format('d M Y') }}
                        </p>
                        <hr>
                        <div class="card-text">
                            {{ $post->body }}
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection
