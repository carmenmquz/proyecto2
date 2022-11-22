@extends('layouts.master')
@section('content')

<!-- Four -->
        <h3>Contact Me</h3>
        <p>Integer eu ante ornare amet commetus vestibulum blandit integer in curae ac faucibus integer non. Adipiscing cubilia elementum integer. Integer eu ante ornare amet commetus.</p>
        <form method="post" action="#">
            <div class="row gtr-uniform">
                <div class="col-6 col-12-xsmall"><input type="text" name="name" id="name" placeholder="Name" /></div>
                <div class="col-6 col-12-xsmall"><input type="email" name="email" id="email" placeholder="Email" /></div>
                <div class="col-12"><input type="text" name="subject" id="subject" placeholder="Subject" /></div>
                <div class="col-12"><textarea name="message" id="message" placeholder="Message" rows="6"></textarea></div>
                <div class="col-12">
                <ul class="actions">
                    <li><input type="submit" class="primary" value="Send Message" /></li>
                    <li><input type="reset" value="Reset Form" /></li>
                </ul>
            </div>
        </div>
    </form>

@stop
