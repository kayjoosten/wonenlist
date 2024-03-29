<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>creer list items</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header text-center font-weight-bold">
                    Maak hier nieuwe list items aan.
                </div>
                <div class="card-body">
                    <form name="items" id="items" method="post" action="/items">
                        @csrf
                        <div class="form-group">
                            <label for="listitem">Item</label>
                            <input type="text" id="listitem" name="listitem" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label for="url">Url</label>
                            <input type="text" id="url" name="url" class="form-control">
                        </div>
                        <input type="hidden" id="status" name="status" value="0">
                        <button type="submit" class="btn btn-primary">Verstuur</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
