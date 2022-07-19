<form method="post" action="{{$action}}">
    @csrf
    @isset($evid_descri)
        @method('PUT')
    @endisset
    <div class="mb-3">
        <label for="evid_descri" class="form-label">Descrição</label>
        <input  type="text" 
                class="form-control" 
                @isset($evid_descri)value="{{$evid_descri}}" @endisset 
                name="evid_descri" 
                id="evid_descri"/>
    </div>    
        <label for="tipoEvid_id" class="form-label">Tipo de evidencia</label>
        <input  type="text" 
                class="form-control" 
                name="tipoEvid_id" 
                id="tipoEvid_id" 
                @isset($tipoEvid_id)value="{{$tipoEvid_id}}" @endisset />
        <button class="btn btn-primary" style="margin-top: 10px;">Gravar</button>
    
</form>