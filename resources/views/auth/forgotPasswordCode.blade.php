@extends('layouts.frontend')
@section('front')
    <section class="section-padding bg-dark inner-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="mt-0 mb-3 text-white">Forgot Password Code</h1>
                    <div class="breadcrumbs">
                        <p class="mb-0 text-white"><a class="text-white" href="#">Home</a>  /  <span class="text-white">Forgot Password Code</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Inner Header -->

    <!-- Contact Me -->
    <section class="section-padding text-center  bg-white">
        <div class="container text-center" style="margin: 0 auto">
            <div class="row text-left">
                <form class="col-lg-12 col-md-12" action="{{route('forgot.password.code.save')}}" method="post" name="sentMessage" id="contactForm" novalidate>
                    @csrf
                    <div class="row">
                        <div class="control-group form-group col-md-6">
                            <label>Code <span class="text-danger">*</span></label>
                            <div class="controls">
                                <input type="text" name="code" placeholder="Enter Code" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                            </div>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-success">Submit</button>
                    <br>
                    <br>

                </form>
            </div>
        </div>
    </section>

@stop
