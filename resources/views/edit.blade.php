@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">メモ編集</div>
    {{-- routeと書くと/store --}}
    <form class="card-body" action="{{ route('store') }}" method="POST">
        @csrf
        <div class="form-group">
            <textarea class="form-control" name="content" rows="3" placeholder="ここにメモを入力">{{$edit_memo['content']}}</textarea>
            {{-- <label for="floatingTextarea2">Comments</label> --}}
        </div>
        <button type="submit" class="btn btn-primary">更新</button>
    </form>
</div>

@endsection
