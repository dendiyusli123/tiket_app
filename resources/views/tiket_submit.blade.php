@extends(('master')
@section('judul', 'Kontak')

@section('konten')
    <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">
            <form class="form-horizontal">
                <fieldset>
                    <legend>Submit tiket baru</legend>
                    <div class="form-group">
                        <label for="judul" class="col-lg-2 control-label">Judul</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="judul" placeholder="Judul">    
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="konten" class="col-lg-2 control-label">Konten</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" id="konten" rows="3"></textarea>
                            <span class="help-block">Tanyakan pada kami</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button class="btn btn-default">Batal</button>
                            <button type="submit" class="btn btn-primary">Submit</button>    
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection