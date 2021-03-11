<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        .btn-send {
            font-weight: 300;
            text-transform: uppercase;
            letter-spacing: 0.2em;
            width: 100%;
            margin-left: 3px
        }
    </style>
    <title>Envio de currículo</title>
</head>
<body>
    <div class="container"> 
    <div class=" text-center mt-5 ">
        <h1>Enviar currículo</h1>
    </div>
    <div class="row ">
        <div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">
                    <div class="container">
                        @if(isset($errors) && count($errors)>0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $erro)
                                    <p>{{$erro}}</p>
                                @endforeach
                            </div>
                        @endif
                        <form method="POST" action="{{route('curriculum.store')}}" enctype="multipart/form-data">
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group"> 
                                            <label for="form_name">Nome *</label> 
                                            <input id="form_name" type="text" name="name" class="form-control" required="required"> 
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> 
                                            <label for="form_email">Email *</label> 
                                            <input id="form_email" type="email" name="email" class="form-control" required="required"> 
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> 
                                            <label for="form_phone">Telefone *</label> 
                                            <input id="form_phone" type="text" name="phone" class="form-control" maxlength="11" required="required" placeholder="Somente números"> 
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> 
                                            <label for="form_job">Cargo desejado *</label> 
                                            <input id="form_job" type="text" name="job" class="form-control" required="required"> 
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> 
                                            <div class="form-group"> 
                                                <label for="form_schooling">Escolaridade *</label> 
                                                <select id="form_schooling" name="schooling" class="form-control" required="required">
                                                    <option value="" selected disabled>--Selecione sua escolaridade--</option>
                                                    <option value="fundamental incompleto">Ensino fundamental incompleto</option>
                                                    <option value="fundamental completo">Ensino fundamental completo</option>
                                                    <option value="médio incompleto">Ensino médio incompleto</option>
                                                    <option value="médio completo">Ensino médio completo</option>
                                                    <option value="Graduação incompleto">Graduação incompleto</option>
                                                    <option value="Graduação completo">Graduação completo</option>
                                                    <option value="Pós-graduação incompleto">Pós-graduação incompleto</option>
                                                    <option value="Pós-graduação completo">Pós-graduação completo</option>
                                                    <option value="Mestrado incompleto">Mestrado incompleto</option>
                                                    <option value="Mestrado completo">Mestrado completo</option>
                                                </select> 
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="col-md-12">
                                        <div class="form-group"> 
                                            <label for="form_message">Observações</label> 
                                            <textarea id="form_message" name="message" class="form-control" rows="4"></textarea> 
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group"> 
                                            <label for="form_curriculum">Currículo atualizado *</label> 
                                            <input id="form_curriculum" type="file" accept=".doc,.docx,.pdf" name="curriculum" class="form-control" required="required"> 
                                        </div>
                                    </div>
                                    
                                    @csrf
                                    <div class="col mt-2"> 
                                        <input type="submit" class="btn btn-success btn-send pt-2" value="Enviar currículo"> 
                                    </div>
                                
                                </div>
                        </form>
                    </div>
                </div>
            </div> <!-- /.8 -->
        </div> <!-- /.row-->
    </div>
</div>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>