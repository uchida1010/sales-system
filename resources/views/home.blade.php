@extends('layouts.app')

@section('title')
 HOME|販売管理システム
@endsection

@section('content')
<div class="home-container main-container">
    <div class="title">
        <h2>Menu</h2>
    </div>

    <nav class="home-menu-container">
        <ul class="home-menu-list">
            <li class="menu-item"><a href="{{ url('sales-system/customer')  }}" class="menu-anchor">取引先マスタ</a></li>
            <li class="menu-item"><a href="#" class="menu-anchor">実績</a></li>
            <li class="menu-item"><a href="#" class="menu-anchor">在庫表</a></li>
        </ul>
    </nav>
</div>
@endsection