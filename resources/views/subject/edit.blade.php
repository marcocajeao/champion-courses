@extends('layouts.app')

@section('template_title')
    Update Subject
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-sm-8 offset-sm-2">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Subject</span>
                    </div>
                    <div class="card-body">
                        <form id="form" method="POST" action="{{ route('subjects.update', $subject->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('subject.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
