@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">{{ __('Add Discussion') }}</div>
        <div class="card-body">
            <form method="POST" action="{{ route('discussions.store') }}">
                @csrf
                <div class="form-group">
                    <label for="discussion-name">Title</label>
                    <input name="title" value="" class="form-control" type="text" id="discussion-name">
                </div>
                <div class="form-group">
                    <label for="discussion-content">Content</label>
                    <textarea class="form-control" name="content" id="discussion-content" cols="30"
                              rows="10"></textarea>
                </div>
                <div class="form-group">
                    <label for="channel">Channel</label>
                    <select name="channel" id="channel" class="form-control">
                        @foreach($channels as $channel)
                            <option value="{{ $channel->id }}"> {{ $channel->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <div class="form-group">
                        <button class="form-control btn-block btn-success">Submit</button>
                    </div>
            </form>
        </div>
    </div>
@endsection
