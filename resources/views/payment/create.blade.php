@extends('layouts.app')

@section('template_title')
    Create Payment
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Payment</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('payments.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('payment.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
