@extends('layouts.admin')

@section('contents')
	<div class="row clearfix">
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h1>
                        Edit My Profile
                    </h1>
                </div>
                <div class="body">
                    <!-- <form action="{{ url('admin/my-profile') }}" id="myForm" class="willSubmit" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('put') }} -->
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="name" class="form-control" form="willSubmit" value="{{ $myBio->name }}">
                                <label class="form-label">Nama</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="born" class="form-control" form="willSubmit" value="{{ $myBio->born }}">
                                <label class="form-label">Tanggal Lahir</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="status" class="form-control" form="willSubmit" value="{{ $myBio->status }}">
                                <label class="form-label">Status</label>
                            </div>
                        </div>
                        
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="work_at" class="form-control" form="willSubmit" value="{{ $myBio->work_at }}">
                                <label class="form-label">Pekerjaan</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="street" class="form-control" form="willSubmit" value="{{ $myBio->street }}">
                                <label class="form-label">Nama Jalan ex: Jalan Dukuh RT03</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="address" class="form-control" form="willSubmit" value="{{ $myBio->address }}">
                                <label class="form-label">Alamat ex: Kecamatan Cimareme</label>
                            </div>
                        </div>
                        
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="email" class="form-control" form="willSubmit" value="{{ $myBio->email }}">
                                <label class="form-label">Email</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="handphone" class="form-control" form="willSubmit" value="{{ $myBio->handphone }}">
                                <label class="form-label">Handphone</label>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label>Photo Profile</label>
                            @if(isset($myBio->photo_profile))
                                <br>
                                <img class="img-responsive" style="max-width: 30vw; max-height: 30vh;" src="{{ url('mybio/'.$myBio->photo_profile) }}">
                            @endif
                            <input type="file" name="photo_profile" class="form-control" form="willSubmit" value="">
                            <br />
                            <label>Photo Background</label>
                            @if(isset($myBio->photo_background))
                                <br>
                                <img class="img-responsive" style="max-width: 30vw; max-height: 30vh;" src="{{ url('mybio/'.$myBio->photo_background) }}">
                            @endif
                            <input type="file" name="photo_background" class="form-control" form="willSubmit" value="">
                        </div>

                    <!-- </form> -->
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
              		<p>Sosmed = </p>
              		<form action="{{ url('admin/my-profile') }}" id="willSubmit" method="POST" enctype="multipart/form-data">
              			{{ csrf_field() }}
                    	{{ method_field('put') }}
	              		<div class="form-group form-float">	
	              			<div class="form-line">
	              				<input type="text" name="ig" class="form-control" value="{{ $myBio->ig }}">
	              				<label class="form-label">Instagram</label>
	              			</div>
	              		</div>
                    <div class="form-group form-float"> 
                      <div class="form-line">
                        <input type="text" name="fb" class="form-control" value="{{ $myBio->fb }}">
                        <label class="form-label">Facebook</label>
                      </div>
                    </div>
                    <div class="form-group form-float"> 
                      <div class="form-line">
                        <input type="text" name="in" class="form-control" value="{{ $myBio->in }}">
                        <label class="form-label">Linked In</label>
                      </div>
                    </div>
                    <div class="form-group form-float"> 
                      <div class="form-line">
                        <input type="text" name="twitter" class="form-control" value="{{ $myBio->twitter }}">
                        <label class="form-label">Twitter</label>
                      </div>
                    </div>
                    <div class="form-group form-float"> 
                      <div class="form-line">
                        <input type="text" name="github" class="form-control" value="{{ $myBio->github }}">
                        <label class="form-label">Github</label>
                      </div>
                    </div>
	                    <button type="submit" class="btn btn-primary m-t-15 waves-effect">Update</button>
              		</form>
                </div>
            </div>
        </div>
    </div>
@endsection
