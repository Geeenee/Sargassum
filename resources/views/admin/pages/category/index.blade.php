@extends('admin.layout.base')

@section('title', 'Category')

@section('content')

<div class="w-full py-5 md:py-0">
    <livewire:category.category-table />
</div>
@push('script')

@endpush

@endsection
