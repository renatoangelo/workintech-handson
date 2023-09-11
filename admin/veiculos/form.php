<form method="POST" action="https://devinsider.com.br/WorkinTech - HandsOn/admin/store-real-estate" class="form-post p-5 create-form" >

<div class="card-header mt-4 bg-primary" >
    <h3 class="">Informações Básicas</h5>
</div>

<input type="hidden" name="_token" value="AvEaVgbeJB6AkG0qoZLFwN6ci0Pmsq6wQ9IL62eF">        <div class="card-body">

    <div class="row">

        <input type="hidden" name="imgs-base64" class="imgs-base64" value="">
        <div class="form-group col-4">
            <label class="form-label" for="selectImg">Clique para selecionar uma imagem</label>
            <input type="file" class="form-control" name="" id="selectImg" accept=".png, .jpeg, .jpg">
        </div>

        <div class="container col-md-8 row container-img"></div>

        <div class="form-group mt-4 col-md-6">
            <label for="titulo">Título:</label>
            <input 
                type="text" 
                class="form-control " 
                id="titulo" 
                name="titulo"
                placeholder="Digite o título desse imóvel"
                required
                maxlength="100"
                value=""
            >
        </div>

        <div class="form-group mt-4 col-md-6">
            <label for="slug">slug <span class="text-sm">(será a URL deste imóvel, Utilize '-' pra separar cada palavra)</span> :</label>
            <input 
                type="text" 
                name="slug"
                class="form-control " 
                id="slug"
                placeholder="Exemplo: imóvel-maringa-8-quartos"
                required
                minlength="5"
                maxlength="100"
                value=""
            >
            <span class="text-sm text-warning">Não utilize acento(s) e espaços</span>
        </div>

        <div class="form-group mt-4 col-md-4">
            <label for="reason">Finalidade:</label>
            <select name="finalidade" id="reason" class="form-control ">
                <option value="0"  selected >Residencial</option>
                <option value="1" >Comercial</option>
                <option value="2" >industrial</option>
            </select>
        </div>

        <div class="form-group mt-4 col-md-4">
            <label for="estateType">Tipo de imóvel:</label>
            <select name="tipoImovel" id="estateType" class="form-control ">
                <option value="apartamento" >Apartamento</option>
                <option value="casa" >Casa</option>
                <option value="chacara" >Chácara</option>
                <option value="terreno" >Terreno</option>
                <option value="kitnet" >Kitnet</option>
                <option value="flat" >Flat</option>
                <option value="lancamento" >Lançamento</option>
                <option value="empreendimento" >Empreendimento</option>
                <option value="comercial" >Comercial</option>
                <option value="industrial" >Industrial</option>
            </select>
        </div>

        <div class="for-group mt-4 col-md-2">
            <label for="">Fase</label>
            <select name="fase" id="faseRealEstate" class="form-control ">
                <option value="0" >Pronto</option>
                <option value="1" >Em construção</option>
            </select>
        </div>

</div>
<!-- /.card-body -->

<div class="card-footer mt-3">
    <button type="submit" class="btn btn-success">Cadastrar</button>
</div>

</form>