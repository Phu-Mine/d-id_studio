@extends('layouts.home')

@section('title', config('constants.PAGE_TITLES.common.home_page'))

@section('content')
    
@endsection

@section('extra_scripts')
    {{-- Code here --}}
    <script src="/js/home_page.js" defer></script>
    <script>
        const __headerMenu = Object.values(@json($_headerMenu));
        const __tabCurent = '{{ $tabCurent }}'
    </script>

@endsection