@extends('layouts.default')
@section('content')

<div class="content d-flex align-items-center justify-content-center"  style="width: 100%; height: 100%;">
  {{-- frase --}}
    <div class="title m-b-md" style="font-family: 'Nunito', sans-serif; font-weight: 200; ">
      <h2 class="text-center  text-break fs-2 fw-bold ">
        {!!nl2br('“Mais importante do que a obra de arte propriamente dita é o que ela vai gerar.
        A arte pode morrer; um quadro desaparecer.
        O que conta é a semente.”
        – Joan Miró')!!}
      </h2>
    </div>
</div>

@endsection