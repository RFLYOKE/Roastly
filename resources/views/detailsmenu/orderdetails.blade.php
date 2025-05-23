@extends('layouts.detailsOrder')

@section('content')
    @section('nameMenu', 'Hazelnut Latte')
    @section('price', 'Rp 25.000')
    @section('image')
        <img src="{{ asset('img/coffeeTest.png') }}" alt="" class="w-full">
    @endsection
    @section('description', 'Hazelnut Latte adalah minuman kopi yang memadukan espresso dengan susu yang di-steam dan sirup hazelnut. Minuman ini menawarkan cita rasa kopi yang kaya dengan sentuhan manis dan aroma kacang hazelnut yang khas.')
@endsection