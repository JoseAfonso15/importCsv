@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Tabela de preço') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="mb-4 d-flex justify-content-between">
                        @livewire('export-price')
                        @livewire('import-price')
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>from_postcode</th>
                                <th>to_postcode</th>
                                <th>from_weight</th>
                                <th>to_weight</th>
                                <th>cost</th>
                                <th>cost1</th>
                                <th>cost2</th>
                                <th>cost3</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tablePrice as $value)
                            <tr>
                                <td>{{ $value->from_postcode }}</td>
                                <td>{{ $value->to_postcode }}</td>
                                <td>{{ $value->from_weight }}</td>
                                <td>{{ $value->to_weight }}</td>
                                <td>{{ $value->cost }}</td>
                                <td>{{ $value->cost1 }}</td>
                                <td>{{ $value->cost2 }}</td>
                                <td>{{ $value->cost3 }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $tablePrice->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
