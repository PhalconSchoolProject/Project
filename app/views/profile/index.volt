

<?php
if( empty( $this->session->get('auth')))
    $this->response->redirect("login");
else{

    
}?>

<div class="alert alert-success"></div>
<div class="row"style="margin-top: 100px; padding-bottom 100px;">
    <a href="/profile/update" class="btn btn-primary">Change Your Information</a>
</div>
<div class="row"style="margin-top: 50px; padding-bottom 100px;">
    <table class="table table-bordered">
    <thead>
        <tr>
            <th>Image</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Adress</th>
        <th>Description</th>
        </tr>
    </thead>
    <tbody>
    <tr>
        <td> <img class="img-responsive center-block" 
            height="120px" width="120px;" style="border: 1px solid rgba(0, 0, 0, .25);border-radius: 50%;"
            src="data:image/jpg;base64,<?php echo $profile->getImageLien() ?>"></td>
    <td style="padding-top: 62.5px;"><?php echo $profile->nom ?></td>
    <td style="padding-top: 62.5px;"><?php echo $profile->prenom ?></td>
    <td style="padding-top: 62.5px;"><?php echo $profile->adress ?></td>
            <td style="padding-top: 62.5px;"><?php echo $profile->description ?></td>
            </tr>
            </tbody>
            </table>

            <div class="container">
                <div class="row">
                    <div class="col-md-6">

                    </div>
    </div>
        <div class="row">
                <div class="col-md-6" style="margin: 75px auto !important;">
                    <label for="">CV:</label>
                    <embed src="data:application/pdf;base64,<?php echo $profile->getCvLien() ?>" type="application/pdf" width="600px" height="600px"/>

                </div>
                </div>
                <div class="row">
                </div>
            </div>
            </div>

