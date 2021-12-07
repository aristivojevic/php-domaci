<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Planerko</title>
</head>
<body>
    <div class="form-bg ">
        <div class="container form pt-0" style="ba">
            <form action="">
                <div class="flex-wrapper">
                    <div class="p-5 pb-1" style="flex:1">
                        <div style="flex:1">
                            <label for="naslov">Naslov:</label>
                            <input class="form-control" name="naslov" type="text">
                        </div>
                        <div style="flex:1">
                            <label for="opis">Opis:</label>
                            <textarea class="form-control" name="opis" rows="4" cols="50"></textarea>
                        </div>
                    </div>
                   <div class="p-5 pb-1" style="flex:1">
                        <div style="flex:1">
                            <label for="lokacija">Lokacija:</label>
                            <input class="form-control" name="lokacija" type="text">
                        </div>
                        <div style="flex:1">
                            <label for="vremeod">Vreme od:</label>
                            <input class="form-control" name="vremeod" type="datetime-local">
                        </div>
                        <div style="flex:1">
                            <label for="vremedo">Vreme do:</label>
                            <input class="form-control" name="vremedo" type="datetime-local">
                        </div>
                    </div>
                    <div class="break"></div>
                    <input type="submit" class="btn btn-primary mb-4" style="margin-left:3rem" value="Potvrdi">
                </div>
            </form>
        </div>
    </div>
    <div class="container">
        <h2 class="text-center text-white mt-5">Planerko</h2>
        <div id="task-container">
            <div class="taks-wrapper p-3 flex-wrapper">
                <div style="flex:2">
                    <button class="btn btn-primary">Dodaj novi dogadjaj</button>
                </div>
                <div style="flex:1">
                    <form action="">
                        <label style="margin-right:10px" for="pretraga">Pretraga</label>
                        <input class="ml-1" name="pretraga" type="text">
                    </form>
                </div>
            </div>
            <div class="task-wrapper flex-wrapper border-top text-center" style="font-weight: bold;">
                <div style="flex:1">Naslov</div>
                <div style="flex:2; padding-left:10px; padding-right:10px;">Opis</div>
                <div style="flex:1">Lokacija</div>
                <div style="flex:1">Vreme od/do</div>
                <div style="flex:1">Kreirao</div>
                <div style="flex:1">Uredi/Obrisi</div>

            </div>
            <div class="task-wrapper flex-wrapper align-items-center">
                <div class="text-center" style="flex:1">Fon hakaton</div>
                <div class="opis" style="flex:2; padding-left:10px; padding-right:10px;">Fon hakaton je takmicenje u programiranju u trajanju od 24h</div>
                <div class="text-center" style="flex:1">Jove Ilica 124</div>
                <div class="text-center" style="flex:1">
                    <div class="flex-row">
                        <div class="pb-3">23.1.2010 10:00</div>
                        <div>24.1.2010 11:00</div>
                    </div>
                </div>
                <div class="text-center" style="flex:1">Andjela</div>
                <div class="text-center" style="flex:1">
                    <div>
                        <button class="btn btn-primary">Uredi</button>
                        <div class="break"></div>
                        <button class="btn btn-danger">Obrisi</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>