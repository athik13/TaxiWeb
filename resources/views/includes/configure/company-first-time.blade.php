<div class="offset-lg-1 col-lg-10 offset-xl-1 col-xl-10">
    <div class="alert alert-warning" role="alert">
        It looks like you have not completed the Basic Company Information, Complete the form below in order to start using this dashboard
    </div>
    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
        @if(Session::has('alert-' . $msg))
            <div class="alert alert-{{ $msg }}" role="alert">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                {{ Session::get('alert-' . $msg) }}
            </div>
        @endif
    @endforeach
    <hr>
    <form action="{{ route('company.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Company Name <span class="text-danger">(*Required)</span></label>
            <input id="name" name="name" placeholder="Enter the name of the company" type="text" value="{{ old('name') }}" required="required" class="form-control">
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="gst_tin">GST Tin</label>
                    <input id="gst_tin" name="gst_tin" placeholder="Enter the GST TIn of the company" value="{{ old('gst_tin') }}" type="text" class="form-control">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="registration_number">Registration Number</label>
                    <input id="registration_number" name="registration_number" type="text" value="{{ old('registration_number') }}" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input id="address" name="address" placeholder="Enter the address of the company" type="text" value="{{ old('address') }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="island_city">Island / City</label>
            <input id="island_city" name="island_city" type="text" value="{{ old('island_city') }}" class="form-control">
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="telephone">Telephone</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">+960</div>
                        </div>
                        <input id="telephone" name="telephone" type="text" value="{{ old('telephone') }}" class="form-control">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="fax">Fax</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">+960</div>
                        </div>
                        <input id="fax" name="fax" type="text" value="{{ old('fax') }}" class="form-control">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="mobile">Mobile number</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">+960</div>
                        </div>
                        <input id="mobile" name="mobile" type="text" value="{{ old('mobile') }}" class="form-control">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="email">Company Email</label>
                    <input id="email" name="email" type="email" value="{{ old('email') }}" class="form-control">
                </div>
            </div>
        </div>

        <hr>

        <div class="form-group">
            <label for="owner_name">Owner Name <span class="text-danger">(*Required)</span></label>
            <input id="owner_name" name="owner_name" placeholder="Company owner's name" type="text" value="{{ old('owner_name') }}" class="form-control" required="required">
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="owner_mobile">Owner Mobile <span class="text-danger">(*Required)</span></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">+960</div>
                        </div>
                        <input id="owner_mobile" name="owner_mobile" placeholder="Company owner's mobile number" type="text" value="{{ old('owner_mobile') }}" class="form-control" required="required">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="owner_email">Owner Email <span class="text-danger">(*Required)</span></label>
                    <input id="owner_email" name="owner_email" placeholder="Company owner's email" type="email" value="{{ old('owner_email') }}" class="form-control" required="required">
                </div>
            </div>
        </div>
        <div class="form-group">
            <button name="submit" type="submit" class="btn btn-info btn-block btn-lg" data-toggle="click-ripple">Submit</button>
        </div>
    </form>
</div>