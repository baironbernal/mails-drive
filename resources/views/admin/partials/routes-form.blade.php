 	
<!--<textarea class="ckeditor" name="editor1" id="editor1" rows="10" cols="80">
    Este es el textarea que es modificado por la clase ckeditor
</textarea>-->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    
    @if(Request::is('admin/home'))
      <li class="breadcrumb-item"><a href="#">Home</a></li>
    @else
      <li class="breadcrumb-item active" aria-current="page">Data</li>
    @endif
    
    
  </ol>
</nav>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Crear carpeta</button>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear carpeta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('folder.store') }}" enctype="multipart/form-data" method="POST">
      {{ csrf_field() }}
      <div class="modal-body">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nombre de la carpeta:</label>
            <input type="text" class="form-control" id="folder" name="foldername">
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Send message</button>
      </div>
      </form>
    </div>
  </div>
</div>


