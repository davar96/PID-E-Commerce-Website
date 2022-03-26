<div class="container my-5">
    <form id="mon_formulaire" method="post">
        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" placeholder="votre nom">
        </div>

        <div class="mb-3">
            <label for="prenom" class="form-label">Prénom</label>
            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="votre prénom">
        </div>

        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" class="form-control" id="age" name="age" placeholder="votre age">
        </div>

        <input type="submit" class="btn btn-outline-success" name="soumettreBtn" id="soumettreBtn" value="Soumettre" />

    </form>
</div>


<script type="text/javascript">
    $(document).ready(function() {
        $('#mon_formulaire').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: 'test.php',
                data: $(this).serialize(),
                success: function(response) {
                    console.log(response);
                    var jsonData = JSON.parse(response);

                    // user is logged in successfully in the back-end
                    // let's redirect
                    if (jsonData.success == "1") {
                        alert(jsonData);
                    } else {
                        alert('Invalid Credentials!');
                    }
                }
            });
        });
    });
</script>