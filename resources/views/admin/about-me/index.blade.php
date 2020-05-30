@extends('layouts.admin')

@section('styles')
<script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>
@endsection

@section('contents')
	<div class="row clearfix">
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h1>
                        Edit About Me
                    </h1>
                </div>
                <div class="body">
                    <!-- <form action="{{ url('admin/my-profile') }}" id="myForm" class="willSubmit" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('put') }} -->
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="name" class="form-control" form="willSubmit" value="{{ $myAbout->name }}">
                                <label class="form-label">Nama</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="email" class="form-control" form="willSubmit" value="{{ $myAbout->email }}">
                                <label class="form-label">Email</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="address" class="form-control" form="willSubmit" value="{{ $myAbout->address }}">
                                <label class="form-label">Address</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea name="description" class="my-editor" form="willSubmit" rows="20">{{ $myAbout->description }}</textarea>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="study" class="form-control" form="willSubmit" value="{{ $myAbout->study }}">
                                <label class="form-label">Study</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="university" class="form-control" form="willSubmit" value="{{ $myAbout->university }}">
                                <label class="form-label">University</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="hp" class="form-control" form="willSubmit" value="{{ $myAbout->hp }}">
                                <label class="form-label">Handphone</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                @if(isset($myAbout->photo_profile))
                                    <br>
                                    <img class="img-responsive" style="max-width: 30vw; max-height: 30vh;" src="{{ url('mybio/'.$myAbout->photo_profile) }}">
                                @endif
                                <input type="file" name="photo_profile" class="form-control" form="willSubmit">
                            </div>
                        </div>

                    <!-- </form> -->
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
              		<form action="{{ url('admin/about-me') }}" id="willSubmit" method="POST" enctype="multipart/form-data">
              			{{ csrf_field() }}
                    {{ method_field('put') }}
                    <p>Fokus Programming</p>
	              		<div class="form-group form-float">	
	              			<div class="form-line">
	              				<input type="text" name="line" class="form-control" value="{{ $myAbout->line }}">
	              				<label class="form-label">Line</label>
	              			</div>
	              		</div>
	              		<div class="form-group form-float">	
	              			<div class="form-line">
	              				<input type="text" name="ig" class="form-control" value="{{ $myAbout->ig }}">
	              				<label class="form-label">Instagram</label>
	              			</div>
	              		</div>
	              		<div class="form-group form-float">	
	              			<div class="form-line">
	              				<input type="text" name="fb" class="form-control" value="{{ $myAbout->fb }}">
	              				<label class="form-label">Facebook</label>
	              			</div>
	              		</div>
	              		<div class="form-group form-float">	
	              			<div class="form-line">
	              				<input type="text" name="twitter" class="form-control" value="{{ $myAbout->twitter }}">
	              				<label class="form-label">Twitter</label>
	              			</div>
	              		</div>
                    <div class="form-group form-float"> 
                      <div class="form-line">
                        <input type="text" name="yt" class="form-control" value="{{ $myAbout->yt }}">
                        <label class="form-label">Youtube</label>
                      </div>
                    </div>
                    <div class="form-group form-float"> 
                      <div class="form-line">
                        <input type="text" name="wa" class="form-control" value="{{ $myAbout->wa }}">
                        <label class="form-label">Whatsapp</label>
                      </div>
                    </div>
                    
	                    <button type="submit" class="btn btn-primary m-t-15 waves-effect">Update</button>
              		</form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
  var editor_config = {
    path_absolute : "{{ url('/').'/' }}",
    selector: "textarea.my-editor",
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }
  };

  tinymce.init(editor_config);
</script>
@endsection
