<div class="row">
    <table class="table table-bordered">
    <thead>
        <tr>
            <th>Id</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Adress</th>
        <th>Image Of Lien</th>
        <th>Cv Of Lien</th>
        <th>Description</th>

            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    <tr>
        <td><?php echo $profil->id ?></td>
    <td><?php echo $profil->nom ?></td>
    <td><?php echo $profil->prenom ?></td>
    <td><?php echo $profil->adress ?></td>
    <td><img class="img-responsive center-block" 
        height="600px" width="600px" 
        src="data:image/jpg;base64,<?php echo $profil->getImageLien() ?>">
</td>
               <td><embed src="data:application/pdf;base64,<?php echo $profil->getCvLien() ?>" type="application/pdf" width="600px" height="600px"/>
</td>
            <td><?php echo $profil->description ?></td>
            </tr>
            </tbody>
            </table>
            </div>
