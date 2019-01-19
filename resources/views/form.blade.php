<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    


<form action="http://localhost/laravel/lar_tarefas/server_lar/public/api/amigo/1" method="PUT">

    {{ csrf_field() }}
    <div class="form-group">
      <label for=""></label>
      <input type="text" name="nome" id="" class="form-control" placeholder="" aria-describedby="helpId">
      <small id="helpId" class="text-muted">Help text</small>
    </div>
    <div class="form-group">
      <label for=""></label>
      <input type="text" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId">
      <small id="helpId" class="text-muted">Help text</small>
    </div>
    <div class="form-group">
      <label for=""></label>
      <input type="text" name="celular" id="" class="form-control" placeholder="" aria-describedby="helpId">
      <small id="helpId" class="text-muted">Help text</small>
    </div>
    <div class="form-group">
      <label for=""></label>
      <input type="text" name="codigo" id="" class="form-control" placeholder="" aria-describedby="helpId">
      <small id="helpId" class="text-muted">Help text</small>
    </div>

<button id="btn-sub" class="btn btn-primary" type="submit">Enviar</button>
</form>


    <script>
        form = document.querySelectorAll('form');
        const sub = document.querySelector('#btn-sub')

        sub.addEventListener('click', function(e){
            e.preventDefault()

            console.log(form)
            formData = new FormData(form[0])

            dados = {'nome':formData.get('nome'), 'email':formData.get('email'), 'celular':formData.get('celular'), 'codigo':formData.get('codigo'), '_token':formData.get('_token')}
           console.log(dados)

           fetch("http://localhost/laravel/lar_tarefas/server_lar/public/api/amigo/21", {
      headers: {
        /* "Content-Type": "application/json", */
        "Content-Type": "application/x-www-form-urlencoded",
        /* "Accept": "application/json", */
        "Accept": "application/application/x-www-form-urlencoded",
        "X-Requested-With": "XMLHttpRequest",
        "X-CSRF-Token": dados.token
      },
      method: "PUT",
      /* credentials: "same-origin", */
 /*      body: JSON.stringify({
        'nome':formData.get('nome'), 'email':formData.get('email'), 'celular':formData.get('celular'), 'codigo':formData.get('codigo'), '_token':formData.get('_token')
      }) */
      body: new URLSearchParams(dados)
      
    }).then((r)=>r.json())
    .then((json)=>{
        console.log(json)
    }).catch('erro')
     
           


        })
        
        </script>

</body>
</html>