@extends('layouts.app')

@section('content')
    <!-- ルートとマッチしたコンポーネントがここへ描画されます -->
    <router-view :user_id="{{$user['user_id']}}" :posts="{{$posts}}"></router-view>
@endsection