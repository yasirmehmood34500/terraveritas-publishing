@extends('layouts.journal')
@section('content')
    <div class="bg-white mt-3">
        <!-- Artilces -->
        <div class="m-2 p-2">
            <h2 class="mb-3">Journal Imprint</h2>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped">
                        @foreach ($imprint as $item)
                            <tr>
                                <th>{{ $item->field }}</th>
                                <td>{!! $item->text !!}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
