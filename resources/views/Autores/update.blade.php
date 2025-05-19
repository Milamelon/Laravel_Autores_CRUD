<!-- Modal -->
<div class="modal fade" id="modal{{ $autor->codigo_autor }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5">Editar Autor</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        @if ($errors->any())
         <div class="alert alert-danger mt-3">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
         </div>
         @endif
        <form action="{{ route('autores.update', $autor->codigo_autor) }}" method="POST">
          @csrf
          @method('PUT')
          <table class="table table-borderless">
            <tr>
              <td><label for="codigo_autor" class="form-label">Código Autor:</label></td>
              <td><input type="text" id="codigo_autor" name="codigo_autor" value="{{ $autor->codigo_autor }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td><label for="nombre_autor" class="form-label">Nombre Autor:</label></td>
              <td><input type="text" id="nombre_autor" name="nombre_autor" value="{{ $autor->nombre_autor }}" class="form-control" required></td>
            </tr>
            <tr>
              <td><label for="nacionalidad" class="form-label">Nacionalidad:</label></td>
              <td><input type="text" id="nacionalidad" name="nacionalidad" value="{{ $autor->nacionalidad }}" class="form-control" required></td>
            </tr>
          </table>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Actualizar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>