<form class="needs-validation container"  method="post" enctype='multipart/form-data'>
    <div class="col-md-4 mb-3">
          
          <img  src="../src/images/photo/<?php echo $_SESSION['photo'];?>"  style="height:17vh ; width:10vw;" >
          <input type="file" name="photo" value="<?php echo $_SESSION['photo'];?>" placeholder="modifier" >
           <div class="valid-feedback">
                Looks good!
          </div>
    </div>
    <div class="form-row">
        
        <div class="col-md-4 mb-3">
             <label for="validationCustom01">Idientifiant</label>
            <input disabled='disabled' type="text" class="form-control" id="validationCustom01" placeholder="First name" name="id_user" value="<?php echo $_SESSION['id_user']; ?>"   >
            <div class="valid-feedback">
                 Looks good!
            </div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationCustom01">Noms</label>
        <input type="text" class="form-control" id="validationCustom01" placeholder="First name" name="uname" value="<?php echo $_SESSION['uname']; ?>" >
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationCustom02">Prenoms</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" name="upname" value="<?php echo $_SESSION['upname']; ?>" >
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationCustomUsername">Nom d'utilisateur</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupPrepend">@</span>
          </div>
          <input type="text" class="form-control" id="validationCustomUsername" value="<?php echo $_SESSION['logname']; ?>"  name="logname" >
          <div class="invalid-feedback">
            Please choose a username.
          </div>
        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="validationCustom03">Email</label>
        <input type="text" class="form-control" id="validationCustom03" value="<?php echo $_SESSION['email']; ?>" name="email" >
        <div class="invalid-feedback">
          Please provide a valid city.
        </div>
      </div>
      <div class="col-md-6 mb-3">
        <label for="validationCustom03">Mot De Passe</label>
        <input type="password" class="form-control" id="validationCustom03" value="<?php echo $_SESSION['pword']; ?>" name="pword" >
        <div class="invalid-feedback">
          Please provide a valid city.
        </div>
      </div>
      <div class="col-md-3 mb-3">
        <label for="validationCustom04">Numero de telephone</label>
        <input type="text" class="form-control" id="validationCustom04" value="<?php echo $_SESSION['phone']; ?>" name="phone" >
        <div class="invalid-feedback">
          Please provide a valid state.
        </div>
      </div>
       
     
    </div>
   
    <input class="btn btn-primary btn-sm" Value='modifier' name='modif_user' type="submit">
  </form>