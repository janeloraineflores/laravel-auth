@extends('layouts.app')

@section('page-title', $project->title)

@section('main-content')
<div class="container">
    <div class="row py-5">
        <div class="col-12 bg-light">
            <h1>
                {{ $project->title }}
            </h1>
        </div>


        <div class="card col-9 bg-light">
            <div class="card-body">
                <span class="card-text">
                    <strong>
                        Title:
                    </strong>
                    {{ $project->title }}
                </span>
                <br>
                <span class="card-text">
                    <strong>
                        Content:
                    </strong>
                    {{ $project->content }}
                </span>
            </div>
        </div>
    </div>
</div>
@endsection