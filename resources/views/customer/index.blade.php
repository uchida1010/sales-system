@extends('layouts.app')

@section('title')
HOME|販売管理システム
@endsection

@section('content')
<div class="main-container customer-container">
    <div class="page-title">
        <h2>取引先マスタ</h2>
    </div>

    <div class="search-wrap">
        <div class="search-box">
            <div class="search-text">
                <h3>検索条件</h3>
            </div>
            <div class="search-form">
                <form action="{{url('sales-system/customer')}}" method="get">
                    <div class="search-flex">
                        <div class="search-item">
                            会社名：<input type="text" name="company" value="{{ $company }}" placeholder="会社名を入力">
                        </div>
                        <div class="search-item">
                            担当者名：<input type="text" name="name" value="{{ $name }}" placeholder="担当者名を入力">
                        </div>
                    </div>
                    <div class="search-flex">
                        <div class="search-item">
                            住所：<input type="text" name="address" value="{{ $address }}" placeholder="住所を入力">
                        </div>
                        <div class="search-item">
                            連絡先：<input type="text" name="phone" value="{{ $phone }}" placeholder="電話番号を入力">
                        </div>
                        <div class="search-item">
                            備考：<input type="text" name="remarks" value="{{ $remarks }}" placeholder="キーワードを入力">
                        </div>
                    </div>
                    <div class="search-flex search-item">
                    <a href="{{ url('sales-system/customer')}}" class="clear-btn">クリア</a>               
                   <input type="submit" value="検索" class="btn btn-info btn-search">
                    </div> 
                </form>
            </div>
        </div>
    </div>
    
    <a href="{{ url('sales-system/customer/create') }}" class="btn btn-success">新規作成</a>
    <div class="table-wrap">
        <table class="table">
            <thead>
                <tr>
                    <th>編集</th>
                    <th>No</th>
                    <th>会社名</th>
                    <th>顧客名</th>
                    <th>住所</th>
                    <th>備考</th>
                    <th>担当者</th>
                    <th>入力者</th>
                </tr>

            </thead>
            <tbody>
            @foreach ($customers as $customer)
            <tr>
                <td><a class="btn btn-primary" href="{{ route('customer.edit', $customer->id) }}">編集</a></td>
                <td>{{ $customer->id }}</td>
                <td>{{ $customer->company }}</td>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->address }}</td>
                <td>{{ $customer->remarks }}</td>
                <td>{{ $customer->personInCharge->name }}</td>
                <td>{{ $customer->user->name }}</td>
                </tr>
            @endforeach
            </tbody>

        </table>
    </div>
    <div class="pagination-links">
    {{$customers->appends(request()->query())->links()}}
    </div>
</div>
@endsection