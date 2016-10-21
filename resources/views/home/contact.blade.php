@extends('layouts.master')

@section('title', 'Contact')

@section('content')

    <h2>Contact</h2>

    <div class="row">

        <div class="col-sm-4">
            <div class="well">
                <blockquote>
                    <i class="fa fa-quote-left"></i>
                    Scott is one of the smartest programmers I have ever worked with. He has a very good sense of structure and has helped me develop some of the best work I have done in my career. I highly recommend Scott as a PHP programmer.
                    <i class="fa fa-quote-right"></i>
                    <footer class="text-right">Kiel J., Universal Laser Systems</footer>
                </blockquote>

                <blockquote>
                    <i class="fa fa-quote-left"></i>
                    Scott has great attention to detail. He was always willing to go the extra mile to make sure projects were completed on time, whether that meant staying later or coming in early. It was a great pleasure to work with Scott on the various web design projects.
                    <i class="fa fa-quote-right"></i>
                    <footer class="text-right">Adrian M., fellow student at AI</footer>
                </blockquote>
            </div>
        </div>

        <div class="col-sm-8">

            <h1>Contact Us</h1>

            <p>We'd like to hear from you.  Your feedback is important to us.  Feel free to drop us a line below, with whatever questions you may have.  We'll get back to you in 2-3 business days, if not sooner.</p>

            {!! Form::open(['url' => 'contact', 'method' => 'POST']) !!}

            {!! Form::textField('name', 'Name:', Input::old('name')) !!}

            {!! Form::textField('email', 'Email Address:', Input::old('email')) !!}

            {!! Form::textField('phone', 'Phone:', Input::old('phone')) !!}

            {!! Form::textBox('comments', 'Comments/Question:', Input::old('comments')) !!}

            {!! Form::submitButton('Send Email', 'primary') !!}

            {!! Form::close() !!}

        </div>


    </div>
@stop