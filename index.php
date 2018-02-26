<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Veebiteenus</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        <link rel="stylesheet" href="css/custom.css" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:500" rel="stylesheet">
    </head>
    <body>
        <div class="container container-relative flex-container centering">
            <div class="section-content">
                <h1 class="h1margin">Wunderground API veebiteenus</h1>
                <form class="form-horizontal" action="showdata.php" method="POST">
                    
                    <div class="form-group">
                        <div class="form-width">
                            <label class="col-sm-4 control-label">Asukoht: </label>
                            <div class="col-sm-8">
                                 <select class="form-control" name="linn">
                                    <option value="Tallinn">Tallinn</option>
                                    <option value="Tartu">Tartu</option>
                                    <option value="Narva">Narva</option>
                                    <option value="Parnu">Pärnu</option>
                                    <option value="Elva">Elva</option>
                                    <option value="Haapsalu">Haapsalu</option>
                                    <option value="Jogeva">Jõgeva</option>
                                    <option value="Johvi">Jõhvi</option>
                                    <option value="Kuressaare">Kuressaare</option>
                                    <option value="Kardla">Kärdla</option>
                                    <option value="Ote">Otepää</option>
                                    <option value="Paide">Paide</option>
                                    <option value="Polva">Põlva</option>
                                    <option value="Rakvere">Rakvere</option>
                                    <option value="Rapla">Rapla</option>
                                    <option value="Viljandi">Viljandi</option>
                                    <option value="Voru">Võru</option>
                                </select> 
                            </div>
                        </div>
                    </div>
                    <div class="centering">
                        <br><input class="buttons btn btn-primary" type="submit" value="Vaata"/>
                    </div>
                    
                </form>
                
            </div>
            <div class="footer centering">
                <p>
                    <a href="https://github.com/silverpiir" target="_blank"><img src="img/github.png" /></a>
                    <a href="https://www.linkedin.com/in/silver-piir-b1a149146/" target="_blank"><img src="img/linkedin-logo.png" /></a>
                    <a href="mailto:silverpiir@gmail.com"><img src="img/mail.png" /></a>
                </p>
                <p>2018 Silver Piir.</p>
            </div> 
        </div>        
    </body>
</html>
