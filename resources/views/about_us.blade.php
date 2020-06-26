{{-- blade教學 --}}
{{-- https://laravel.com/docs/7.x/blade --}}
{{-- https://ithelp.ithome.com.tw/articles/10214159 --}}

{{-- 引用模板 --}}
@extends('layouts.app')

{{-- 填入空缺內容 --}}
@section('content')
<p>嗨！大家好！我們是{{$name}}</p>
@endsection


{{-- if、switch、for

@if (count($records) === 1)
	有一筆資料!
@elseif (count($records) > 1)
	有多筆資料!
@else
	沒有資料!
@endif

@switch(count($records))
	@case(1)
		有一筆資料!
		@break

	@case(2)
		有二筆資料!
		@break

	@default
		有資料
@endswitch

@for ($i = 0; $i < 10; $i++)
	現在迴圈跑到 {{ $i }}
@endfor

@foreach ($users as $user)
	現在 user id 為 {{ $user->id }}
@endforeach

@while (true)
	無窮迴圈
@endwhile

--}}
