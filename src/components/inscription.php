<div class="container my-5 py-5 z-depth-1">
    <!--Section: Content-->
    <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">
 

      <!--Grid row-->
        <div class="row d-flex justify-content-center">

            <!--Grid column-->
            <div class="col-md-6">
                <form class="text-center" method="post" enctype='multipart/form-data'>
                    <h1 id="register">Register</h1>
                    <div class="input-group">
                        <label for="photo"></label>
                        <img class="w-25"  src="../src/images/bootstrapicon/person-fill.svg" alt="Logo">
                        <input class="form-control mb-4" style="border: 0px; margin-top:40px" type="file" name='photo' >
                        
                    </div>
                    <div class="input-group">
                        <label for="uname"></label>
                        <input class="form-control mb-4" placeholder="Noms ..."  name="uname">
                        
                    </div>
                    <div class="input-group">
                        <label for="upname"></label>
                        <input class="form-control mb-4" placeholder="Prenoms ..."  name="upname">
                    </div>
                    <div class="input-group">
                        <label for="email"></label>
                        <input class="form-control mb-4" placeholder="E-mail..."  name="email">
                    </div>
                    <div class="input-group">
                        <label for="password"></label>
                        <input class="form-control mb-4" placeholder="Mot de passe..."  name="pword" type="password">
                    </div>             
                    <div class="input-group">
                        <label for="phone"></label>
                        <input class="form-control mb-4" placeholder="Numero de telephone..."  name="phone">
                    </div>
                    <div class="input-group">
                        <label for="logname"></label>
                        <input class="form-control mb-4" placeholder="Nom d'utilisateur ..."  name="logname">                    
            
                    </div>

                    <div class="form-control mb-4">
                        <label for="form-check">Type d'utilisateur</label>
                        <div class="input-group ">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="type_user" value="client" />
                                <label class="form-check-label" for="inlineCheckbox1">Client</label>
                            </div>

                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="type_user"   value="personnel" />
                            <label class="form-check-label" for="inlineCheckbox2">Personnel</label>
                            </div>
                        </div>
                            
                    </div>
                    <div class="input-group">
                        <input class="btn btn-info btn-block my-4" type="submit" name="inscrire"  value="s'inscrire">
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
