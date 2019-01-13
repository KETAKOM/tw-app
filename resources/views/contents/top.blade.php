@extends('layouts.app')

@section('content')
    <!-- ルートとマッチしたコンポーネントがここへ描画されます -->
    <router-view :posts="{{$posts}}"></router-view>
@endsection