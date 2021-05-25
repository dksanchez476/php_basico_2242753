<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.css" integrity="sha512-mG7Xo6XLlQ13JGPQLgLxI7bz8QlErrsE9rYQDRgF+6AlQHm9Tn5bh/vaIKxBmM9mULPC6yizAhEmKyGgNHCIvg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{url('buscar_termino')    }}" class="form-horizontal">
        @csrf
        <fieldset>

        <!-- Form Name -->
        <legend>Realizar busquedas en varios motores</legend>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">1.Ingrese termino de busqueda</label>
          <div class="col-md-5">
          <input id="textinput" name="termino" type="text" placeholder="placeholder" class="form-control input-md">
          <span class="help-block">help</span>
          </div>
        </div>

        <!-- Multiple Radios -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="radios">Seleccione el motor de buscador </label>
          <div class="col-md-4">
          <div class="radio">
            <label for="radios-0">
              <input type="radio" name="motores" id="radios-0" value="1" checked="checked">
              google
            </label>
            </div>
          <div class="radio">
            <label for="radios-1">
              <input type="radio" name="motores" id="radios-1" value="2">
              bing
            </label>
            </div>
                <div class="radio">
                <label for="radios-1">
                  <input type="radio" name="motores" id="radios-2" value="3">
                  yandex
                </label>
                </div>
                <div class="radio">
                    <label for="radios-1">
                      <input type="radio" name="motores" id="radios-3" value="4">
                      yahoo
                    </label>
                    </div>
                 <div class="radio">
                        <label for="radios-1">
                          <input type="radio" name="motores" id="radios-4" value="5">
                          naver
                        </label>
                        </div>
                  <div class="radio">
                        <label for="radios-1">
                         <input type="radio" name="motores" id="radios-5" value="6">
                              ecosia
                            </label>
                            </div>
                   <div class="radio">
                          <label for="radios-1">
                           <input type="radio" name="motores" id="radios-6" value="7">
                                 youtube
                         </label>
                         </div>
                    <div class="radio">
                        <label for="radios-1">
                        <input type="radio" name="motores" id="radios-7" value="8">
                        seznam
                           </label>
                           </div>
                    <div class="radio">
                        <label for="radios-1">
                        <input type="radio" name="motores" id="radios-8" value="9">
                           Qwant
                         </label>
                        </div>
                    <div class="radio">
                         <label for="radios-1">
                        <input type="radio" name="motores" id="radios-9" value="10">
                            Daum
                            </label>
                            </div>
          </div>
        </div>

         <!-- Button -->
         <div class="form-group">
            <label class="col-md-4 control-label" for="singlebutton"></label>
            <div class="col-md-4">
              <button id="singlebutton" name="singlebutton" class="btn btn-info">buscar</button>
            </div>
          </div>

        </fieldset>
        </form>

</body>
</html>
