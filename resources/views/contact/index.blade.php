@extends('app')

@section('content')

<div  class="container-fluid">
    <div class="row">
        <iframe class="col-md-6" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/sport-gps/">swimming watch</a>
        </iframe>
    

        <form class="col-md-6">
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="name">First name</label>
                    <input type="text" class="form-control" id="name" placeholder="First name">
                </div>
                <div class="form-group col-md-6">
                    <label for="surname">Surname</label>
                    <input type="text" class="form-control" id="surname" placeholder="Surname">
                </div>            
            </div>
            <div class="row">
                <div class="form-group">
                    <label for="mail">Email</label>
                    <input type="email" class="form-control" id="mail" placeholder="Email">
                </div>
            </div>
            <div class="row">
                <div class="input-group col-md-6">
                    <label class="col-md-12" for="country">Country</label>
                    <select class="form-control" id="country">
                      <option selected>Choose...</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label for="message">Your message to us:</label>
                    <textarea name="message" class="form-control" rows="5" cols="30"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-dark">Send</button>
        </form>
    </div>
</div>




@endsection