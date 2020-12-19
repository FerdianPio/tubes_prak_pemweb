<div class="col-12">
    <div class="row">
        <h2 style="padding-left: 20px;"><i class="fa fa-user-o"></i></h2>
        <h4 style="padding-top:8px;padding-left:20px;">   <?php echo $row['username'];?></h4>
    </div>
    <hr style="border:4px solid gray;">
</div>
            
            <!--Left Bio-->
            <div class="col-6" style="padding-top: 20px;">
                <div class="card bg-secondary" style="margin-bottom:20px;">
                    <img src="<?php $_SESSION['pict']=$row['pict'];echo $row['pict'];?>" class="card-img" alt="avatar" style="padding: 20px;" height="300px">
                    <div class="card-body">
                        <button type="button" class="btn btn-light btn-block" data-toggle="modal" data-target="#pictMod">Pilih foto</button>
                    </div>
                </div>
                <button type="button" class="btn btn-light btn-block" data-toggle="modal" data-target="#passMod"> <i class="fa fa-wrench"></i> Ubah kata sandi</button>
                <br>
                
                <form method="post" action="getLogout.php"><button type="submit" class="btn btn-danger btn-block" name="logout"> Logout</button></form>

                
                <br>
            </div>
            
            <!--Right Bio-->
            <div class="col-6" style="padding-top:20px;">
                <h5>Biodata Diri</h5>
                <div class="row" style="padding-top: 20px;">
                    <label for="nama" class="col-3">Nama</label>
                    <div id="nama" class="col-9"> <?php echo $row['full_name'];?> <a type="button" style="color: teal;" data-toggle="modal" data-target="#nameMod"><small>ubah</small></a>
                    </div>
                </div>
                <div class="row" style="padding-top: 20px;">
                    <label for="tanggalLahir" class="col-3">Tanggal lahir</label>
                    <div id="tanggalLahir" class="col-9">
                        <?php
                            if($row['tanggal']!=null){
                                echo $row['tanggal'];
                            }
                        ?>  
                        <a type="button" style="color: teal;" data-toggle="modal" data-target="#birthMod"><small>ubah</small></a>
                    </div>
                </div>
                <div class="row" style="padding-top: 20px;">
                    <label for="jenisKelamin" class="col-3">Jenis kelamin</label>
                    <div id="jenisKelamin" class="col-9">
                        <?php
                            if($row['gender']!=null){
                                echo $row['gender'];
                            }
                        ?>  
                        <a type="button" style="color: teal;" data-toggle="modal" data-target="#genderMod"><small>ubah</small></a>
                    </div>
                </div>
                <br>

                <h5>Kontak</h5>
                <div class="row" style="padding-top: 20px;">
                    <label for="email" class="col-3">Email</label>
                    <div id="email" class="col-9"> <?php echo $row['email'];?> <a type="button" style="color: teal;" data-toggle="modal" data-target="#emailMod"><small>ubah</small></a></div>
                </div>
                <div class="row" style="padding-top: 20px;">
                    <label for="nomorHP" class="col-3">Nomor HP</label>
                    <div id="nomorHP" class="col-9">  
                        <?php
                            if($row['HP']!=null){
                                echo $row['HP'];
                            }
                        ?>
                        <a type="button" style="color: teal;" data-toggle="modal" data-target="#HPMod"><small>ubah</small></a>
                    </div>
                </div>


            </div>

<!--Name Modal-->
<div class="modal fade" id="nameMod" tabindex="-1" aria-labelledby="label_nameMod" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-tittle" id="label_nameMod">Name</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form method="post" action="getProfileEdit.php">
                <div class="form-group">
                    <label for="nameEdit">Name</label>
                    <input type="text" class="form-control" id="nameEdit" name="nameEdit">
                </div>
                <button type="submit" id="name_submit" name="name_submit">Submit</button>
            </form>
        </div>
        </div>
    </div>
</div>

<!--Birth Modal-->
<div class="modal fade" id="birthMod" tabindex="-1" aria-labelledby="label_birthMod" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-tittle" id="label_birthMod">Tanggal lahir</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form method="post" action="getProfileEdit.php">
                <div class="form-group">
                    <label for="birthEdit">Birth</label>
                    <input type="date" class="form-control" id="birthEdit" name="birthEdit">
                </div>
                <button type="submit" id="birth_submit" name="birth_submit">Submit</button>
            </form>
        </div>
        </div>
    </div>
</div>

<!--Gender Modal-->
<div class="modal fade" id="genderMod" tabindex="-1" aria-labelledby="label_genderMod" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-tittle" id="label_genderMod">Gender</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form method="post" action="getProfileEdit.php">
                <div class="form-group row">
                    <input type="radio" name="genderEdit" id="pria" value="Pria">
                    <label for="pria">Pria</label>
                    <input type="radio" name="genderEdit" id="wanita" value="Wanita">
                    <label for="wanita">Wanita</label>
                    
                </div>
                <button type="submit" id="gender_submit" name="gender_submit">Submit</button>
            </form>
        </div>
        </div>
    </div>
</div>

<!--Email Modal-->
<div class="modal fade" id="emailMod" tabindex="-1" aria-labelledby="label_emailMod" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-tittle" id="label_emailMod">Email</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form method="post" action="getProfileEdit.php">
                <div class="form-group">
                    <label for="emailEdit">Email</label>
                    <input type="email" class="form-control" id="emailEdit" name="emailEdit">
                </div>
                <button type="submit" id="email_submit" name="email_submit">Submit</button>
            </form>
        </div>
        </div>
    </div>
</div>

<!--HP Modal-->
<div class="modal fade" id="HPMod" tabindex="-1" aria-labelledby="label_HPMod" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-tittle" id="label_HPMod">Nomor HP</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form method="post" action="getProfileEdit.php">
                <div class="form-group">
                    <label for="nameEdit">Nomor HP</label>
                    <input type="text" class="form-control" id="HPEdit" name="HPEdit">
                </div>
                <button type="submit" id="HP_submit" name="HP_submit">Submit</button>
            </form>
        </div>
        </div>
    </div>
</div>

<!--Pict Modal-->
<div class="modal fade" id="pictMod" tabindex="-1" aria-labelledby="label_pictMod" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-tittle" id="label_pictMod">Password</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form method="post" action="getProfileEdit.php" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="hidden" name="picture">
                    <label for="pictEdit">Add new password instead</label>
                    <input type="file" accept="image/*" class="form-control-file" id="pictEdit" name="pictEdit">
                </div>
                <button type="submit" id="pict_submit" name="pict_submit">Submit</button>
            </form>
        </div>
        </div>
    </div>
</div>


<!--Pass Modal-->
<div class="modal fade" id="passMod" tabindex="-1" aria-labelledby="label_nameMod" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-tittle" id="label_passMod">Password</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form method="post" action="getProfileEdit.php">
                <div class="form-group">
                    <label for="passEdit">Add new password instead</label>
                    <input type="password" class="form-control" id="passEdit" name="passEdit">
                </div>
                <button type="submit" id="pass_submit" name="pass_submit">Submit</button>
            </form>
        </div>
        </div>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>