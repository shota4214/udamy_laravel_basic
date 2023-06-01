<!-- dd($values) ddはdie + var_dumpで処理を止めて内容を確認できる -->

test<br>

@foreach($values as $value)
{{ $value->id }}<br>
{{ $value->text }}<br>


@endforeach