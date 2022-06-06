@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">List comment of {{ $user->name }}</div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                @php $commentOfUser = true @endphp
                                @include('pages.comment.list', compact('comments', 'commentOfUser'))
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection