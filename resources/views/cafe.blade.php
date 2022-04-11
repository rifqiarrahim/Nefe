@extends('layouts/template')

@section('container')

<div class="container">
    <div class="col">
        <img class="img-fluid" src="{{ asset('/img/DSC_0331 (Small).jpg') }}" alt="">
        <h2>{{$Cafe['name']}}</h2>
        <div class="row">
            <div class="col-md-6">
                <span class="material-icons-outlined">
                    star
                </span>
                {{$Cafe['rating']}}
                <h4>Rating</h4>
            </div>
            <div class="col-md-6">
                <span class="material-icons-outlined">
                    favorite
                </span>
                {{$Cafe['like']}}
                <h4>Likes</h4>
            </div>
        </div>
        <h3>Address</h3>
        <p>{{$Cafe['address']}}</p>
        <h3>Description</h3>
        <p>{{$Cafe['description']}}</p>
        <h3>Review</h3>
        @foreach($Cafe->review as $review)
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{$review->user['name']}}</h5>
                <p class="card-text">{{$review['comment']}}</p>
            </div>
        </div>
        @endforeach
        <form action="/cafe/{$Cafe['id']}" method="POST">
            @csrf
            <div class="mb-3">
                <input type="hidden" id="userId" name="user_id" value="{{auth()->user()->id}}">
                <input type="hidden" id="cafeId" name="cafe_id" value="{{$Cafe['id']}}">
                <input type="text" class="form-control @error('comment') is-invalid @enderror" id="commentLabel" name="comment" value="{{ old('comment')}}" placeholder="Add Comment...">
                @error('comment')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-success btn-lg"></i>Add Comment</button>
            </div>
        </form>
    </div>
</div>