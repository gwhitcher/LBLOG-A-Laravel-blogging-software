@extends((isset($layout)) ? $layout : 'layouts.core')

@section('header')
@parent
@stop

@section('sidebar')
@parent
@stop

@section('content')
<div id="content_container">
<h1>Contact</h1>
{{ Form:: open(array('url' => 'contact_request')) }} <!--contact_request is a router from Route class-->

            <ul class="errors">
                @foreach($errors->all('<li>:message</li>') as $message)
                {{ $message }}
                @endforeach
            </ul>

            {{ Form:: label ('first_name', 'First Name*' )}}
            {{ Form:: text ('first_name', '' )}}

            {{ Form:: label ('last_name', 'Last Name*' )}}
            {{ Form:: text ('last_name', '' )}}

            {{ Form:: label ('phone_number', 'Phone Number' )}}
            {{ Form:: text ('phone_number', '', array('placeholder' => '1-781-XXX-XXXX')) }}

            {{ Form:: label ('email', 'E-mail Address*') }}
            {{ Form:: email ('email', '', array('placeholder' => 'me@example.com')) }}

            {{ Form:: label ('message', 'Message*' )}}
            {{ Form:: textarea ('message', '')}}
            
            <div class="floatleft" style="clear: both;">
            {{ HTML::image(Captcha::img(), 'Captcha image') }}<br />
            {{ Form:: label ('captcha', 'CAPTCHA*' )}}
            {{ Form:: text ('captcha', '' )}}
            </div>
            
            {{ Form::submit('Send', array('class' => '')) }}

            {{ Form:: close() }}
</div>
@stop

@section('footer')
@parent
@stop